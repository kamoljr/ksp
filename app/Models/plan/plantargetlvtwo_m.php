<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Plantargetlvtwo_m extends Model
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
  public function plantargetlvone_id_add()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "Select plantargetlvone_id as field_id,plantargetlvone as field_name From str_plantargetlvone where strategylvone_id = $ctr1 and del_item = '0' order by plantargetlvone_id desc";

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
    $search_strategylvtwo_id = $_POST["search_strategylvtwo_id"];
    $search_plantargetlvtwo = $_POST["search_plantargetlvtwo"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT plantargetlvtwo_id,plantargetlvtwo,plantargetlvone

    FROM   dbo.str_plantargetlvtwo INNER JOIN
           dbo.str_plantargetlvone ON dbo.str_plantargetlvtwo.plantargetlvone_id = dbo.str_plantargetlvone.plantargetlvone_id

    WHERE (dbo.str_plantargetlvtwo.del_item = N'0')";

    if ($search_strategylvtwo_id != "") {
       $query .= "  and (dbo.str_plantargetlvtwo.strategylvtwo_id = '$search_strategylvtwo_id')";
    }
    
    if ($search_plantargetlvtwo != "") {
       $query .= "  and (dbo.str_plantargetlvtwo.plantargetlvtwo like '%$search_plantargetlvtwo%' )";
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
    str_plantargetlvtwo.plantargetlvtwo_id,
    str_plantargetlvtwo.plantargetlvtwo,
    str_plantargetlvtwo.plantargetlvone_id,
    str_plantargetlvtwo.plantargetlvtwo_comment 
    From dbo.str_plantargetlvtwo INNER JOIN
    dbo.str_plantargetlvone ON dbo.str_plantargetlvtwo.plantargetlvone_id = dbo.str_plantargetlvone.plantargetlvone_id
    
    where str_plantargetlvtwo.plantargetlvtwo_id = ".$ids;
    
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
    $search_strategylvtwo_id = $this->shared_m->replace_str($_POST["search_strategylvtwo_id"]);
    

    $plantargetlvone_id_add = $this->shared_m->replace_str($_POST["plantargetlvone_id_add"]);
    $plantargetlvtwo_add = $this->shared_m->replace_str($_POST["plantargetlvtwo_add"]);
    $plantargetlvtwo_comment_add = $this->shared_m->replace_str($_POST["plantargetlvtwo_comment_add"]);
    //--------------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_plantargetlvtwo (strategylvtwo_id,plantargetlvone_id,plantargetlvtwo,plantargetlvtwo_comment,make_id,make_date,make_date_mktime) VALUES ($search_strategylvtwo_id,$plantargetlvone_id_add,'$plantargetlvtwo_add','$plantargetlvtwo_comment_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_plantargetlvtwo","plantargetlvtwo_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$plantargetlvtwo_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_plantargetlvtwo set plantargetlvone_id = $plantargetlvone_id_add,plantargetlvtwo = '$plantargetlvtwo_add',plantargetlvtwo_comment = '$plantargetlvtwo_comment_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where plantargetlvtwo_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$plantargetlvtwo_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    
     $sql = "Select count(indicatorlvtwo_id) as count_reccord From str_indicatorlvtwo where del_item = '0' and plantargetlvtwo_id = " . $ids;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];



    $sql = "Select count(indicatorlvtwo_id) as count_reccord From str_indicatorlvtwo where del_item = '0' and plantargetlvtwo_id = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update str_plantargetlvtwo set del_item = '1',delete_id=$make_id,delete_date=$make_date Where plantargetlvtwo_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT plantargetlvtwo as aname FROM str_plantargetlvtwo where plantargetlvtwo_id = ".$ids;// แก้
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
