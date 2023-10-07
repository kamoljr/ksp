<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class User_m extends Model
{
  public function index()
  {
   
  }

  public function create_chift_unit_add()
  {
    $structure_id = $_POST["structure_id"];
    $sql = "Select unit_id,unit_name From structure_unit where del_item = '0' and structure_id = ".$structure_id." order by unit_name asc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function search_structure_name()
  {
    $sql = "Select structure_id as field_id,structure_name as field_name From structure_org where del_item = '0' order by structure_id desc";

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
  public function search_group_id()
  {
    $structure_id = $_POST["ctr1"];
    $unit_id = $_POST["ctr2"];
    $sql = "Select group_id as field_id,group_name as field_name From structure_group where del_item = '0' and structure_id = $structure_id  and unit_id = $unit_id order by group_name desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function get_data()
  {
    
    
    //---------ใส่ค่า----------
    $search_structure_name = $_POST["search_structure_name"];
    $search_unit_id = $_POST["search_unit_id"];
    $search_group_id = $_POST["search_group_id"];
    $user_name_search = $_POST["user_name_search"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT dbo.structure_user.user_name, dbo.structure_user.structure_user_id, dbo.structure_unit.unit_name, dbo.structure_unit.unit_id, dbo.structure_group.group_id, dbo.structure_group.group_name, dbo.users.cancel_user, 
    dbo.users.user_id, dbo.users.dispose_user

    FROM dbo.structure_unit INNER JOIN
    dbo.structure_user ON dbo.structure_unit.unit_id = dbo.structure_user.unit_id AND dbo.structure_unit.structure_id = dbo.structure_user.structure_id INNER JOIN dbo.structure_group ON dbo.structure_user.group_id = dbo.structure_group.group_id AND dbo.structure_user.structure_id = dbo.structure_group.structure_id 

    INNER JOIN dbo.users ON dbo.users.user_id = dbo.structure_user.user_id
    WHERE (dbo.structure_user.del_item = N'0')";

    if ($search_structure_name != "") {
       $query .= "  and (dbo.structure_user.structure_id = '$search_structure_name')";
    }
    if ($search_unit_id != "") {
       $query .= "  and (dbo.structure_user.unit_id = '$search_unit_id' )";
    }
    if ($search_group_id != "") {
       $query .= "  and (dbo.structure_user.group_id = '$search_group_id' )";
    }

    if ($user_name_search != "") {
       $query .= "  and (dbo.structure_user.user_name like '%$user_name_search%' )";
    }
     //-----------------------
    
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

    $sql = "SELECT dbo.structure_user.structure_user_id, dbo.structure_user.user_name, dbo.structure_user.email, dbo.users.loginname, dbo.users.password,dbo.users.password, dbo.structure_user.num_of_incorrect, dbo.structure_user.image_user,  dbo.structure_user.position_coment, dbo.structure_user.position_name, dbo.structure_user.chief,structure_user.acting_position

    FROM dbo.structure_user INNER JOIN dbo.users ON dbo.structure_user.user_id = dbo.users.user_id

    WHERE dbo.structure_user.structure_user_id =" . $ids;

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function cancel_user()
  {
    $structure_user_id = $_POST["structure_user_id"];
    $cancel_user = $_POST["cancel_user"];
    $user_id = $_POST["user_id"];

    if ($cancel_user == 0){
      $cancel_user = "1";
    }else{
      $cancel_user = "0";
    }

    $sql = "Update structure_user set cancel_user='$cancel_user' Where structure_user_id = $structure_user_id";
    //echo $sql;
    $result = $this->db->query($sql);

    $sql = "Update users set cancel_user = '$cancel_user' Where user_id = $user_id";
    //echo $sql;
    $result = $this->db->query($sql);
    return json_encode($cancel_user);
  }
  public function dispose_user()
  {
    $structure_user_id = $_POST["structure_user_id"];
    $dispose_user = $_POST["dispose_user"];
    $user_id = $_POST["user_id"];

    if ($dispose_user == 0){
      $dispose_user = "1";
    }else{
      $dispose_user = "0";
    }

    $sql = "Update structure_user set dispose_user='$dispose_user' Where structure_user_id = $structure_user_id";
    //echo $sql;
    $result = $this->db->query($sql);

    $sql = "Update users set dispose_user = '$dispose_user' Where user_id = $user_id";
    //echo $sql;
    $result = $this->db->query($sql);
    return json_encode($dispose_user);
  }

  


  

  public function save_data()
  {
    $this->shared_m = model("member/shared_m");

    $ids = $_POST["ids"];
    //----รับค่า------
    $search_structure_name = $this->shared_m->replace_str($_POST["search_structure_name"]);
    $unit_id_add = $this->shared_m->replace_str($_POST["search_unit_id"]);
    $group_id_add = $this->shared_m->replace_str($_POST["search_group_id"]);


    $user_name_add = $this->shared_m->replace_str($_POST["user_name_add"]);
    $email_add = $this->shared_m->replace_str($_POST["email_add"]);
    $loginname_add = $this->shared_m->replace_str($_POST["loginname_add"]);

    $password_add = $this->shared_m->replace_str($_POST["password_add"]);
    $password_add = $this->shared_m->salt_pass($password_add);

    $num_of_incorrect_add = $this->shared_m->replace_str($_POST["num_of_incorrect_add"]);
    $position_name_add = $this->shared_m->replace_str($_POST["position_name_add"]);
    $chief_add = $this->shared_m->replace_str($_POST["chief_add"]);
    
    
    //--------------
    

    $chift_unit_add = "0";
    if(isset($_POST["chift_unit_add"])){
      $chift_unit_add = $this->shared_m->replace_str($_POST["chift_unit_add"]);
    }
    if ($chift_unit_add == ""){
      $chift_unit_add = 0;
    }
    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == "" ){
      $sql = "Select count(structure_user_id) as count_reccord From structure_user where del_item = '0' and user_name = '".$user_name_add."' and structure_id=".$search_structure_name;
    }else{
      $sql = "Select count(structure_user_id) as count_reccord From structure_user where del_item = '0' and user_name = '".$user_name_add."' and structure_user_id <> ".$ids." and structure_id = ".$search_structure_name;
    }
    //echo $sql;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord1 = $result[0]->count_reccord;
    
    if ($ids == "" ){
      $sql = "Select count(user_id) as count_reccord From users where del_item = '0' and loginname = '".$loginname_add."' and password='".$password_add."'";
    }else{
      $sql = "Select count(user_id) as count_reccord From users where del_item = '0' and loginname = '".$loginname_add."' and password='".$password_add."' and structure_user_id <> ".$ids;
    }

    $result = $this->db->query($sql)->getResultObject();
    $count_reccord2 = $result[0]->count_reccord;


    if ($count_reccord1 == 0 && $count_reccord2 == 0){
      if ($ids == '') {
        
        $sql = "INSERT INTO users (user_name,unit_id,group_id,position_name,loginname,password,email,num_of_incorrect,chief,acting_position,make_id,make_date,make_date_mktime) VALUES ('$user_name_add',$unit_id_add,$group_id_add,'$position_name_add','$loginname_add','$password_add','$email_add','$num_of_incorrect_add','$chief_add',$chift_unit_add,$make_id,$make_date,'$make_date_mktime')";

        $result = $this->db->query($sql);

        $max_user_id = $this->shared_m->find_max_id("users","user_id");

        $sql = "INSERT INTO structure_user (structure_id,user_id,user_name,unit_id,group_id,position_name,email,num_of_incorrect,chief,acting_position,make_id,make_date,make_date_mktime) VALUES ($search_structure_name,$max_user_id,'$user_name_add',$unit_id_add,$group_id_add,'$position_name_add','$email_add','$num_of_incorrect_add','$chief_add',$chift_unit_add,$make_id,$make_date,'$make_date_mktime')";
        
        $result = $this->db->query($sql);
        //------------------log เพิ่ม---------------------
        $max_ids = $this->shared_m->find_max_id("structure_user","structure_user_id");//แก่

        $action_detail = $_POST["for_log_app_name"]." : ".$user_name_add."<br>";//แก่
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 

        $max_structure_user_id = $this->shared_m->find_max_id("structure_user","structure_user_id");

        $sql = "Update users set structure_user_id = '$max_structure_user_id' Where user_id = $max_user_id";
        $result = $this->db->query($sql);

      } else {
        $sql = "Update structure_user set user_name='$user_name_add',position_name='$position_name_add',email='$email_add',num_of_incorrect='$num_of_incorrect_add',chief=$chief_add,acting_position=$chift_unit_add,modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where structure_user_id = $ids";
        //echo $sql;
        $result = $this->db->query($sql);
        //------------------log แก้ไข---------------------
        $max_ids = $ids;
        
        $action_detail = $_POST["for_log_app_name"]." : ".$user_name_add."<br>";//แก้
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 

        $sql = "Update users set loginname = '$loginname_add',password='$password_add' Where structure_user_id = $ids";
        $result = $this->db->query($sql);
      }
    }else{
      if ($count_reccord1 != 0){
        $result = "3";//duplicatename
      }
      if ($count_reccord2 != 0){
        $result = "4";//duplicateloginandpassword
      }
      
    }

    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $user_id = $_POST["ids"];
    //$search_structure_name = $_POST["search_structure_name"];
     $sql = "Select count(make_id) as count_reccord From withdraw where del_item = '0' and make_id = " . $user_id;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "SELECT user_id,structure_id FROM structure_user where structure_user_id = ".$ids;
    $result = $this->db->query($sql)->getResultObject();
    $user_id = $result[0]->user_id;
    // $structure_id = $result[0]->structure_id;


    $sql = "Select count(make_id) as count_reccord From withdraw where del_item = '0' and make_id = " . $user_id;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update structure_user set del_item = '1',delete_id=$make_id,delete_date=$make_date Where structure_user_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);
      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT user_name as aname FROM structure_user where structure_user_id = ".$ids;// แก้
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
