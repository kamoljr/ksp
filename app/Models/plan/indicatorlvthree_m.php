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

  public function search_plantargetlvtwo_id()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "Select plantargetlvtwo_id as field_id,plantargetlvtwo as field_name From str_plantargetlvtwo where strategylvtwo_id = $ctr1 and del_item = '0' order by plantargetlvtwo_id desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function indicatorlvone_id_add()
  {
    $ctr1 = $_POST["ctr1"];//plantargetlvtwo_id
    $sql = "Select str_indicatorlvone.indicatorlvone_id as field_id,str_indicatorlvone.indicatorlvone as field_name 
    From dbo.str_plantargetlvtwo INNER JOIN
    dbo.str_indicatorlvone ON dbo.str_plantargetlvtwo.plantargetlvone_id = dbo.str_indicatorlvone.plantargetlvone_id
    where str_plantargetlvtwo.plantargetlvtwo_id = $ctr1 and str_indicatorlvone.del_item = '0' order by indicatorlvone_id desc";

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
    $search_plantargetlvtwo_id = $_POST["search_plantargetlvtwo_id"];
    $search_indicatorlvtwo = $_POST["search_indicatorlvtwo"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT  dbo.str_indicatorlvtwo.indicatorlvtwo, dbo.str_indicatorlvone.indicatorlvone, dbo.str_indicatorlvtwo.indicatorlvtwo_id

    FROM   dbo.str_indicatorlvtwo INNER JOIN
          dbo.str_indicatorlvone ON dbo.str_indicatorlvtwo.indicatorlvone_id = dbo.str_indicatorlvone.indicatorlvone_id

    WHERE (dbo.str_indicatorlvtwo.del_item = N'0')";

    if ($search_strategylvtwo_id != "") {
       $query .= "  and (dbo.str_indicatorlvtwo.strategylvtwo_id = '$search_strategylvtwo_id')";
    }
    if ($search_plantargetlvtwo_id != "") {
       $query .= "  and (dbo.str_indicatorlvtwo.plantargetlvtwo_id = '$search_plantargetlvtwo_id')";
    }
    
    if ($search_indicatorlvtwo != "") {
       $query .= "  and (dbo.str_indicatorlvtwo.indicatorlvtwo like '%$search_indicatorlvtwo%' )";
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
    indicatorlvone_id, indicatorlvtwo, indicatorlvtwo_unit

    From  dbo.str_indicatorlvtwo
    
    where str_indicatorlvtwo.indicatorlvtwo_id = ".$ids;
    
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
    $search_plantargetlvtwo_id = $this->shared_m->replace_str($_POST["search_plantargetlvtwo_id"]);
    

    $indicatorlvone_id_add = $this->shared_m->replace_str($_POST["indicatorlvone_id_add"]);
    $indicatorlvtwo_add = $this->shared_m->replace_str($_POST["indicatorlvtwo_add"]);
    $indicatorlvtwo_unit_add = $this->shared_m->replace_str($_POST["indicatorlvtwo_unit_add"]);
    //--------------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_indicatorlvtwo (strategylvtwo_id,plantargetlvtwo_id,indicatorlvone_id,indicatorlvtwo,indicatorlvtwo_unit,make_id,make_date,make_date_mktime) VALUES ($search_strategylvtwo_id,$search_plantargetlvtwo_id,$indicatorlvone_id_add,'$indicatorlvtwo_add','$indicatorlvtwo_unit_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_indicatorlvtwo","indicatorlvtwo_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$indicatorlvtwo_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_indicatorlvtwo set indicatorlvone_id = $indicatorlvone_id_add,indicatorlvtwo = '$indicatorlvtwo_add',indicatorlvtwo_unit = '$indicatorlvtwo_unit_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where indicatorlvtwo_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$indicatorlvtwo_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    
     $sql = "Select count(indicatorlvthree_id) as count_reccord From str_indicatorlvthree where del_item = '0' and indicatorlvtwo_id = " . $ids;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];



    $sql = "Select count(indicatorlvthree_id) as count_reccord From str_indicatorlvthree where del_item = '0' and indicatorlvtwo_id = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update str_indicatorlvtwo set del_item = '1',delete_id=$make_id,delete_date=$make_date Where indicatorlvtwo_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT indicatorlvtwo as aname FROM str_indicatorlvtwo where indicatorlvtwo_id = ".$ids;// แก้
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
