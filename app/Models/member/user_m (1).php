<?php
namespace App\Models;

use CodeIgniter\Model;

//suse CodeIgniter\HTTP\RequestInterface;
class user_name_m extends Model
{
  public function get_data()
  {
    $query = "SELECT
    user_id,user_name
    FROM [user] as tu
    WHERE tu.del_item = 'N'";
    $totalCol = $_POST["iColumns"];

    $user_name = $_POST["user_name"];

    $columns = $_POST["columns"];

    $start = $_POST["iDisplayStart"];

    $page_length = $_POST["iDisplayLength"];

    if ($user_name != "") {
      $query .= "  and (tu.user_name like '%$user_name%' )";
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


    $query .= " OFFSET $start ROWS FETCH FIRST $page_length ROWS ONLY;";

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
    $ids = $_POST["ids"];

    $sql = "Select user_name,cropimage From [user] where user_id = " . $ids;
    //echo $sql;
    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    return $resData;
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

  public function save_data()
  {
    $ids = $_POST["ids"];
    $user_name = $_POST["user_name"];
    $imgdata = $_POST["imgdata"];

    if ($ids == '') {
      $sql = "INSERT INTO [user] (user_name,cropimage) VALUES ('$user_name','$imgdata')";
    } else {
      $sql = "Update [user] set user_name = '$user_name',cropimage = '$imgdata' Where user_id = $ids";
    }
    //echo $sql;

    $result = $this->db->query($sql);
    return $result;
  }
  public function del_data()
  {
    $ids = $_POST["ids"];

    $sql = "Update user set del_item = 'Y' Where user_id = " . $ids;

    $result = $this->db->query($sql);
    return $result->resultID;
  }
}