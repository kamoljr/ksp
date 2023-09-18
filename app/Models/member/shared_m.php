<?php 
namespace App\Models\member;
use CodeIgniter\Model;

class shared_m extends Model
{
  public function find_max_id($tbl_name,$col_name){
    $sql = "SELECT max(unit_id) as max_id FROM unit_name";
    $result = $this->db->query($sql)->getResultObject();
    $max_id = $result[0]->max_id;
    if ($max_id == ""){$max_id=0;}
    $max_id = $max_id+1;
		return $max_id;
	}
  
  public function find_count_reccord($tbl_name,$col_name,$ids){
   $sql = "Select count(".$col_name.") as count_reccord From ".$tbl_name." where del_item = 'N' and ".$col_name." = " . $ids;
    $result = $this->db->query($sql)->getResultObject();
    $count_reccord = $result[0]->count_reccord;
		return $count_reccord;
	}
}
