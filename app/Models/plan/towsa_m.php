<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Towsa_m extends Model
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
  public function search_structure_unit_id()
  {
    //$ctr1 = $_POST["ctr1"];
    $sql = "SELECT max(structure_id) as max_org_id FROM structure_org where del_item = '0'";// แก้
    //echo $sql;
    $resul = $this->db->query($sql)->getResultObject();
    $max_org_id = $resul[0]->max_org_id;
    
    $sql = "Select unit_id as field_id,unit_name as field_name From structure_unit where del_item = '0' and structure_id = $max_org_id order by unit_id asc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function search_structure_group_id()
  {
    $ctr1 = $_POST["ctr1"];
    $sql = "SELECT max(structure_id) as max_org_id FROM structure_org where del_item = '0'";// แก้
    //echo $sql;
    $resul = $this->db->query($sql)->getResultObject();
    $max_org_id = $resul[0]->max_org_id;
    
    $sql = "Select group_id as field_id,group_name as field_name From structure_group where del_item = '0' and structure_id = $max_org_id ";

    if ($ctr1 <> ""){
      $sql = $sql." and unit_id = $ctr1 ";
    }
    $sql = $sql." order by group_id asc";

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
  public function loaddata_ex()
  {
    $search_strategyyear_id = $_POST["search_strategyyear_id"];

    $sql = "Select strategy_swot_type,strategy_swot,runno From str_strategy_swot where budget_year = '$search_strategyyear_id' and del_item = '0'";

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
    // $this->shared_m = model("member/shared_m");
    // $make_id = $_SESSION['user_id'];
    // $sql = "SELECT max(structure_id) as max_org_id FROM structure_org";// แก้
    // //echo $sql;
    // $resul = $this->db->query($sql)->getResultObject();
    // $max_org_id = $resul[0]->max_org_id;
    
    //---------ใส่ค่า----------
    $search_strategyyear_id = $_POST["search_strategyyear_id"];
    $swot = $_POST["swot"];
    // $search_structure_unit_id = $_POST["search_structure_unit_id"];
    // $search_structure_group_id = $_POST["search_structure_group_id"];
    // $search_user_name = $_POST["search_user_name"];
    //-----------------------
    
    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT top 10 score_percent,CONVERT(varchar(12), issuesandswot_id) + '. ' + issues AS issues

    FROM  dbo.str_issuesandswot
         
    WHERE (del_item = N'0') and swot = '$swot'";


    if ($search_strategyyear_id != "") {
       $query .= "  and (str_issuesandswot.budget_year = $search_strategyyear_id)";
    }
    $query .=" order by score_percent desc";
    // if ($search_structure_group_id != "") {
    //    $query .= "  and (dbo.structure_user.group_id = '$search_structure_group_id' )";
    // }
    // if ($search_user_name != "") {
    //    $query .= "  and (structure_user.user_name like '%$search_user_name%' )";
    // }
     //-----------------------
   // echo $query;
    $totalRecords = count($this->db->query($query)->getResultArray());

    $columns = explode(',', $columns);

    // for ($i = 0; $i < $_POST["iSortingCols"]; $i++) {
    //   $sortcol = $_POST["iSortCol_" . $i];
    //   if ($_POST["bSortable_" . $sortcol]) {
    //     $query .= " ORDER BY ($columns[$sortcol])" . $_POST["sSortDir_" . $i];
    //   }
    // }
   
    //$query .= " OFFSET $start ROWS FETCH FIRST $page_length ROWS ONLY;";
    //echo $query;
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

    $sql = "Select policyksp_id,policyksp,plantargetlvfour_id_multi From str_policyksp where policyksp_id = " . $ids;
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

    $sql = "Select strategylvfour_id From str_strategyyear where strategyyear_id = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $strategylvfour_id = $result[0]->strategylvfour_id;

    $sql = "Select plantargetlvfour_id as field_id,plantargetlvfour as field_name From str_plantargetlvfour where del_item = '0' and strategylvfour_id = " . $strategylvfour_id;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  


  

  public function save_data()
  {
    $this->shared_m = model("member/shared_m");

    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];

    $search_strategyyear_id = $_POST["search_strategyyear_id"];
    $swot = $this->shared_m->replace_str($_POST["swot"]);
    $runno = $this->shared_m->replace_str($_POST["runno"]);
    $text_value = $this->shared_m->replace_str($_POST["text_value"]);

   
    if ($text_value != ""){//เป็นค่าว่างจะลบ

      $sql = "Select count(strategy_swot_id) as count_reccord From str_strategy_swot  WHERE budget_year = '$search_strategyyear_id' and strategy_swot_type = '$swot' and runno = $runno and del_item = '0'";

      $result = $this->db->query($sql)->getResultObject();
      $count_reccord = $result[0]->count_reccord;

      if ($count_reccord > 0){// กรณีแก้ไข
        $sql = "update str_strategy_swot set strategy_swot = '$text_value' WHERE budget_year = '$search_strategyyear_id' and strategy_swot_type = '$swot' and runno = $runno";
        $result = $this->db->query($sql);
        //------------------log แก้ไข---------------------
        $sql = "Select strategy_swot_id as logedit_id From str_strategy_swot  WHERE budget_year = '$search_strategyyear_id' and strategy_swot_type = '$swot' and runno = $runno and del_item = '0'";
        $result = $this->db->query($sql)->getResultObject();
        $logedit_id = $result[0]->logedit_id;
        
        $action_detail = "แก้ไข เพิ่มกลยุทธ์ SO WO ST WT : ".$text_value."<br>";//แก่
        $this->shared_m->logksp("แก้ไข",$action_detail,$logedit_id,70,"แก้ไข เพิ่มกลยุทธ์ SO WO ST WT");
        //------------------------------------------ 
      }else{
        $sql = "INSERT INTO str_strategy_swot (budget_year,strategy_swot_type,strategy_swot,runno,make_id,make_date,make_date_mktime) VALUES ('$search_strategyyear_id','$swot','$text_value','$runno',$make_id,$make_date,'$make_date_mktime')";
        $result = $this->db->query($sql);
        //------------------log เพิ่ม---------------------
        $max_ids = $this->shared_m->find_max_id("str_strategy_swot","strategy_swot_id");//แก่
        $action_detail = "เพิ่มกลยุทธ์ SO WO ST WT : ".$text_value."<br>";//แก่
        $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,70,"เพิ่มกลยุทธ์ SO WO ST WT");
        //------------------------------------------ 
      }
      
      
    }else{
      $sql = "update str_strategy_swot set del_item = '1' WHERE budget_year = '$search_strategyyear_id' and strategy_swot_type = '$swot' and runno = $runno";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log ลบ---------------------
      $max_ids = $this->shared_m->find_max_id("str_strategy_swot","strategy_swot_id");//แก่
      $action_detail = "ลบกลยุทธ์ SO WO ST WT : ".$max_ids."<br>";//แก่
      $this->shared_m->logksp("ลบ",$action_detail,$max_ids,70,"เพิ่มกลยุทธ์ SO WO ST WT");
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
