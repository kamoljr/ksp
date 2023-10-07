<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class Exuserwithdrawproject_m extends Model
{
  public function index()
  {
   
  }

  public function search_budget_year()
  {
    $sql = "Select budget_year as field_id,budget_year as field_name From strategy where del_item = '0' order by budget_year desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function user_id_add()
  {
    $this->shared_m = model("member/shared_m");
    $structure_id = $this->shared_m->find_max_id("structure_org","structure_id");
    $sql = "Select user_id as field_id,user_name as field_name From structure_user where del_item = '0' and structure_id = $structure_id order by user_name asc";
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function search_project_id()
  {
    $budget_year = $_POST["ctr1"];
    $sql = "Select project_id as field_id,project_name as field_name From project where del_item = '0' and budget_year = $budget_year order by project_name asc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function project_id_add()
  {
    $budget_year = $_POST["ctr1"];
    $sql = "Select project_id as field_id,project_name as field_name From project where del_item = '0' and budget_year = $budget_year order by project_name asc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function get_data()
  {
    
    
    //---------ใส่ค่า----------
    $search_budget_year = $_POST["search_budget_year"];
    $search_project_id = $_POST["search_project_id"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT user_withdraw_id,user_name,dbo.structure_unit.unit_name, dbo.structure_group.group_name, dbo.user_withdraw.budget_year, dbo.user_withdraw.project_id,project_name

    FROM dbo.user_withdraw INNER JOIN
    dbo.project ON dbo.user_withdraw.project_id = dbo.project.project_id INNER JOIN
    dbo.structure_user ON dbo.user_withdraw.user_id = dbo.structure_user.user_id AND dbo.user_withdraw.structure_id = dbo.structure_user.structure_id INNER JOIN
    dbo.structure_unit ON dbo.structure_user.unit_id = dbo.structure_unit.unit_id AND dbo.structure_user.structure_id = dbo.structure_unit.structure_id INNER JOIN
    dbo.structure_group ON dbo.structure_user.group_id = dbo.structure_group.group_id AND dbo.structure_user.structure_id = dbo.structure_group.structure_id

    WHERE (dbo.user_withdraw.del_item = N'0')";

    if ($search_budget_year != "") {
       $query .= "  and (dbo.user_withdraw.budget_year = '$search_budget_year')";
    }
    if ($search_project_id != "") {
       $query .= "  and (dbo.user_withdraw.earch_project_id = '$search_project_id' )";
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

    $sql = "Select user_id,project_id From user_withdraw where user_withdraw_id = " . $ids;
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
    $search_budget_year = $this->shared_m->replace_str($_POST["search_budget_year"]);
    

    $project_id_add = $this->shared_m->replace_str($_POST["project_id_add"]);
    $user_id_add = $this->shared_m->replace_str($_POST["user_id_add"]);
    //--------------
    

    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    $count_reccord = 0;

    $structure_id = $this->shared_m->find_max_id("structure_org","structure_id");

    if ($count_reccord == 0){
      if ($ids == '') {
        
        $sql = "INSERT INTO user_withdraw (user_id,project_id,budget_year,structure_id,make_id,make_date,make_date_mktime) VALUES ($user_id_add,$project_id_add,'$search_budget_year',$structure_id,$make_id,$make_date,'$make_date_mktime')";
        //echo $sql;
        $result = $this->db->query($sql);
        //------------------log เพิ่ม---------------------
        $max_ids = $this->shared_m->find_max_id("user_withdraw","user_withdraw_id");//แก่

        $sql = "SELECT project_name as aname FROM project where project_id = ".$project_id_add;// แก้
        //echo $sql;
        $resultdellog = $this->db->query($sql)->getResultObject();
        $aname = $resultdellog[0]->aname;

        $action_detail = "เพิ่ม ".$_POST["for_log_app_name"]." : ".$aname."<br>";//แก่
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
      } else {
        $sql = "Update user_withdraw set user_id = '$user_id_add',project_id = $project_id_add,modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where user_withdraw_id = $ids";
        //echo $sql;
        $result = $this->db->query($sql);
        //------------------log แก้ไข---------------------
        $max_ids = $ids;

        $sql = "SELECT project_name as aname FROM project where project_id = ".$project_id_add;// แก้
        //echo $sql;
        $resultdellog = $this->db->query($sql)->getResultObject();
        $aname = $resultdellog[0]->aname;

        $action_detail = "แก้ไข ".$_POST["for_log_app_name"]." : ".$aname."<br>";//แก้
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
      }
    }else{
      $result = "duplicatename";
    }

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
   
    $resData = json_encode(0);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update user_withdraw set del_item = '1',delete_id=$make_id,delete_date=$make_date Where user_withdraw_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $action_detail = "ลบ ".$_POST["for_log_app_name"]." : รหัส".$max_ids."<br>";
      
      $this->shared_m->logksp("ลบ",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    
    return json_encode($result);
  }
}
