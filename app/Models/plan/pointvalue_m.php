<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Pointvalue_m extends Model
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
  public function issuesandswot_id()
  {
    $ctr1 = $_POST["ctr1"];
    // $sql = "Select issuesandswot_id as field_id,issuesandswot_id+'. '+issues as field_name From str_issuesandswot where del_item = '0' and budget_year = '$ctr1' order by issuesandswot_id asc";
    $sql = "Select issuesandswot_id as field_id,CONVERT(varchar(12), issuesandswot_id) + '. ' + issues AS field_name From str_issuesandswot where del_item = '0' and budget_year = '$ctr1' order by issuesandswot_id asc";

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
    $query = "SELECT policyksp_id,policyksp

    FROM  dbo.str_policyksp
         
    WHERE (del_item = N'0')";

    if ($search_strategyyear_id != "") {
       $query .= "  and (strategyyear_id = $search_strategyyear_id)";
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
    $this->shared_m = model("member/shared_m");
    $make_id = $_SESSION['user_id'];

    $search_strategyyear_id = $_POST["search_strategyyear_id"];

    $sql = "Select scores,issuesandswot_id From str_pointvalue where budget_year = '$search_strategyyear_id' and make_id = $make_id";
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
    
   
    $search_strategyyear_id = $this->shared_m->replace_str($_POST["search_strategyyear_id"]);
    
    $evalue = $this->shared_m->replace_str($_POST["evalue"]);
    $num_score = $this->shared_m->replace_str($_POST["num_score"]);

    // ลบก่อนแล้วสร้างใหม่
    $sql = "DELETE FROM str_pointvalue WHERE budget_year = '$search_strategyyear_id' and scores = $num_score and make_id = $make_id";
    //echo $sql;
    $result = $this->db->query($sql);
    
    if ($evalue != ""){
      $sql = "INSERT INTO str_pointvalue (budget_year,scores,issuesandswot_id,make_id,make_date,make_date_mktime) VALUES ('$search_strategyyear_id',$num_score,$evalue,$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("str_pointvalue","pointvalue_id");//แก่

      $action_detail = "เพิ่ม ค่าคะแนนประเด็น : ".$max_ids."<br>";//แก่
      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,67,"ค่าคะแนนประเด็น");
      //------------------------------------------ 

      //----- update score_percent ตาราง str_issuesandswot----
      // หาคะแนนทั้งหมดของปีนั้น
      $sql = "SELECT SUM(scores) AS sum_all_scores FROM  dbo.str_pointvalue WHERE (budget_year = N'$search_strategyyear_id')";
      $result = $this->db->query($sql)->getResultObject();
      $sum_all_scores = $result[0]->sum_all_scores;
      if ($sum_all_scores == null || $sum_all_scores == ""){
        $sum_all_scores = 0;
      }

      $sql = "SELECT issuesandswot_id FROM str_issuesandswot WHERE budget_year = N'$search_strategyyear_id'";
      $result_issuse = $this->db->query($sql)->getResultObject();
      
      foreach ($result_issuse as $obj) {// loop ประเด็นทั้งหมดของปีนั้น
      
        $issuesandswot_id = $obj->issuesandswot_id;
        
        $sql = "SELECT scores AS sum_issues_scores
        FROM dbo.str_pointvalue
        WHERE (budget_year = N'$search_strategyyear_id') AND (issuesandswot_id = $issuesandswot_id)";
        $result1 = $this->db->query($sql)->getResultObject();

        $sum_issues_scores = 0;//คะแนนทั้งหมดของประเด็น
        foreach ($result1 as $obj1) {
          $sum_issues_scores = $obj1->sum_issues_scores;
        }
        if ($sum_issues_scores == null || $sum_issues_scores == ""){
          $sum_issues_scores = 0;
        }

        $ans_percent = 0;
        if ($sum_all_scores >0){
          $ans_percent = ($sum_issues_scores *100)/$sum_all_scores;//คิด %
           $sql = "update str_issuesandswot set score_percent = $ans_percent where issuesandswot_id = $issuesandswot_id";
           $result2 = $this->db->query($sql);
        }


      }
    
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
