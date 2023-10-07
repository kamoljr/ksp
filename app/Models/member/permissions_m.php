<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class Permissions_m extends Model
{
  
  public function load_select1()
  {
    $sql = "Select budget_year From strategy where del_item = '0' order by budget_year desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

  public function get_data()
  {
    $totalCol = $_POST["iColumns"];
    $unit_name = $_POST["unit_name"];
    
    $columns = $_POST["columns"];
    $start = $_POST["iDisplayStart"];
    $page_length = $_POST["iDisplayLength"];

    $query = "SELECT
    tu.unit_id,tu.unit_name
    FROM unit_name as tu
    WHERE tu.del_item = '0'";

     if ($unit_name != "") {
       $query .= "  and (tu.unit_name like '%$unit_name%' )";
    }
    //echo $query;
    $totalRecords = count($this->db->query($query)->getResultArray());

    $columns = explode(',', $columns);

    for ($i = 0; $i < $_POST["iSortingCols"]; $i++) {
      $sortcol = $_POST["iSortCol_" . $i];
      if ($_POST["bSortable_" . $sortcol]) {
        $query .= " ORDER BY ($columns[$sortcol])" . $_POST["sSortDir_" . $i];
      }
    }
    //$query .= " LIMIT $start,$page_length";
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

    $sql = "Select unit_name From unit_name where unit_id = " . $ids;

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function chk_del()
  {
    $ids = $_POST["ids"];

    $sql = "Select count(group_id) as count_reccord From group_name where del_item = '0' and unit_id = " . $ids;// ไม่เจอ return 0

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  
  public function save_data()
  {
    $this->shared_m = model("member/shared_m");

    $user_id = $_POST["search_user_id"];

    $make_date = $this->shared_m->find_date8dig_into_data();
    $make_date_mktime = $this->shared_m->mktimenow();
    $make_id = $_SESSION['user_id'];

    if ($user_id <> ""){      
      $ans_app_id=array();
      foreach($_POST as $key => $val) {// หา appid ทีมีการติ๊กทั้งหมด
        //echo 'Field name : '.$key .', Value : '.$val.'<br><br>';
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
        if ($show_p == "Y" || $add_p == "Y" || $edit_p == "Y" || $del_p == "Y"){
          array_push($ans_app_id, $val);
        }
      }
      $sql = "DELETE FROM app_permission WHERE user_id =".$user_id;
      $result = $this->db->query($sql);
      //echo $sql."<br>";
      
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
        //echo "app_id=".$key."||show_p=".$show_p."||add_p=".$add_p."||edit_p=".$edit_p."||del_p=".$del_p."<br><br>";
        
        
        $sql = "INSERT INTO app_permission (user_id,app_id,show_p,add_p,edit_p,del_p,make_id,make_date,make_date_mktime) VALUES ($user_id,$key,'$show_p','$add_p','$edit_p','$del_p',$make_id,$make_date,'$make_date_mktime')";
        //echo $sql."<br>";
        $result = $this->db->query($sql);
        
      }
      // add record mom
      $sql = "SELECT DISTINCT dbo.app.mom_id
      FROM dbo.app_permission INNER JOIN
      dbo.app ON dbo.app_permission.app_id = dbo.app.app_id
      WHERE (dbo.app_permission.user_id = $user_id) AND (dbo.app.mom_id <> 0)";
      $result_rec_mom = $this->db->query($sql)->getResultObject();
      foreach ($result_rec_mom as $obj) {
        	// $_SESSION['perView_'.$obj->app_id] = $obj->show_p;
        //echo "||".$obj->mom_id."||<br>";
        $sql = "INSERT INTO app_permission (user_id,app_id,show_p,add_p,edit_p,del_p,make_id,make_date,make_date_mktime) VALUES ($user_id,$obj->mom_id,'$show_p','$add_p','$edit_p','$del_p',$make_id,$make_date,'$make_date_mktime')";
        //echo $sql."<br>";
        $result = $this->db->query($sql);
      }
      //------------------log เพิ่ม---------------------
      $max_ids = $user_id;//แก่
      
      $sql = "SELECT user_name as aname FROM users where user_id = ".$user_id;// แก้
      //echo $sql;
      $resultdellog = $this->db->query($sql)->getResultObject();
      $aname = $resultdellog[0]->aname;

      $action_detail ="กำหนดสิทธิ์การใช้งาน : ".$aname."<br>";//แก่
      //$action_detail = $action_detail."test : ".$unit_name;

      $this->shared_m->logksp("",$action_detail,$max_ids,4,"กำหนดสิทธิ์การใช้งาน");
      //------------------------------------------ 
    }
    
    
    // $ids = $_POST["ids"];
    // $sql = "Update unit_name set unit_name = '$unit_name' Where unit_id = $ids";
    // $result = $this->db->query($sql);
     return json_encode($result);//succes return 1 not succrs return 0 
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "Update unit_name set del_item = 'Y' Where unit_id = ".$ids;
    //echo $sql;

    $result = $this->db->query($sql);
    return $result;
  }

  public function search_user_id()
  {
    
    $sql = "SELECT max(structure_id) as structure_id FROM structure_org where del_item = '0'";
    $result = $this->db->query($sql)->getResultObject();
    $structure_id = $result[0]->structure_id;
  

    $sql = "Select user_id as field_id,user_name as field_name From structure_user where del_item = '0' and structure_id = $structure_id  order by user_name asc";
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }
  public function group_permission_id()
  {
    $sql = "Select group_permission_id as field_id,group_permission as field_name From group_permission where del_item = '0' order by group_permission_id asc";
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
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
  public function create_permission()
  {
    $sql = "Select description_id ,description,icon_system_s From description where del_item = '0' and use_status = '1' order by description_id asc";
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }
  public function show_edit()
  {
    $user_id = $_POST["user_id"];
    $sql = "SELECT show_p, app_id, add_p, edit_p, del_p
    FROM dbo.app_permission
    WHERE user_id = ".$user_id;
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
  public function load_group_permission()
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

}
