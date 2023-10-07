<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class Appgroup_m extends Model
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

  public function get_data()
  {
    
    
    //---------ใส่ค่า----------
    $group_permission_search = $_POST["group_permission_search"];
    //-----------------------

    $totalCol = $_POST["iColumns"];
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    //---------แก้ sql----------
    $query = "SELECT group_permission_id,group_permission,group_permission_comment
    FROM  dbo.group_permission 
    WHERE (dbo.group_permission.del_item = N'0')";

    if ($group_permission_search != "") {
       $query .= "  and (group_permission like '%$group_permission_search%')";
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

    $sql = "Select group_permission,group_permission_comment From group_permission where group_permission_id = " . $ids;
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
    $group_permission = $this->shared_m->replace_str($_POST["group_permission"]);
    $group_permission_comment = $this->shared_m->replace_str($_POST["group_permission_comment"]);
    //--------------
    
    
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];
    

    if ($ids == "" ){
      $sql = "Select count(group_permission_id) as count_reccord From group_permission where del_item = '0' and group_permission = '".$group_permission."'";
    }else{
      $sql = "Select count(group_permission_id) as count_reccord From group_permission where del_item = '0' and group_permission = '".$group_permission."' and group_permission_id <> ".$ids;
    }

    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;
    //$count_reccord =0;

    if ($count_reccord == 0){
      if ($ids == '') {
        
        $sql = "INSERT INTO group_permission (group_permission,group_permission_comment,make_id,make_date,make_date_mktime) VALUES ('$group_permission','$group_permission_comment',$make_id,$make_date,'$make_date_mktime')";
        //echo $sql;
        $result = $this->db->query($sql);
         //------------------log เพิ่ม---------------------
        $max_ids = $this->shared_m->find_max_id("group_permission","group_permission_id");//แก่

        $action_detail = $_POST["for_log_app_name"]." : ".$group_permission."<br>";//แก่
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("เพิ่ม",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
        $ids = $this->shared_m->find_max_id("group_permission","group_permission_id");
        //echo $ids.'xxx';
      } else {
        $sql = "Update group_permission set group_permission = '$group_permission',group_permission_comment = '$group_permission_comment',modify_id=$make_id,modify_date=$make_date,modify_date_mktime='$make_date_mktime' Where group_permission_id = $ids";
        //echo $sql;
        $result = $this->db->query($sql);
         //------------------log แก้ไข---------------------
        $max_ids = $ids;
        
        $action_detail = $_POST["for_log_app_name"]." : ".$group_permission."<br>";//แก้
        //$action_detail = $action_detail."test : ".$unit_name;

        $this->shared_m->logksp("แก้ไข",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
        //------------------------------------------ 
      }


      //----------permission------------
      if ($ids <> ""){      
        $ans_app_id=array();
        foreach($_POST as $key => $val) {// หา appid ทีมีการติ๊กทั้งหมด
          //echo 'Field name : '.$key .', Value : '.$val.'<br>';
          $show_p = "";
          $add_p = "";
          $edit_p = "";
          $del_p = "";
          if ( strstr( $key, 'show' ) ) {
            $show_p = "Y";
          } else {
            $show_p = "N";
          }
          if ( strstr( $key, 'add' ) ) {
            $add_p = "Y";
          } else {
            $add_p = "N";
          }
          if ( strstr( $key, 'edit' ) ) {
            $edit_p = "Y";
          } else {
            $edit_p = "N";
          }
          if ( strstr( $key, 'del' ) ) {
            $del_p = "Y";
          } else {
            $del_p = "N";
          }
          //echo "app_id=".$key."||show_p=".$show_p."||add_p=".$add_p."||edit_p=".$edit_p."||del_p=".$del_p."<br><br><br><br>";
          if ($show_p == "Y" || $add_p == "Y" || $edit_p == "Y" || $del_p == "Y"){
            array_push($ans_app_id, $val);
          }
        }
        $sql = "DELETE FROM group_permission_detail WHERE group_permission_id =".$ids;
        $result = $this->db->query($sql);
        
        //echo $sql."<br>";
        //print_r($ans_app_id);
        foreach(array_count_values($ans_app_id) as $key => $val) { // distinct value in an array distnct appid ที่ซ้ำกัน

          if (isset($_POST["show_".$key])){
            $show_p = "Y";
          }else{
            $show_p = "N";
          }
          if (isset($_POST["add_".$key])){
            $add_p = "Y";
          }else{
            $add_p = "N";
          }
          if (isset($_POST["edit_".$key])){
            $edit_p = "Y";
          }else{
            $edit_p = "N";
          }
          if (isset($_POST["del_".$key])){
            $del_p = "Y";
          }else{
            $del_p = "N";
          }
          //echo "app_id=".$key."||show_p=".$show_p."||add_p=".$add_p."||edit_p=".$edit_p."||del_p=".$del_p."<br>";
          
          
          $sql = "INSERT INTO group_permission_detail (group_permission_id,app_id,show_p,add_p,edit_p,del_p,make_id,make_date,make_date_mktime) VALUES ($ids,$key,'$show_p','$add_p','$edit_p','$del_p',$make_id,$make_date,'$make_date_mktime')";
          //echo $sql."<br><br><br><br>";
          $result = $this->db->query($sql);
          
        }
        // add record mom
        $sql = "SELECT DISTINCT dbo.app.mom_id
        FROM dbo.group_permission_detail INNER JOIN
        dbo.app ON dbo.group_permission_detail.app_id = dbo.app.app_id
        WHERE (dbo.group_permission_detail.group_permission_id = $ids) AND (dbo.app.mom_id <> 0)";
        $result_rec_mom = $this->db->query($sql)->getResultObject();
        foreach ($result_rec_mom as $obj) {
           
          $sql = "INSERT INTO group_permission_detail (group_permission_id,app_id,show_p,add_p,edit_p,del_p,make_id,make_date,make_date_mktime) VALUES ($ids,$obj->mom_id,'Y','Y','Y','Y',$make_id,$make_date,'$make_date_mktime')";
          //echo $sql."<br>";
          $result = $this->db->query($sql);
        }

      }
      //--------------------------------
    }else{
      $result = "duplicatename";
    }

    return json_encode($result);//succes return 1 not succrs return 0 
  }
  public function show_edit()
  {
    $group_permission_id = $_POST["group_permission_id"];
    $sql = "SELECT show_p, app_id, add_p, edit_p, del_p
    FROM dbo.group_permission_detail
    WHERE group_permission_id = ".$group_permission_id;
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }

  public function chk_del()
  {
    // $group_id = $_POST["group_id"];
    // $search_structure_name = $_POST["search_structure_name"];
    //  $sql = "Select count(group_id) as count_reccord From structure_user where del_item = '0' and group_id = " . $group_id." and structure_id = ".$search_structure_name;
    // // echo $sql;
    // $result = $this->db->query($sql);
    // $data = $result->getResultArray();
    // $resData = json_encode($data);
    $data = '0';
    $resData = json_encode($data);
    return $resData;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $this->shared_m = model("member/shared_m");
    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_id = $_SESSION['user_id'];

    $sql = "Update group_permission set del_item = '1',delete_id=$make_id,delete_date=$make_date Where group_permission_id = ".$ids;
    //echo $sql;
    $result = $this->db->query($sql);
    //------------------log ลบ---------------------
      $max_ids = $ids;
      
      $sql = "SELECT group_permission as aname FROM group_permission where group_permission_id = ".$ids;// แก้
      //echo $sql;
      $resultdellog = $this->db->query($sql)->getResultObject();
      $aname = $resultdellog[0]->aname;
      
      
      $action_detail = "ลบ ".$_POST["for_log_app_name"]." : ".$aname."<br>";
      
      $this->shared_m->logksp("ลบ",$action_detail,$max_ids,$_POST["for_log_app_id"],$_POST["for_log_app_name"]);
      //------------------------------------------ 
    return json_encode($result);
  }
  public function create_tab()
  {
    $sql = "Select description_id ,description,icon_system_s From description where del_item = '0' and use_status = '1' order by description_id asc";
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }
  public function create_menu()
  {
    $description_id = $_POST["description_id"];
    
    $sql = "SELECT 
      (select count(app_child.app_id) from app as app_child where app_child.mom_id = app_mom.app_id) as count_child 
      ,app_mom.app_id,app_mom.mom_id,app_mom.url,app_mom.app_name,app_mom.app_name_des,app_mom.description_id,app_mom.menu_group
      FROM app as app_mom 
      inner join description on app_mom.description_id = description.description_id 
      Where app_mom.del_item = '0' and app_mom.status_show = 'Y' and app_mom.mom_id = 0 and description.description_id = ".$description_id." order by app_mom.run_no";
    //echo $sql;
    //app_mom.menu_group = 'N' and 
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }
  public function create_menu_sub()
  {
    $description_id = $_POST["description_id"];
    $mom_id = $_POST["mom_id"];
    
    $sql = "SELECT 
    (select count(app_child.app_id) from app as app_child where app_child.mom_id = app_mom.app_id) as count_child_sub 
    ,app_mom.app_id as app_id_sub,app_mom.mom_id as mom_id_sub,app_mom.url as url_sub,app_mom.app_name as app_name_sub,app_mom.app_name_des,app_mom.description_id
    FROM app as app_mom
    inner join description on app_mom.description_id = description.description_id 
    Where app_mom.del_item = '0' and app_mom.url <> '' and description.description_id = ".$description_id." and app_mom.mom_id = ".$mom_id." order by app_mom.run_no";
    //echo $sql;
   $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }
  public function create_permission()
  {
    $sql = "Select description_id ,description,icon_system_s From description where del_item = '0' and use_status = '1' order by description_id asc";
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }


}
