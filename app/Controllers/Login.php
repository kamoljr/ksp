<?php namespace App\Controllers;
use App\Libraries\G_Library; //so we can easily load the custom library
class Login extends BaseController
{
  public function index()
  {
    $this->login_m = model('login_m');

    if ($this->login_m->record_count($_POST["username"], $_POST["password"]) == 1) {
      $result = $this->login_m->fetch_user_login($_POST["username"], $_POST["password"]);
      $UserId = $result[0]->user_id;
      $newdata = [
        'user_id' => $result[0]->user_id,
        'unit_id' => $result[0]->unit_id,
        'group_id' => $result[0]->group_id,
        'user_name' => $result[0]->user_name,
        'position_name' => $result[0]->position_name,
        'chief' => $result[0]->chief,
        'unit_name' => $result[0]->unit_name,
        'group_name' => $result[0]->group_name,
        'displaymode' => $result[0]->displaymode,
      ];
      session()->set($newdata);
      //-------permission------------
      $this->login_m = model('login_m');
      $datapermission = $this->login_m->get_permission($UserId);
      $ii = 0;

      foreach ($datapermission as $obj) {
        	// $_SESSION['perView_'.$obj->app_id] = $obj->show_p;
        	$_SESSION['show_p'.$obj->app_id] = $obj->show_p;
          $_SESSION['add_p_'.$obj->app_id] = $obj->add_p;
          $_SESSION['edit_p_'.$obj->app_id] = $obj->edit_p;
          $_SESSION['del_p_'.$obj->app_id] = $obj->del_p;
      }
      return redirect()->to('pages/view/unit');
    } else {
      $_SESSION['message'] = '<p class="color-danger-800">ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด!</p>';
      session()->markAsFlashdata("message");
      return redirect()->to('/');
    }
    //}
  }

  function logout()
  {
    if (!isset($_SESSION['user_name'])){
      return redirect()->to('/');
    }else{
      $this->login_m = model('login_m');
  		$datapermission = $this->login_m->get_permission($_SESSION['user_id']);
  		foreach ($datapermission as $obj) {
  		  // unset($_SESSION['perView_'.$obj->app_id]);
  		  unset($_SESSION['show_p'.$obj->app_id]);
  		  unset($_SESSION['add_p_'.$obj->app_id]);
  		  unset($_SESSION['edit_p_'.$obj->app_id]);
  		  unset($_SESSION['del_p_'.$obj->app_id]);
  		}
  		unset($_SESSION['user_id']);
  		unset($_SESSION['unit_id']);
  		unset($_SESSION['group_id']);
  		unset($_SESSION['user_name']);
  		unset($_SESSION['position_name']);
      unset($_SESSION['chief']);
  		unset($_SESSION['unit_name']);
  		unset($_SESSION['group_name']);
  		unset($_SESSION['displaymode']);

      return redirect()->to('/');
    }

  }
  //--------------------------------------------------------------------
}