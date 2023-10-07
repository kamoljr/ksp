<?php
namespace App\Controllers\member;
use App\Controllers\BaseController;

class Settings_cn extends BaseController
{
	public $m_name = 'member/settings_m';

	// ------------เปิด แก้ไข--------------
	public function search_select1()
	{
		$this->user_m = model($this->m_name);
		$result = $this->user_m->load_select1();
		echo $result;
	}
	public function search_select2()
	{
		$this->user_m = model($this->m_name);
		$result = $this->user_m->load_select2();
		echo $result;
	}
	// ------------ปิด แก้ไข--------------

	// ------------ไม่ต้องแก้ -------------
	public function load_data()
	{	
		$this->user_m = model($this->m_name);
//$userModel = model('App\Models\UserModel');

		$result = $this->user_m->get_data();
		echo $result;
	}
	public function edit_data()
	{
		$this->user_m = model($this->m_name);
		$result = $this->user_m->edit_data();
		echo $result;
	}
	public function chk_del()
	{
		$this->user_m = model($this->m_name);
		$result = $this->user_m->chk_del();
		echo $result;
	}
	public function save_data()
	{
		$this->user_m = model($this->m_name);
		$result = $this->user_m->save_data();
		echo $result;
	}
	public function del_data()
	{
		$this->user_m = model($this->m_name);
		$result = $this->user_m->del_data();
		echo $result;
	}
// ------------ปิด ไม่ต้องแก้ -------------
}