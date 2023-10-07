<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Plantargetlvthree_m extends Model
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

  public function search_strategylvtwo_id()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "Select strategylvtwo_id as field_id,strategylvtwo as field_name From str_strategylvtwo where strategylvone_id = $ctr1 and del_item = '0' order by strategylvtwo_id desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function search_strategylvthree_id()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "Select strategylvthree_id as field_id,strategylvthree as field_name From str_strategylvthree where strategylvtwo_id = $ctr1 and del_item = '0' order by strategylvthree_id desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function plantargetlvtwo_id_add()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "Select plantargetlvtwo_id as field_id,plantargetlvtwo as field_name From str_plantargetlvtwo where strategylvtwo_id = $ctr1 and del_item = '0' order by plantargetlvtwo_id desc";

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
    // $search_strategylvone_id = $_POST["search_strategylvone_id"];
    $search_strategylvthree_id = $_POST["search_strategylvthree_id"];
    $search_plantargetlvthree = $_POST["search_plantargetlvthree"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT plantargetlvthree_id,plantargetlvthree,plantargetlvtwo

    FROM   dbo.str_plantargetlvthree INNER JOIN
           dbo.str_plantargetlvtwo ON dbo.str_plantargetlvthree.plantargetlvtwo_id = dbo.str_plantargetlvtwo.plantargetlvtwo_id

    WHERE (dbo.str_plantargetlvthree.del_item = N'0')";

    if ($search_strategylvthree_id != "") {
       $query .= "  and (dbo.str_plantargetlvthree.strategylvthree_id = '$search_strategylvthree_id')";
    }
    
    if ($search_plantargetlvthree != "") {
       $query .= "  and (dbo.str_plantargetlvthree.plantargetlvthree like '%$search_plantargetlvthree%' )";
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

    $sql = "Select 
    str_plantargetlvthree.plantargetlvthree_id,
    str_plantargetlvthree.plantargetlvthree,
    str_plantargetlvthree.plantargetlvtwo_id,
    str_plantargetlvthree.plantargetlvthree_comment 
    From dbo.str_plantargetlvthree
    
    where str_plantargetlvthree.plantargetlvthree_id = ".$ids;
    
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
    $search_strategylvthree_id = $this->shared_m->replace_str($_POST["search_strategylvthree_id"]);
    
    $plantargetlvtwo_id_add = $this->shared_m->replace_str($_POST["plantargetlvtwo_id_add"]);

    $plantargetlvthree_add = $this->shared_m->replace_str($_POST["plantargetlvthree_add"]);
    $plantargetlvthree_comment_add = $this->shared_m->replace_str($_POST["plantargetlvthree_comment_add"]);
    //--------------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_plantargetlvthree (strategylvthree_id,plantargetlvtwo_id,plantargetlvthree,plantargetlvthree_comment,make_id,make_date,make_date_mktime) VALUES ($search_strategylvthree_id,$plantargetlvtwo_id_add,'$plantargetlvthree_add','$plantargetlvthree_comment_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_plantargetlvthree","plantargetlvthree_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$plantargetlvthree_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_plantargetlvthree set plantargetlvtwo_id = $plantargetlvtwo_id_add,plantargetlvthree = '$plantargetlvthree_add',plantargetlvthree_comment = '$plantargetlvthree_comment_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where plantargetlvthree_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$plantargetlvthree_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    
     $sql = "Select count(indicatorlvthree_id) as count_reccord From str_indicatorlvthree where del_item = '0' and plantargetlvthree_id = " . $ids;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];



    $sql = "Select count(indicatorlvthree_id) as count_reccord From str_indicatorlvthree where del_item = '0' and plantargetlvthree_id = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update str_plantargetlvthree set del_item = '1',delete_id=$make_id,delete_date=$make_date Where plantargetlvthree_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT plantargetlvthree as aname FROM str_plantargetlvthree where plantargetlvthree_id = ".$ids;// แก้
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
