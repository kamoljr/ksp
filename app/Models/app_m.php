<?php namespace App\Models;
use CodeIgniter\Model;

class App_m extends Model
{

    public function getapp($pages = ''){
      $sql = "SELECT mom_id,app_id,url,app_name,description.description ,app.description_id ,description.description_en FROM app inner join description on app.description_id = description.description_id Where url = '".$pages."'";
      //echo $sql;
  		$query   = $this->db->query($sql);
  		$results = $query->getResultArray();
      return $results;
    }
    public function getappall(){
      $user_id = $_POST["user_id"];
      $description_id = $_POST["description_id"];
      $sql = "SELECT 
      (select count(app_child.app_id) from app as app_child where app_child.mom_id = app_mom.app_id) as count_child 
      ,app_mom.app_id,app_mom.mom_id,app_mom.url,app_mom.app_name 
      FROM app_permission inner join app as app_mom on app_permission.app_id = app_mom.app_id 
      inner join description on app_mom.description_id = description.description_id 
      Where app_mom.status_show = 'Y' and app_mom.mom_id = 0 and app_permission.user_id = ".$user_id." and description.description_id = ".$description_id." order by app_mom.run_no";
      
      //echo $sql;
      $result = $this->db->query($sql);
      $data = $result->getResultArray();
      $resData = json_encode($data);
      return $resData;
    }
    public function getappsuball(){
      $mom_id = $_POST["mom_id"];
      $user_id = $_POST["user_id"];
      $description_id = $_POST["description_id"];
      $sql = "SELECT 
      (select count(app_child.app_id) from app as app_child where app_child.mom_id = app_mom.app_id) as count_child_sub 
      ,app_mom.app_id as app_id_sub,app_mom.mom_id as mom_id_sub,app_mom.url as url_sub,app_mom.app_name as app_name_sub 
      FROM app_permission inner join app as app_mom on app_permission.app_id = app_mom.app_id 
      inner join description on app_mom.description_id = description.description_id 
      Where app_permission.user_id = ".$user_id." and description.description_id = ".$description_id." and app_mom.mom_id = ".$mom_id." order by app_mom.run_no";
      
      //echo $sql;
      $result_sub = $this->db->query($sql);
      $data_sub = $result_sub->getResultArray();
      $resData_sub = json_encode($data_sub);
      return $resData_sub;
    }

}