<?php 
namespace App\Models\plan;
use CodeIgniter\Model;

class Plans_m extends Model
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
    $query = "SELECT plan_id,plan_name,budget_year,master_plan

    FROM  dbo.plan_name inner join str_master_plan on plan_name.master_plan_id = str_master_plan.master_plan_id
         
    WHERE (plan_name.del_item = N'0')";

    //if ($search_strategyyear_id != "") {
       $query .= "  and (plan_name.budget_year = $search_strategyyear_id)";
    //}
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

    $sql = "Select master_plan_id,plan_name From plan_name where plan_id = " . $ids;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function get_master_plan()
  {
    //$ids = $_POST["ids"];

    $sql = "Select master_plan_id as field_id ,master_plan as field_name From str_master_plan";
    
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
    
    $plan_name_add = $this->shared_m->replace_str($_POST["plan_name_add"]);
    $master_plan_id = $this->shared_m->replace_str($_POST["master_plan_id"]);


    // ----------รับค่า checkbox--------
    // $chk = "";
    // if (isset($_POST["plantargetlvfour_id_multi"])){
    //   foreach($_POST["plantargetlvfour_id_multi"] as $chk1){  
    //       $chk .= $chk1.",";  
    //   }  
    //   $chk = substr($chk, 0, -1);
    // }
    // ----------รับค่า checkbox--------

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == '') {
      
      $sql = "INSERT INTO plan_name (budget_year,master_plan_id,plan_name,make_id,make_date,make_date_mktime) VALUES ($search_strategyyear_id,$master_plan_id,'$plan_name_add',$make_id,$make_date,'$make_date_mktime')";
      //echo $sql;

      $result = $this->db->query($sql);
      

        //------------------log เพิ่ม---------------------
      $max_ids = $this->shared_m->find_max_id("plan_name","plan_id");//แก่

      $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$plan_name_add."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
      


    } else {
      $sql = "Update plan_name set master_plan_id = $master_plan_id,plan_name = '$plan_name_add',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where plan_id = $ids";
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log แก้ไข---------------------
      $max_ids = $ids;
      
      $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$plan_name_add."<br>";//แก้
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $ids = $_POST["ids"];
    $budget_year = $_POST["budget_year"];
    
    $sql = "Select count(product_id) as count_reccord From str_product where del_item = '0' and budget_year = " . $budget_year;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    // $resData = json_encode(0);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];
    $budget_year = $_POST["budget_year"];


    
    $sql = "Select count(product_id) as count_reccord From str_product where del_item = '0' and budget_year = " . $budget_year;
    // echo $sql;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;
    // $count_reccord = 0;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update plan_name set del_item = '1',delete_id=$make_id,delete_date=$make_date Where plan_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT plan_name as aname FROM plan_name where plan_id = ".$ids;// แก้
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
