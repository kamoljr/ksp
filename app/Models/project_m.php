<?php namespace App\Models;
use CodeIgniter\Model;
//suse CodeIgniter\HTTP\RequestInterface;
class Project_m extends Model
{
  public function get_data()
  {
    $query = "SELECT
*
FROM project as tu
Inner Join group_name as gn
On tu.group_id = gn.group_id
WHERE tu.DeleteStatus = 'N'";
    $totalCol = $_POST["iColumns"];
    //$search = $_POST["sSearch"];

    $unit_id = $_POST["unit_id"];
    $group_id = $_POST["group_id"];
    $projectname_search = $_POST["projectname_search"];

    $columns = $_POST["columns"];

    $start = $_POST["iDisplayStart"];

    $page_length = $_POST["iDisplayLength"];

    if ($unit_id != "") {
      $query .= " AND (gn.unit_id = $unit_id )";
    }
    if ($group_id != "") {
      $query .= " AND (gn.group_id = $group_id )";
    }
    if ($projectname_search != "") {
      $query .= " AND tu.ProjectName LIKE '%$projectname_search%'";
    }

    $totalRecords = count($this->db->query($query)->getResultArray());

    $columns = explode(',', $columns);

    for ($i = 0; $i < $_POST["iSortingCols"]; $i++) {
      $sortcol = $_POST["iSortCol_" . $i];
      if ($_POST["bSortable_" . $sortcol]) {
        $query .= " ORDER BY ($columns[$sortcol])" . $_POST["sSortDir_" . $i];
      }
    }

    //$this->db->limit($page_length, $start);

    $query .= " LIMIT $start,$page_length";

    //echo $query;
    $result = $this->db->query($query);
    $data = $result->getResultArray();

    $resData = json_encode([
      "aaData" => $data,
      "iTotalDisplayRecords" => $totalRecords,
      "iTotalRecords" => $totalRecords,
      //"sColumns" => $_POST["sColumn"],
      "sColumns" => '',
      "sEcho" => $_POST["sEcho"],
    ]);

    return $resData;
  }
  public function edit_data()
  {
    $ProjectId = $_POST["ProjectId"];

    $sql = "Select ProjectName,Objective From project where ProjectId = " . $ProjectId;

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function load_select1()
  {
    $sql = "Select unit_id,unit_name From unit_name where del_item = 'N'";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function load_select2()
  {
    $unit_id = $_POST["unit_id"];
    $sql = "Select group_id,group_name From group_name where del_item = 'N'";
    if ($unit_id != '') {
      $sql = $sql . ' and unit_id = ' . $unit_id;
    }

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }
  public function save_data()
  {
    $ids = $_POST["ids"];
    $ProjectName = $_POST["ProjectName"];
    $Objective = $_POST["Objective"];
    if ($ids == '') {
      $sql = "INSERT INTO project (ProjectName, Objective,group_id) VALUES ('" . $ProjectName . "', '" . $Objective . "',1);";
    } else {
      $sql = "Update project set ProjectName = '$ProjectName',Objective = '$Objective' Where ProjectId = $ids";
    }

    $result = $this->db->query($sql);
    return $result->resultID;
  }
  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "Update project set DeleteStatus = 'Y' Where ProjectId = $ids";

    $result = $this->db->query($sql);
    return $result->resultID;
  }
}
