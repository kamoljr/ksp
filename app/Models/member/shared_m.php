<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class shared_m extends Model
{

  public function replace_str($str){

    $tmp_str = trim($str);
		$tmp_str = str_replace("'","''",$tmp_str); // '
		$tmp_str = str_replace("–","-",$tmp_str); // –
		$tmp_str = str_replace("”",'"',$tmp_str); // ”
		$tmp_str = str_replace("“",'"',$tmp_str);//  “
		$tmp_str = str_replace(" ",'',$tmp_str);//  “
		return $tmp_str; 
	}

  public function find_max_id($tbl_name,$col_name){
    $sql = "SELECT max($col_name) as max_id FROM $tbl_name";
    $result = $this->db->query($sql)->getResultObject();
    $max_id = $result[0]->max_id;
		return $max_id;
	}
  

  public function find_count_reccord($tbl_name,$col_name,$ids){
    $sql = "Select count(".$col_name.") as count_reccord From ".$tbl_name." where del_item = '0' and ".$col_name." = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;
		return $count_reccord;
	}

  public function chkduplicatename($tbl_name,$col_name,$nname,$ids,$tbl_id){
    if ($ids == "" ){
      $sql = "Select count(".$col_name.") as count_reccord From ".$tbl_name." where del_item = '0' and ".$col_name." = '".$nname."'";
    }else{
      $sql = "Select count(".$col_name.") as count_reccord From ".$tbl_name." where del_item = '0' and ".$col_name." = '".$nname."' and ".$tbl_id." <> ".$ids;
    }
    
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;
		return $count_reccord;
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
	public function salt_pass($password){
		return base64_encode($password);
	}
	public function logksp($action,$action_detail,$get_id,$app_id,$app_name){
		date_default_timezone_set("Asia/Bangkok");
		$make_id = $_SESSION['user_id'];
		$make_date = $this->find_date8dig_into_data();
    $make_date_mktime = $this->mktimenow();
		$make_time = date("H:i:s" , $make_date_mktime); 
		$user_name = $_SESSION['user_name'];
		$app_name = $this->replace_str($app_name);
		$action_detail = $this->replace_str($action_detail);

		$action_menu = $action." ".$app_name;
		
		$sqllogin = "INSERT INTO log_ksp (make_id,make_date,make_date_mktime,make_time,user_name,app_id,app_name,action_menu,action_detail,get_id) VALUES ($make_id,$make_date,'$make_date_mktime','$make_time','$user_name',$app_id,'$app_name','$action_menu','$action_detail',$get_id)";
		//echo $sql;
    $resultlogin = $this->db->query($sqllogin);
	}
  public function format_ddmmyy_to_yymmdd($str) { // แปลง วันที่จาก 10/02/2558 เป็น 25580210
		if ($str != ""){
			$txt_ep_date_arr = explode("-",$str);
			return $txt_ep_date_arr[2].$txt_ep_date_arr[1].$txt_ep_date_arr[0];
		}
	}
	public function find_budget_year(){ 
		$year = date("Y")+543;
		$mon = date("m");
		if($mon<10){
			$Budget_year_now = $year;
		}else{
			$Budget_year_now = $year+1;
		}
		return $Budget_year_now;
	}

}
