<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class Settings_m extends Model
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

    $sql = "Select timeout From ksp_setting where ksp_setting_id = 1";

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
    
    $time_out_add = $_POST["time_out_add"];

    $sql = "Update ksp_setting set timeout = '$time_out_add' Where ksp_setting_id = 1";
   
    $result = $this->db->query($sql);
    $this->shared_m = model("member/shared_m");
    //------------------log รวมกลุ่มงาน---------------------
    $max_ids = 1;//แก่  
    $action_detail = "ตั้งค่าระบบ กำหนด Time out ".$time_out_add." นาที";
    $this->shared_m->logksp("ตั้งค่าระบบ",$action_detail,$max_ids,19,"ตั้งค่าระบบ");
    //------------------------------------------ 
    
    return $result;//succes return 1 not succrs return 0 
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "Update unit_name set del_item = 'Y' Where unit_id = ".$ids;
    //echo $sql;

    $result = $this->db->query($sql);
    return $result;
  }
}
