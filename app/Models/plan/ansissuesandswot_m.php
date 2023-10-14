<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Ansissuesandswot_m extends Model
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
    $this->shared_m = model("member/shared_m");
    $make_id = $_SESSION['user_id'];
    $sql = "SELECT max(structure_id) as max_org_id FROM structure_org where del_item = '0'";// แก้
    //echo $sql;
    $resul = $this->db->query($sql)->getResultObject();
    $max_org_id = $resul[0]->max_org_id;
    
    //---------ใส่ค่า----------
    $search_strategyyear_id = $_POST["search_strategyyear_id"];
    $search_structure_unit_id = $_POST["search_structure_unit_id"];
    $search_structure_group_id = $_POST["search_structure_group_id"];
    $search_user_name = $_POST["search_user_name"];
    //-----------------------
    
    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT  distinct dbo.structure_user.user_name, dbo.structure_group.group_name, dbo.structure_unit.unit_name,structure_user.user_id,
(select t10.issuesandswot_id from str_pointvalue as t10 where tmain.make_id = t10.make_id and tmain.budget_year = t10.budget_year and scores = 10) as scores10,
(select t9.issuesandswot_id from str_pointvalue as t9 where tmain.make_id = t9.make_id and tmain.budget_year = t9.budget_year and scores = 9) as scores9,
(select t8.issuesandswot_id from str_pointvalue as t8 where tmain.make_id = t8.make_id and tmain.budget_year = t8.budget_year and scores = 8) as scores8,
(select t7.issuesandswot_id from str_pointvalue as t7 where tmain.make_id = t7.make_id and tmain.budget_year = t7.budget_year and scores = 7) as scores7,
(select t6.issuesandswot_id from str_pointvalue as t6 where tmain.make_id = t6.make_id and tmain.budget_year = t6.budget_year and scores = 6) as scores6,
(select t5.issuesandswot_id from str_pointvalue as t5 where tmain.make_id = t5.make_id and tmain.budget_year = t5.budget_year and scores = 5) as scores5,
(select t4.issuesandswot_id from str_pointvalue as t4 where tmain.make_id = t4.make_id and tmain.budget_year = t4.budget_year and scores = 4) as scores4,
(select t3.issuesandswot_id from str_pointvalue as t3 where tmain.make_id = t3.make_id and tmain.budget_year = t3.budget_year and scores = 3) as scores3,
(select t2.issuesandswot_id from str_pointvalue as t2 where tmain.make_id = t2.make_id and tmain.budget_year = t2.budget_year and scores = 2) as scores2,
(select t1.issuesandswot_id from str_pointvalue as t1 where tmain.make_id = t1.make_id and tmain.budget_year = t1.budget_year and scores = 1) as scores1

FROM dbo.str_pointvalue AS tmain INNER JOIN dbo.structure_user 
ON tmain.make_id = dbo.structure_user.user_id INNER JOIN dbo.structure_group 
ON dbo.structure_user.group_id = dbo.structure_group.group_id AND dbo.structure_user.structure_id = dbo.structure_group.structure_id INNER JOIN dbo.structure_unit 
ON dbo.structure_group.unit_id = dbo.structure_unit.unit_id AND dbo.structure_group.structure_id = dbo.structure_unit.structure_id

WHERE (tmain.budget_year = N'$search_strategyyear_id') AND (dbo.structure_user.structure_id = $max_org_id)";

    if ($search_structure_unit_id != "") {
       $query .= "  and (structure_user.unit_id = $search_structure_unit_id)";
    }
    if ($search_structure_group_id != "") {
       $query .= "  and (dbo.structure_user.group_id = '$search_structure_group_id' )";
    }
    if ($search_user_name != "") {
       $query .= "  and (structure_user.user_name like '%$search_user_name%' )";
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

    $ids = $_POST["ids"];
   
    $search_strategyyear_id = $this->shared_m->replace_str($_POST["search_strategyyear_id"]);
    
    $policyksp_add = $this->shared_m->replace_str($_POST["policyksp_add"]);


    // ----------รับค่า checkbox--------
    $chk = "";
    if (isset($_POST["plantargetlvfour_id_multi"])){
      foreach($_POST["plantargetlvfour_id_multi"] as $chk1){  
          $chk .= $chk1.",";  
      }  
      $chk = substr($chk, 0, -1);
    }
    // ----------รับค่า checkbox--------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO str_policyksp (strategyyear_id,policyksp,plantargetlvfour_id_multi,make_id,make_date,make_date_mktime) VALUES ($search_strategyyear_id,'$policyksp_add','$chk',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_policyksp","policyksp_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$policyksp_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update str_policyksp set policyksp = '$policyksp_add', plantargetlvfour_id_multi = '$chk',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where policyksp_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$policyksp_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
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
