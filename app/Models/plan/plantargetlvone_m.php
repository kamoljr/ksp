<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Plantargetlvone_m extends Model
{
  public function index()
  {
   
  }

  public function search_strategylvone_id()
  {
    $sql = "Select strategylvone_id as field_id,strategylvone as field_name From str_strategylvone where del_item = '0' order by strategylvone_id desc";

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
    $search_strategylvone_id = $_POST["search_strategylvone_id"];
    $search_plantargetlvone = $_POST["search_plantargetlvone"];
   
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT plantargetlvone_id,plantargetlvone

    FROM  str_plantargetlvone

    WHERE (del_item = N'0')";

    if ($search_strategylvone_id != "") {
       $query .= "  and (strategylvone_id = '$search_strategylvone_id' )";
    }
    if ($search_plantargetlvone != "") {
       $query .= "  and (plantargetlvone like '%$search_plantargetlvone%' )";
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

    $sql = "Select plantargetlvone_id,plantargetlvone,plantargetlvone_comment From str_plantargetlvone where plantargetlvone_id = " . $ids;
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
    $search_strategylvone_id = $this->shared_m->replace_str($_POST["search_strategylvone_id"]);

    $plantargetlvone_add = $this->shared_m->replace_str($_POST["plantargetlvone_add"]);
    $plantargetlvone_comment_add = $this->shared_m->replace_str($_POST["plantargetlvone_comment_add"]);
    //--------------
    

    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_plantargetlvone (strategylvone_id,plantargetlvone,plantargetlvone_comment,make_id,make_date,make_date_mktime) VALUES ('$search_strategylvone_id','$plantargetlvone_add','$plantargetlvone_comment_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_plantargetlvone","plantargetlvone_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$plantargetlvone_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;
      
      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      

    } else {
      $sql = "Update str_plantargetlvone set plantargetlvone = '$plantargetlvone_add',plantargetlvone_comment = '$plantargetlvone_comment_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where plantargetlvone_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$plantargetlvone_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    
     $sql = "Select count(indicatorlvone_id) as count_reccord From str_indicatorlvone where del_item = '0' and plantargetlvone_id = " . $ids;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "Select count(indicatorlvone_id) as count_reccord From str_indicatorlvone where del_item = '0' and plantargetlvone_id = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update str_plantargetlvone set del_item = '1',delete_id=$make_id,delete_date=$make_date Where plantargetlvone_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT plantargetlvone as aname FROM str_plantargetlvone where plantargetlvone_id = ".$ids;// แก้
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
