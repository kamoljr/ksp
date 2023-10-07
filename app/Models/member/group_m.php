<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class Group_m extends Model
{
  public function index()
  {
   
  }

  public function create_chift_unit_add()
  {
    $sql = "Select user_id,user_name From users where del_item = '0' order by user_name asc";

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
  public function search_unit_id()
  {
    $structure_id = $_POST["ctr1"];
    $sql = "Select unit_id as field_id,unit_name as field_name From structure_unit where del_item = '0' and structure_id = $structure_id order by unit_name desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function get_data()
  {
    
    
    //---------ใส่ค่า----------
    $search_structure_name = $_POST["search_structure_name"];
    $search_unit_id = $_POST["search_unit_id"];
    $group_name_search = $_POST["group_name_search"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT dbo.structure_unit.unit_name, dbo.structure_group.group_name, dbo.structure_group.group_id, dbo.structure_group.structure_group_id, dbo.structure_group.structure_id, dbo.structure_group.unit_id

    FROM  dbo.structure_unit INNER JOIN
    dbo.structure_group ON dbo.structure_unit.unit_id = dbo.structure_group.unit_id AND dbo.structure_unit.structure_id = dbo.structure_group.structure_id

    WHERE (dbo.structure_group.del_item = N'0')";

    if ($search_structure_name != "") {
       $query .= "  and (dbo.structure_group.structure_id = '$search_structure_name')";
    }
    if ($search_unit_id != "") {
       $query .= "  and (dbo.structure_group.unit_id = '$search_unit_id' )";
    }
    if ($group_name_search != "") {
       $query .= "  and (dbo.structure_group.unit_id like '%$group_name_search%' )";
    }
     //-----------------------
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

    $sql = "Select group_chief,group_name,tel From structure_group where structure_group_id = " . $ids;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  


  

  public function save_data()
  {
    $this->shared_m = model("member/shared_m");

    $ids = $_POST["ids"];
    //----รับค่า------
    $search_structure_name = $this->shared_m->replace_str($_POST["search_structure_name"]);
    $search_unit_id = $this->shared_m->replace_str($_POST["search_unit_id"]);

    $group_name_add = $this->shared_m->replace_str($_POST["group_name_add"]);
    $tel_add = $this->shared_m->replace_str($_POST["tel_add"]);
    //--------------
    

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
      $sql = "Select count(structure_group_id) as count_reccord From structure_group where del_item = '0' and group_name = '".$group_name_add."' and structure_id=".$search_structure_name." and unit_id = ".$search_unit_id;
    }else{
      $sql = "Select count(structure_group_id) as count_reccord From structure_group where del_item = '0' and group_name = '".$group_name_add."' and structure_group_id <> ".$ids." and structure_id = ".$search_structure_name." and unit_id = ".$search_unit_id;
    }

    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;


    if ($count_reccord == 0){
      if ($ids == '') {
        
        $sql = "INSERT INTO group_name (group_name,tel,make_id,make_date,make_date_mktime) VALUES ('$group_name_add','$tel_add',$make_id,$make_date,'$make_date_mktime')";
        //echo $sql;

        $result = $this->db->query($sql);
       

        $max_group_id = $this->shared_m->find_max_id("group_name","group_id");
        //echo "max_group_id".$max_group_id;

        $sql = "INSERT INTO structure_group (group_id,unit_id,group_name,tel,group_chief,structure_id,make_id,make_date,make_date_mktime) VALUES ($max_group_id,$search_unit_id,'$group_name_add','$tel_add',$chift_unit_add,$search_structure_name,$make_id,$make_date,'$make_date_mktime')";
        
        $result = $this->db->query($sql);
         //------------------log เพิ่ม---------------------
        $max_ids = $this->shared_m->find_max_id("structure_group","structure_group_id");//แก่

        $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$group_name_add."<br>";//แก่
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
        

        $max_structure_group_id = $this->shared_m->find_max_id("structure_group","structure_group_id");

        $sql = "Update group_name set structure_group_id = '$max_structure_group_id' Where group_id = $max_group_id";
        $result = $this->db->query($sql);

      } else {
        $sql = "Update structure_group set group_name = '$group_name_add',tel = '$tel_add',group_chief = $chift_unit_add,modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where structure_group_id = $ids";
        //echo $sql;
        $result = $this->db->query($sql);
        //------------------log แก้ไข---------------------
        $max_ids = $ids;
        
        $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$group_name_add."<br>";//แก้
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
      }
    }else{
      $result = "duplicatename";
    }

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $group_id = $_POST["group_id"];
    $search_structure_name = $_POST["search_structure_name"];
     $sql = "Select count(group_id) as count_reccord From structure_user where del_item = '0' and group_id = " . $group_id." and structure_id = ".$search_structure_name;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "SELECT group_id,structure_id FROM structure_group where structure_group_id = ".$ids;
    $result = $this->db->query($sql)->getResultObject();
    $group_id = $result[0]->group_id;
    $structure_id = $result[0]->structure_id;


    $sql = "Select count(group_id) as count_reccord From structure_user where del_item = '0' and group_id = " . $group_id." and structure_id = ".$structure_id;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update structure_group set del_item = '1',delete_id=$make_id,delete_date=$make_date Where structure_group_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT group_name as aname FROM structure_group where structure_group_id = ".$ids;// แก้
      //echo $sql;
      $resultdellog = $this->db->query($sql)->getResultObject();
      $aname = $resultdellog[0]->aname;
      
      
      $action_detail = "ลบ ".$_POST["for_log_app_name"]." : ".$aname."<br>";
      
      $this->shared_m->logksp("ลบ",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    return json_encode($result);
  }
}
