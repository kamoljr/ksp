<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class userhistory_m extends Model
{
  public function index()
  {
   
  }

  public function search_make_id()
  {
    $this->shared_m = model("member/shared_m");
    // $structure_id = $this->shared_m->find_max_id("structure_org","structure_id");

    $sql = "SELECT max(structure_id) as structure_id FROM structure_org where del_item = '0'";
    $result = $this->db->query($sql)->getResultObject();
    $structure_id = $result[0]->structure_id;


    $sql = "Select user_id as field_id,user_name as field_name From structure_user where del_item = '0' and structure_id = $structure_id order by user_name asc";
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function search_structure_name()
  {
    $sql = "Select structure_id as field_id,structure_name as field_name From structure_org where del_item = '0' order by structure_id desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function get_data()
  {
    $totalCol = $_POST["iColumns"];

    $search_make_date = $_POST["search_make_date"];
    $search_make_id = $_POST["search_make_id"];
    
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    $this->shared_m = model("member/shared_m");
    $search_make_date = $this->shared_m->format_ddmmyy_to_yymmdd($search_make_date);

    $query = "SELECT
    log_id, make_id, make_date, make_date_mktime, make_time, user_name, app_id, app_name, action_menu, action_detail, get_id
    FROM log_ksp as tu
    WHERE tu.make_id > 0";

    if ($search_make_date != "") {
       $query .= "  and (tu.make_date like '%$search_make_date%' )";
    }
    if ($search_make_id != "") {
       $query .= "  and (tu.make_id = '$search_make_id' )";
    }
    //echo $query;
    $totalRecords = count($this->db->query($query)->getResultArray());

    $columns = explode(',', $columns);

    for ($i = 0; $i < $_POST["iSortingCols"]; $i++) {
      $sortcol = $_POST["iSortCol_" . $i];
      if ($_POST["bSortable_" . $sortcol]) {
        $query .= " ORDER BY ($columns[$sortcol])" . $_POST["sSortDir_" . $i];
      }
    }
   
    $query .= " OFFSET $start ROWS FETCH FIRST $page_length ROWS ONLY;";
    $result = $this->db->query($query);
    $data = $result->getResultArray();

    $resData = json_encode([
      "aaData" => $data,
      "iTotalDisplayRecords" => $totalRecords,
      "iTotalRecords" => $totalRecords,
      "sColumns" => $columns,
      "sEcho" => $_POST["sEcho"],
    ]);

    return $resData;
  }
  public function edit_data()
  {
    $ids = $_POST["ids"];

    $sql = "Select unit_chief,unit_name From structure_unit where structure_unit_id = " . $ids;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  


  

  public function save_data()
  {
    $this->shared_m = model("member/shared_m");

    $ids = $_POST["ids"];
    $unit_name = $this->shared_m->replace_str($_POST["unit_name"]);
    
    $search_structure_name = $this->shared_m->replace_str($_POST["search_structure_name"]);

    $chift_unit_add = "0";
    if(isset($_POST["chift_unit_add"])){
      $chift_unit_add = $this->shared_m->replace_str($_POST["chift_unit_add"]);
    }
    if ($chift_unit_add == ""){
      $chift_unit_add = 0;
    }
    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    
    if ($ids == "" ){
      $sql = "Select count(unit_name) as count_reccord From structure_unit where del_item = '0' and unit_name = '".$unit_name."' and structure_id=".$search_structure_name;
    }else{
      $sql = "Select count(unit_name) as count_reccord From structure_unit where del_item = '0' and unit_name = '".$unit_name."' and structure_unit_id <> ".$ids." and structure_id = ".$search_structure_name;
    }
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord == 0){
      if ($ids == '') {
        
        //$sql = "INSERT INTO unit_name (unit_name) VALUES ('$unit_name')";
        $sql = "INSERT INTO unit_name (unit_name,make_id,make_date,make_date_mktime) VALUES ('$unit_name',$make_id,$make_date,'$make_date_mktime')";
       
        $result = $this->db->query($sql);
        

        $max_unit_id = $this->shared_m->find_max_id("unit_name","unit_id");

      //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("unit_name","unit_id");

      $action_detail = $_POST["for_log_app_name"]." : ".$unit_name."<br>";
      $action_detail = $action_detail."test : ".$unit_name;

      $unit_name = $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 

        $sql = "INSERT INTO structure_unit (unit_id,unit_name,unit_chief,structure_id,make_id,make_date,make_date_mktime) VALUES ($max_unit_id,'$unit_name',$chift_unit_add,$search_structure_name,$make_id,$make_date,'$make_date_mktime')";
        //echo $sql;
        $result = $this->db->query($sql);
        

        $max_structure_unit_id = $this->shared_m->find_max_id("structure_unit","structure_unit_id");

        $sql = "Update unit_name set structure_unit_id = '$max_structure_unit_id' Where unit_id = $max_unit_id";
        $result = $this->db->query($sql);

      } else {
        $sql = "Update structure_unit set unit_name = '$unit_name',unit_chief = $chift_unit_add,modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where structure_unit_id = $ids";
        //echo $sql;
        $result = $this->db->query($sql);
        
        //------------------log แก้ไข---------------------
        $max_ids = $ids;
        
        $action_detail = $_POST["for_log_app_name"]." : ".$unit_name."<br>";
        $action_detail = $action_detail."test : ".$unit_name;

        $unit_name = $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
      }
      
    }else{
      
      $result = "duplicatename";
    }

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $unit_id = $_POST["unit_id"];
    $search_structure_name = $_POST["search_structure_name"];
     $sql = "Select count(unit_id) as count_reccord From structure_group where del_item = '0' and unit_id = " . $unit_id." and structure_id = ".$search_structure_name;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "SELECT unit_id,structure_id FROM structure_unit where structure_unit_id = ".$ids;
    $result = $this->db->query($sql)->getResultObject();
    $unit_id = $result[0]->unit_id;
    $structure_id = $result[0]->structure_id;


    $sql = "Select count(unit_id) as count_reccord From structure_group where del_item = '0' and unit_id = " . $unit_id." and structure_id = ".$structure_id;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update structure_unit set del_item = '1',delete_id=$make_id,delete_date=$make_date Where structure_unit_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
        $max_ids = $ids;
        
        $action_detail = $_POST["for_log_app_name"]." : ".$unit_name."<br>";
        $action_detail = $action_detail."test : ".$unit_name;

        $unit_name = $this->shared_m->logksp("ลบ",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
    }
    return json_encode($result);
  }
}
