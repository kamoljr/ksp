<?php namespace App\Models;
use CodeIgniter\Model;

class PublicModel_m extends Model
{

  public function select_budget_year()// ตัวกรองปีงบประมาณ ใช้ที่หน้าหลัก
  {
    $sql = "Select budget_year From strategy where del_item = '0' order by budget_year desc";

    $result = $this->db->query($sql);
    $data = $result->getResultArray();
    $resData = json_encode($data);
    //print_r($resData);
    return $resData;
  }

}
