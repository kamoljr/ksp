<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Strategyyear_m extends Model
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
    $search_strategylvfour_id = $_POST["search_strategylvfour_id"];
    // $search_strategylvtwo_id = $_POST["search_strategylvtwo_id"];
    // $search_strategylvthree_id = $_POST["search_strategylvthree_id"];
    // $search_indicatorlvone = $_POST["search_indicatorlvone"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT strategyyear_id,budget_year,vision

    FROM  dbo.str_strategyyear
         
    WHERE (del_item = N'0')";

    if ($search_strategylvfour_id != "") {
       $query .= "  and (strategylvfour_id = $search_strategylvfour_id)";
    }
    // if ($search_plantargetlvone_id != "") {
    //    $query .= "  and (dbo.str_indicatorlvone.plantargetlvone_id = '$search_plantargetlvone_id' )";
    // }
    // if ($search_strategylvthree != "") {
    //    $query .= "  and (strategylvthree like '%$search_strategylvthree%' )";
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

    $sql = "Select budget_year,vision,popularity,target,target_ind,achievement,achievement_ind From str_strategyyear where strategyyear_id = " . $ids;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function load_default()
  {
    $ids = $_POST["ids"];

    $sql = "Select vision,popularity,achievement,achievement_ind From str_strategylvfour where strategylvfour_id = " . $ids;
    
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
    $search_strategylvfour_id = $this->shared_m->replace_str($_POST["search_strategylvfour_id"]);
    // $search_plantargetlvone_id = $this->shared_m->replace_str($_POST["search_plantargetlvone_id"]);

    $budget_year_add = $this->shared_m->replace_str($_POST["budget_year_add"]);
    

    $vision_add = $this->shared_m->replace_str($_POST["vision_add"]);
    $popularity_add = $this->shared_m->replace_str($_POST["popularity_add"]);
    $target_add = $this->shared_m->replace_str($_POST["target_add"]);
    $target_ind_add = $this->shared_m->replace_str($_POST["target_ind_add"]);
    $achievement_add = $this->shared_m->replace_str($_POST["achievement_add"]);
    $achievement_ind_add = $this->shared_m->replace_str($_POST["achievement_ind_add"]);
    // $product_add = $this->shared_m->replace_str($_POST["product_add"]);
    // $indicatorlvone_unit_add = $this->shared_m->replace_str($_POST["indicatorlvone_unit_add"]);
    //--------------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_strategyyear (strategylvfour_id,budget_year,vision,popularity,target,target_ind,achievement,achievement_ind,make_id,make_date,make_date_mktime) VALUES ($search_strategylvfour_id,'$budget_year_add','$vision_add','$popularity_add','$target_add','$target_ind_add','$achievement_add','$achievement_ind_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_strategylvfour","strategylvfour_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$vision_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_strategyyear set budget_year = '$budget_year_add',vision = '$vision_add',popularity = '$popularity_add',target = '$target_add',target_ind = '$target_ind_add',achievement = '$achievement_add',achievement_ind = '$achievement_ind_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where strategyyear_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$budget_year_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    
    $sql = "Select count(policyksp_id) as count_reccord From str_policyksp where del_item = '0' and strategyyear_id = " . $ids;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];



    $sql = "Select count(policyksp_id) as count_reccord From str_policyksp where del_item = '0' and strategyyear_id = " . $ids;
    // echo $sql;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update str_strategyyear set del_item = '1',delete_id=$make_id,delete_date=$make_date Where strategyyear_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT budget_year as aname FROM str_strategyyear where strategyyear_id = ".$ids;// แก้
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
