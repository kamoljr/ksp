<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Tacticsyear_m extends Model
{
  public function index()
  {
   
  }

  public function search_strategyyear_id()
  {
    $sql = "Select budget_year as field_id,budget_year as field_name From str_strategyyear where del_item = '0' order by budget_year desc";

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
    $search_strategyyear_id = $_POST["search_strategyyear_id"];
    // $search_strategylvtwo_id = $_POST["search_strategylvtwo_id"];
    // $search_strategylvthree_id = $_POST["search_strategylvthree_id"];
    // $search_indicatorlvone = $_POST["search_indicatorlvone"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT strategy_swot_id,strategy_swot_type,strategy_swot

    FROM  dbo.str_strategy_swot
         
    WHERE (del_item = N'0')";

    if ($search_strategyyear_id != "") {
       $query .= "  and (budget_year = $search_strategyyear_id)";
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

    $sql = "Select strategy_swot_id,strategy_swot_type,strategy_swot,policyksp_id_multi From str_strategy_swot where strategy_swot_id = " . $ids;
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
  public function get_checkbox()
  {
    $ids = $_POST["ids"];

    // $sql = "Select strategylvfour_id From str_strategyyear where strategyyear_id = " . $ids;
    // $result = $this->db->query($sql)->getResultObject();
    // $strategylvfour_id = $result[0]->strategylvfour_id;

    $sql = "Select policyksp_id as field_id,policyksp as field_name From str_policyksp where del_item = '0' and budget_year = " . $ids;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  


  

  public function save_data()
  {
    $this->shared_m = model("member/shared_m");

    $ids = $_POST["ids"];
   
    $search_strategyyear_id = $this->shared_m->replace_str($_POST["search_strategyyear_id"]);
    
    // $policyksp_add = $this->shared_m->replace_str($_POST["policyksp_add"]);


    // ----------รับค่า checkbox--------
    $chk = "";
    if (isset($_POST["policyksp_id_multi"])){
      foreach($_POST["policyksp_id_multi"] as $chk1){  
          $chk .= $chk1.",";  
      }  
      $chk = substr($chk, 0, -1);
    }
    // ----------รับค่า checkbox--------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
    //  $sql = "INSERT INTO str_strategy_swot (strategyyear_id,policyksp,policyksp_id_multi,make_id,make_date,make_date_mktime) VALUES ($search_strategyyear_id,'$policyksp_add','$chk',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      //$result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
  //    $max_ids = $this->shared_m->find_max_id("str_policyksp","policyksp_id");//แก่

 //     $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$policyksp_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

   //   $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_strategy_swot set policyksp_id_multi = '$chk',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where strategy_swot_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$chk."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("กำหนดนโยบาย",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    // $ids = $_POST["ids"];
    
    // $sql = "Select count(plan_side_id) as count_reccord From str_plan_side where del_item = '0' and strategyyear_id = " . $ids;
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



    // $sql = "Select count(plan_side_id) as count_reccord From str_plan_side where del_item = '0' and strategyyear_id = " . $ids;
    // // echo $sql;
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
      $sql = "Update str_policyksp set del_item = '1',delete_id=$make_id,delete_date=$make_date Where policyksp_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT policyksp as aname FROM str_policyksp where policyksp_id = ".$ids;// แก้
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
