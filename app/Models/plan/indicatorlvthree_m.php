<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Indicatorlvthree_m extends Model
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

  public function search_plantargetlvthree_id()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "Select plantargetlvthree_id as field_id,plantargetlvthree as field_name From str_plantargetlvthree where strategylvthree_id = $ctr1 and del_item = '0' order by plantargetlvthree_id desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function indicatorlvtwo_id_add()
  {
    $ctr1 = $_POST["ctr1"];//plantargetlvtwo_id
    $sql = "Select str_indicatorlvtwo.indicatorlvtwo_id as field_id,str_indicatorlvtwo.indicatorlvtwo as field_name 
    From dbo.str_plantargetlvthree INNER JOIN
    dbo.str_indicatorlvtwo ON dbo.str_plantargetlvthree.plantargetlvtwo_id = dbo.str_indicatorlvtwo.plantargetlvtwo_id
    where str_plantargetlvthree.plantargetlvthree_id = $ctr1 and str_indicatorlvtwo.del_item = '0' order by indicatorlvtwo_id desc";

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
    $search_plantargetlvthree_id = $_POST["search_plantargetlvthree_id"];
    $search_indicatorlvthree = $_POST["search_indicatorlvthree"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT  dbo.str_indicatorlvthree.indicatorlvthree, dbo.str_indicatorlvtwo.indicatorlvtwo, dbo.str_indicatorlvthree.indicatorlvthree_id

    FROM   dbo.str_indicatorlvthree INNER JOIN
          dbo.str_indicatorlvtwo ON dbo.str_indicatorlvthree.indicatorlvtwo_id = dbo.str_indicatorlvtwo.indicatorlvtwo_id

    WHERE (dbo.str_indicatorlvthree.del_item = N'0')";

    if ($search_strategylvthree_id != "") {
       $query .= "  and (dbo.str_indicatorlvthree.strategylvthree_id = '$search_strategylvthree_id')";
    }
    if ($search_plantargetlvthree_id != "") {
       $query .= "  and (dbo.str_indicatorlvthree.plantargetlvthree_id = '$search_plantargetlvthree_id')";
    }
    
    if ($search_indicatorlvthree != "") {
       $query .= "  and (dbo.str_indicatorlvthree.indicatorlvthree like '%$search_indicatorlvthree%' )";
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
    indicatorlvtwo_id, indicatorlvthree, indicatorlvthree_unit

    From  dbo.str_indicatorlvthree
    
    where str_indicatorlvthree.indicatorlvthree_id = ".$ids;
    
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
    $search_plantargetlvthree_id = $this->shared_m->replace_str($_POST["search_plantargetlvthree_id"]);
    

    $indicatorlvtwo_id_add = $this->shared_m->replace_str($_POST["indicatorlvtwo_id_add"]);
    $indicatorlvthree_add = $this->shared_m->replace_str($_POST["indicatorlvthree_add"]);
    $indicatorlvthree_unit_add = $this->shared_m->replace_str($_POST["indicatorlvthree_unit_add"]);
    //--------------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_indicatorlvthree (strategylvthree_id,plantargetlvthree_id,indicatorlvtwo_id,indicatorlvthree,indicatorlvthree_unit,make_id,make_date,make_date_mktime) VALUES ($search_strategylvthree_id,$search_plantargetlvthree_id,$indicatorlvtwo_id_add,'$indicatorlvthree_add','$indicatorlvthree_unit_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_indicatorlvthree","indicatorlvthree_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$indicatorlvthree_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_indicatorlvthree set indicatorlvtwo_id = $indicatorlvtwo_id_add,indicatorlvthree = '$indicatorlvthree_add',indicatorlvthree_unit = '$indicatorlvthree_unit_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where indicatorlvthree_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$indicatorlvthree_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    
    $sql = "Select count(indicatorlvfour_id) as count_reccord From str_indicatorlvfour where del_item = '0' and indicatorlvthree_id = " . $ids;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];



    $sql = "Select count(indicatorlvfour_id) as count_reccord From str_indicatorlvfour where del_item = '0' and indicatorlvthree_id = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update str_indicatorlvthree set del_item = '1',delete_id=$make_id,delete_date=$make_date Where indicatorlvthree_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT indicatorlvthree as aname FROM str_indicatorlvthree where indicatorlvthree_id = ".$ids;// แก้
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
