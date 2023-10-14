<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Indicatoroffice_m extends Model
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
  public function search_strategyyear_id()
  {
    $sql = "select budget_year AS field_id, budget_year AS field_name From str_strategyyear where  del_item = '0' order by budget_year desc";

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
  public function search_strategylvfour_id()
  {
    // $ctr1 = $_POST["ctr1"];
    $sql = "select strategylvfour_id AS field_id, start_year + '-' + end_year AS field_name From str_strategylvfour where  del_item = '0' order by strategylvfour_id desc";

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
  public function search_plantargetlvfour_id()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "Select plantargetlvfour_id as field_id,plantargetlvfour as field_name From str_plantargetlvfour where strategylvfour_id = $ctr1 and del_item = '0' order by plantargetlvfour_id desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function indicatorlvthree_id_add()
  {
    $ctr1 = $_POST["ctr1"];//plantargetlvtwo_id
    $sql = "Select str_indicatorlvthree.indicatorlvthree_id as field_id,str_indicatorlvthree.indicatorlvthree as field_name 
    From dbo.str_plantargetlvfour INNER JOIN
    dbo.str_indicatorlvthree ON dbo.str_plantargetlvfour.plantargetlvthree_id = dbo.str_indicatorlvthree.plantargetlvthree_id
    where str_plantargetlvfour.plantargetlvfour_id = $ctr1 and str_indicatorlvthree.del_item = '0' order by indicatorlvthree_id desc";

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
    $search_strategyyear_id = $_POST["search_strategyyear_id"];
    // $search_plantargetlvfour_id = $_POST["search_plantargetlvfour_id"];
    // $search_indicatorlvthree = $_POST["search_indicatorlvthree"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT  org_ind_id,org_ind

    FROM   str_org_ind 

    WHERE (del_item = N'0')";

    if ($search_strategyyear_id != "") {
       $query .= "  and (budget_year = '$search_strategyyear_id')";
    }
    
    
    // if ($search_indicatorlvthree != "") {
    //    $query .= "  and (dbo.str_indicatorlvfour.indicatorlvthree like '%$search_indicatorlvthree%' )";
    // }
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
    org_ind_id, org_ind,org_ind_unit

    From  dbo.str_org_ind
    
    where org_ind_id = ".$ids;
    
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
    $search_strategyyear_id = $this->shared_m->replace_str($_POST["search_strategyyear_id"]);
    // $search_plantargetlvfour_id = $this->shared_m->replace_str($_POST["search_plantargetlvfour_id"]);
    

    $org_ind_add = $this->shared_m->replace_str($_POST["org_ind_add"]);
    $org_ind_unit_add = $this->shared_m->replace_str($_POST["org_ind_unit_add"]);
    // $indicatorlvfour_unit_add = $this->shared_m->replace_str($_POST["indicatorlvfour_unit_add"]);
    //--------------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_org_ind (budget_year,org_ind,org_ind_unit,make_id,make_date,make_date_mktime) VALUES ('$search_strategyyear_id','$org_ind_add','$org_ind_unit_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_org_ind","org_ind_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$org_ind_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_org_ind set org_ind = '$org_ind_add',org_ind_unit = '$org_ind_unit_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where org_ind_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$org_ind_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    
    // $sql = "Select count(indicatorlvfour_id) as count_reccord From str_indicatorlvfour where del_item = '0' and indicatorlvthree_id = " . $ids;
    // // echo $sql;
    // $result = $this->db->query($sql);
    // $data = $result->getResultArray();
    // $resData = json_encode($data);
    $resData = json_encode(0);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];



    // $sql = "Select count(indicatorlvfour_id) as count_reccord From str_indicatorlvfour where del_item = '0' and indicatorlvthree_id = " . $ids;
    // $result = $this->db->query($sql)->getResultObject();
    // $count_reccord = $result[0]->count_reccord;
    $count_reccord = 0;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update str_org_ind set del_item = '1',delete_id=$make_id,delete_date=$make_date Where org_ind_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT org_ind as aname FROM str_org_ind where org_ind_id = ".$ids;// แก้
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
