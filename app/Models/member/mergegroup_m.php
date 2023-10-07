<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class Mergegroup_m extends Model
{
  public function index()
  {
   
  }

  public function create_chift_unit_add()
  {
    $sql = "Select user_id,user_name From users where del_item = '0' order by user_name asc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function merge_unit_add()
  {
  
    $structure_id = $_POST["ctr1"];
    $sql = "SELECT unit_id as field_id, unit_name as field_name
    FROM dbo.structure_unit
    WHERE structure_id = ".$structure_id;

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function merge_group_add()
  {
  
    $structure_id = $_POST["ctr1"];
    $unit_id = $_POST["ctr2"];

    $sql = "SELECT group_id as field_id, group_name as field_name
    FROM dbo.structure_group
    WHERE unit_id = $unit_id and structure_id = ".$structure_id;

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function search_structure_id()
  {
    $sql = "Select structure_id as field_id,structure_name as field_name From structure_org where del_item = '0' order by structure_id desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function create_orgchart_unit()
  {
    $search_structure_id = $_POST["search_structure_id"];
    $sql = "Select unit_id ,unit_name  From structure_unit where del_item = '0' and structure_id = $search_structure_id order by unit_id asc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function moveunit_save()
  {
    $this->shared_m = model("member/shared_m");
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_id = $_SESSION['user_id'];
    
    $uid_old = $_POST["uid_old"];
    $gid_old = $_POST["gid_old"];
    $uid_new = $_POST["uid_new"];
    $unit_name_new = $_POST["unit_name_new"];
    $unit_name_old = $_POST["unit_name_old"];
    $group_name_old = $_POST["group_name_old"];
    
    $search_structure_id = $_POST["search_structure_id"];
    
    $sql = "Update structure_group set unit_id = $uid_new,move_unit_make_id = $make_id,move_unit_make_date = $make_date Where structure_id = $search_structure_id and group_id = $gid_old ";
    $result = $this->db->query($sql);

    $sql = "Update structure_user set unit_id = $uid_new,move_unit_make_id = $make_id,move_unit_make_date = $make_date Where structure_id = $search_structure_id and group_id = $gid_old ";
    $result = $this->db->query($sql);
    
    $sql = "Update structure_project set unit_id = $uid_new,move_unit_make_id = $make_id,move_unit_make_date = $make_date Where structure_id = $search_structure_id and group_id = $gid_old ";
    $result = $this->db->query($sql);


    //------------------log copyorg---------------------
    $max_ids = $gid_old;//แก่  
    
    $action_detail = "ย้าย $group_name_old จาก $unit_name_old ไปยัง $unit_name_new";
    
    $this->shared_m->logksp("",$action_detail,$gid_old,5,"กลุ่มงาน ย้ายสำนัก");
    //------------------------------------------ 

    return json_encode($result);
  }
  public function findmessages()
  {
    $uid_old = $_POST["uid_old"];
    $gid_old = $_POST["gid_old"];
    $uid_new = $_POST["uid_new"];
    
    $search_structure_id = $_POST["search_structure_id"];

    $sql = "SELECT unit_name FROM structure_unit where structure_id = ".$search_structure_id." and unit_id = ".$uid_old;
    $result = $this->db->query($sql)->getResultObject();
    $unit_name_old = $result[0]->unit_name;

    $sql = "SELECT group_name FROM structure_group where structure_id = ".$search_structure_id." and group_id = ".$gid_old;
    $result = $this->db->query($sql)->getResultObject();
    $group_name_old = $result[0]->group_name;

    $sql = "SELECT unit_name FROM structure_unit where structure_id = ".$search_structure_id." and unit_id = ".$uid_new;
    $result = $this->db->query($sql)->getResultObject();
    $unit_name_new = $result[0]->unit_name;
    
    

    $ans_arr = array('unit_name_old' => $unit_name_old, 'group_name_old' => $group_name_old, 'unit_name_new' => $unit_name_new);
     
    return json_encode($ans_arr);
  }
  public function create_orgchart_group()
  {
    $search_structure_id = $_POST["search_structure_id"];
    $unit_id = $_POST["unit_id"];
    $sql = "Select group_id ,group_name From structure_group where del_item = '0' and structure_id = $search_structure_id and unit_id = $unit_id order by unit_id asc";
    //echo $sql;

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
    $search_structure_name = $_POST["search_structure_name"];
    $search_unit_id = $_POST["search_unit_id"];
    $group_name_search = $_POST["group_name_search"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT dbo.structure_unit.unit_name, dbo.structure_group.group_name, dbo.structure_group.group_id, dbo.structure_group.structure_group_id, dbo.structure_group.structure_id, dbo.structure_group.unit_id

    FROM  dbo.structure_unit INNER JOIN
    dbo.structure_group ON dbo.structure_unit.unit_id = dbo.structure_group.unit_id AND dbo.structure_unit.structure_id = dbo.structure_group.structure_id

    WHERE (dbo.structure_group.del_item = N'0')";

    if ($search_structure_name != "") {
       $query .= "  and (dbo.structure_group.structure_id = '$search_structure_name')";
    }
    if ($search_unit_id != "") {
       $query .= "  and (dbo.structure_group.unit_id = '$search_unit_id' )";
    }
    if ($group_name_search != "") {
       $query .= "  and (dbo.structure_group.unit_id like '%$group_name_search%' )";
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

    $sql = "Select group_chief,group_name,tel From structure_group where structure_group_id = " . $ids;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  


  

  public function save_data()
  {
    $this->shared_m = model("member/shared_m");

    $structure_id = $_POST["structure_id"]; // structure_id

    $merge_old_group_id = $_POST["merge_old_group_id"]; // gid เดิม
    $merge_unit_add = $this->shared_m->replace_str($_POST["merge_unit_add"]); //uid  ใหม่
    $merge_group_add = $this->shared_m->replace_str($_POST["merge_group_add"]); //gid  ใหม่
    
    // dedete กลุ่มงานเดิม
    $sql = "Update structure_group set del_item = 1 Where group_id = $merge_old_group_id and structure_id = $structure_id";
    
    $result = $this->db->query($sql);
    //-----------------

    // ย้าย user ไปกลุ่มงานใหม่ 
    $sql = "Update structure_user set unit_id = $merge_unit_add , group_id = $merge_group_add Where group_id = $merge_old_group_id and structure_id = $structure_id";
    //echo $sql;
    $result = $this->db->query($sql);
    //--------------------

    // ย้าย โครงการ ไปกลุ่มงานใหม่
    $sql = "Update structure_project set unit_id = $merge_unit_add , group_id = $merge_group_add Where group_id = $merge_old_group_id and structure_id = $structure_id";
    //echo $sql;
    $result = $this->db->query($sql);
    //----------------------
    
    //------------------log รวมกลุ่มงาน---------------------
    $max_ids = $merge_old_group_id;//แก่  
    
    $action_detail = "รวมกลุ่มงานรหัส ".$merge_old_group_id."ไปยังกลุ่มงานรหัส ".$merge_group_add;
    
    $this->shared_m->logksp("รวมกลุ่มงาน",$action_detail,$max_ids,5,"รวมกลุ่มงาน");
    //------------------------------------------ 
    


    return json_encode($result);//succes return 1 not succrs return 0 
  }


  public function chk_del()
  {
    $group_id = $_POST["group_id"];
    $search_structure_name = $_POST["search_structure_name"];
     $sql = "Select count(group_id) as count_reccord From structure_user where del_item = '0' and group_id = " . $group_id." and structure_id = ".$search_structure_name;
    // echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "SELECT group_id,structure_id FROM structure_group where structure_group_id = ".$ids;
    $result = $this->db->query($sql)->getResultObject();
    $group_id = $result[0]->group_id;
    $structure_id = $result[0]->structure_id;


    $sql = "Select count(group_id) as count_reccord From structure_user where del_item = '0' and group_id = " . $group_id." and structure_id = ".$structure_id;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;

    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $this->shared_m = model("member/shared_m");
      $make_date = $this->shared_m->find_date8dig_into_data();
      
      $make_id = $_SESSION['user_id'];

      $ids = $_POST["ids"];
      $sql = "Update structure_group set del_item = '1',delete_id=$make_id,delete_date=$make_date Where structure_group_id = ".$ids;
      //echo $sql;
      $result = $this->db->query($sql);

      //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT group_name as aname FROM structure_group where structure_group_id = ".$ids;// แก้
      //echo $sql;
      $resultdellog = $this->db->query($sql)->getResultObject();
      $aname = $resultdellog[0]->aname;
      
      
      $action_detail = "ลบ ".$_POST["for_log_app_name"]." : ".$aname."<br>";
      
      $this->shared_m->logksp("ลบ",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    }
    return json_encode($result);
  }

  public function copyorg()
  {
    $old_structure_id = $_POST["search_structure_id"];
    $structure_name_new = $_POST["structure_name_new"];

    $this->shared_m = model("member/shared_m");
    $budget_year = $this->shared_m->find_budget_year();// ปีงบประมาณปัจจุบัน (หาจากเดือนและปี)

    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    
    //สร้างตาราง structure org
    $sql = "INSERT INTO structure_org (budget_year,structure_name,old_structure_id,make_id,make_date,make_date_mktime) VALUES ('$budget_year','$structure_name_new',$old_structure_id,$make_id,$make_date,'$make_date_mktime')";
    //echo $sql;
    $result = $this->db->query($sql);
    //-----------------------


    //หา structure_id ที่เพิ่งสร้าง
    $max_structure_id = $this->shared_m->find_max_id("structure_org","structure_id");
    //-----------------------

    //เพิ่มตาราง unit จาก old_structure_id 
    $sql = "INSERT INTO structure_unit (unit_id, structure_id, unit_name,del_item,use_status,unit_chief)
            SELECT unit_id, $max_structure_id, unit_name,del_item,use_status,unit_chief
            FROM structure_unit where structure_id = ".$old_structure_id;
            //echo $sql;
    $result = $this->db->query($sql);
    //-----------------------


    //เพิ่มตาราง group จาก old_structure_id
    $sql = "INSERT INTO structure_group (group_id, structure_id,unit_id, group_name,tel,del_item,use_status,group_chief)
            SELECT group_id, $max_structure_id,unit_id, group_name,tel,del_item,use_status,group_chief
            FROM structure_group where structure_id = ".$old_structure_id;
            //echo $sql;
    $result = $this->db->query($sql);
    //-----------------------

    
    //เพิ่มตาราง usr จาก old_structure_id
    $sql = "INSERT INTO structure_user (user_id, structure_id,user_name,unit_id,group_id, position_name,chief,province_id,email,cancel_user,dispose_user,num_of_incorrect,image_user,position_coment,acting_position,del_item,use_status)
            SELECT user_id, $max_structure_id,user_name,unit_id,group_id, position_name,chief,province_id,email,cancel_user,dispose_user,num_of_incorrect,image_user,position_coment,acting_position,del_item,use_status
            FROM structure_user where structure_id = ".$old_structure_id;
            //echo $sql;
    $result = $this->db->query($sql);

    //-----------------------
    //เพิ่มตาราง project จาก old_structure_id  copy เก็บโครงสร้าง
    $sql = "INSERT INTO structure_project (project_id, structure_id,del_item,use_status,group_id,unit_id)
            SELECT project_id, $max_structure_id,del_item,use_status,group_id,unit_id
            FROM structure_project where structure_id = ".$old_structure_id;
            //echo $sql;
    $result = $this->db->query($sql);
    //-----------------------

    //------------------log copyorg---------------------
      $max_ids = $max_structure_id;//แก่  
      
      $action_detail = "คัดลอกโครงสร้างเดิมรหัส ".$old_structure_id."ไปยังโครงสร้าง ".$structure_name_new;
      
      $this->shared_m->logksp("คัดลอกโครงสร้าง",$action_detail,$max_ids,5,"คัดลอกโครงสร้าง");
      //------------------------------------------ 
    return json_encode($result);
  }


}
