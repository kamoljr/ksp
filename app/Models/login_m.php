<?php namespace App\Models;
use CodeIgniter\Model;
class Login_m extends Model
{
  public function fetch_user_login($username,$password){
     $password = $this->salt_pass($password);
    // $sql = "SELECT
    // tu.user_id,
    // tg.unit_id,
    // tg.group_id,
    // tu.user_name,
    // tu.position_name,
    // tu.chief,
    // tunit.unit_name,
    // tg.group_name,
    // tu.displaymode
    // FROM users as tu
    // INNER JOIN group_name as tg
    // ON tu.group_id = tg.group_id
    // INNER JOIN unit_name as tunit
    // ON tg.unit_id = tunit.unit_id
    // WHERE tu.del_item = '0' and tu.loginname = '".$username."' and tu.password = '".$password."'";
    $sql = "SELECT MAX(structure_id) AS maxid FROM dbo.structure_org where del_item = '0'";
    $result = $this->db->query($sql)->getResultObject();
    $maxid = $result[0]->maxid;
  

    $sql = "SELECT TOP (1) PERCENT dbo.structure_user.structure_id, dbo.users.user_id, dbo.structure_user.user_name, dbo.structure_user.unit_id, dbo.structure_user.group_id, dbo.structure_user.position_name, dbo.structure_user.chief, 
    dbo.structure_group.group_name, dbo.structure_unit.unit_name, dbo.users.displaymode
    FROM dbo.structure_group INNER JOIN
    dbo.structure_user INNER JOIN
    dbo.users ON dbo.structure_user.user_id = dbo.users.user_id ON dbo.structure_group.group_id = dbo.structure_user.group_id AND dbo.structure_group.structure_id = dbo.structure_user.structure_id INNER JOIN
    dbo.structure_unit ON dbo.structure_group.unit_id = dbo.structure_unit.unit_id AND dbo.structure_group.structure_id = dbo.structure_unit.structure_id
    WHERE (dbo.structure_user.structure_id = ".$maxid.") and loginname = '".$username."' and password = '".$password."'";
    //echo $sql;
    
    $result = $this->db->query($sql);

    $data = $result->getResultObject();
    
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
    WHERE tu.del_item = '0' and tu.loginname = '".$username."' and tu.password = '".$password."'";
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
  public function log_login(){
    date_default_timezone_set("Asia/Bangkok");
		$make_id = $_SESSION['user_id'];
		$make_date = $this->find_date8dig_into_data();
    $make_date_mktime = $this->mktimenow();
		$make_time = date("H:i:s" , $make_date_mktime); 
		$user_name = $_SESSION['user_name'];
		$action_menu = "Login เข้าสู่ระบบ";
		$sql = "INSERT INTO log_ksp (make_id,make_date,make_date_mktime,make_time,user_name,app_name,action_menu,action_detail) VALUES ($make_id,$make_date,'$make_date_mktime','$make_time','$user_name','','$action_menu','')";

    $result = $this->db->query($sql);
  }
  public function log_logout(){
    date_default_timezone_set("Asia/Bangkok");
		$make_id = $_SESSION['user_id'];
		$make_date = $this->find_date8dig_into_data();
    $make_date_mktime = $this->mktimenow();
		$make_time = date("H:i:s" , $make_date_mktime); 
		$user_name = $_SESSION['user_name'];
		$action_menu = "Logout ออกจากระบบ";
		$sql = "INSERT INTO log_ksp (make_id,make_date,make_date_mktime,make_time,user_name,app_name,action_menu,action_detail) VALUES ($make_id,$make_date,'$make_date_mktime','$make_time','$user_name','','$action_menu','')";

    $result = $this->db->query($sql);
  }
  public function find_date8dig_into_data() { // หา ปีเดือนวัน 8 หลัก
		$dates= date("Ymd");
		$cy = substr($dates,0,4)+543;
		$cm = substr($dates,4,2);
		$cd = substr($dates,6,2);
		$r_date = "'".$cy.$cm.$cd."'";
		return $r_date; 
	}
  public function mktimenow(){
		return mktime(date("H"),date("i"),date("s"),date("m") ,date("d"),date("Y")); 
	}


}