<?php namespace App\Models;
use CodeIgniter\Model;
class Login_m extends Model
{
  public function fetch_user_login($username,$password){
    $password = $this->salt_pass($password);
    $sql = "SELECT
    tu.user_id,
    tg.unit_id,
    tg.group_id,
    tu.user_name,
    tu.position_name,
    tu.chief,
    tunit.unit_name,
    tg.group_name,
    tu.displaymode
    FROM users as tu
    INNER JOIN group_name as tg
    ON tu.group_id = tg.group_id
    INNER JOIN unit_name as tunit
    ON tg.unit_id = tunit.unit_id
    WHERE tu.del_item = 'N' and tu.loginname = '".$username."' and tu.password = '".$password."'";

    $result = $this->db->query($sql);

    $data = $result->getResultObject();
    //$resData = json_encode($data);
    //print_r($data);
    return $data;

	}

  public function salt_pass($password){
		return base64_encode($password);
	}

  public function record_count($username,$password){
    $password = $this->salt_pass($password);
    $sql = "SELECT
    tu.user_id
    FROM users as tu
    INNER JOIN group_name as tg
    ON tu.group_id = tg.group_id
    INNER JOIN unit_name as tunit
    ON tg.unit_id = tunit.unit_id
    WHERE tu.del_item = 'N' and tu.loginname = '".$username."' and tu.password = '".$password."'";
    //echo $sql;
    $totalRecords = count($this->db->query($sql)->getResultArray());
		return $totalRecords;
	}
  public function get_permission($UserId){
    $sql = "SELECT permission_id,app_id,show_p,add_p,edit_p,del_p	 FROM app_permission  Where user_id = ".$UserId." order by permission_id asc";
    $result = $this->db->query($sql);
    $data = $result->getResultObject();
    return $data;
  }
}