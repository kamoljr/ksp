<?php namespace App\Models;
use CodeIgniter\Model;

class unit_name_m extends Model
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
    $budget_year = $_POST["budget_year"];
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

    $totalRecords = count($this->db->query($query)->getResultArray());

    $columns = explode(',', $columns);

    for ($i = 0; $i < $_POST["iSortingCols"]; $i++) {
      $sortcol = $_POST["iSortCol_" . $i];
      if ($_POST["bSortable_" . $sortcol]) {
        $query .= " ORDER BY ($columns[$sortcol])" . $_POST["sSortDir_" . $i];
      }
    }

    $query .= " LIMIT $start,$page_length";

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

  public function save_data()
  {
    $ids = $_POST["ids"];
    $unit_name = $_POST["unit_name"];

    if ($ids == '') {
      $sql = "INSERT INTO unit_name (unit_name) VALUES ('$unit_name')";
    } else {
      $sql = "Update unit_name set unit_name = '$unit_name' Where unit_id = $ids";
    }
    //echo $sql;

    $result = $this->db->query($sql);
    return $result->resultID;
  }

  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "Update unit_name set del_item = 'Y' Where unit_id = ".$ids;

    $result = $this->db->query($sql);
    return $result->resultID;
  }
}
