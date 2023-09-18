<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class unit_m extends Model
{
  public function index()
  {
   
  }

  public function load_select1()
  {
    $sql = "Select budget_year From strategy where del_item = 'N' order by budget_year desc";

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
    WHERE tu.del_item = 'N'";

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

    $sql = "Select count(unit_id) as count_reccord From group_name where del_item = 'N' and unit_id = " . $ids;// ไม่เจอ return 0
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
  }



  public function save_data()
  {
    $ids = $_POST["ids"];
    $unit_name = $_POST["unit_name"];
    
    if ($ids == '') {
      $this->shared_m = model("member/shared_m");
		  $max_id = $this->shared_m->find_max_id("unit_name","unit_id");

      $sql = "INSERT INTO unit_name (unit_id,unit_name) VALUES ($max_id,'$unit_name')";
    } else {
      $sql = "Update unit_name set unit_name = '$unit_name' Where unit_id = $ids";
    }
    $result = $this->db->query($sql);
    
    return $result;//succes return 1 not succrs return 0 
  }



  public function del_data()
  {
    $ids = $_POST["ids"];
    $this->shared_m = model("member/shared_m");
		$count_reccord = $this->shared_m->find_count_reccord("group_name","unit_id",$ids);
    if ($count_reccord>0){
      $result = "cannotdel";
    }else{
      $ids = $_POST["ids"];
      $sql = "Update unit_name set del_item = 'Y' Where unit_id = ".$ids;
      $result = $this->db->query($sql);
    }
    return json_encode($result);
  }
}
