<?php
namespace App\Controllers\member;
use App\Controllers\BaseController;

class Permissions_cn extends BaseController
{
	public $m_name = 'member/permissions_m';

	// ------------เปิด แก้ไข--------------
	public function search_select1()
	{
		$this->permissions_m = model($this->m_name);
		$result = $this->permissions_m->load_select1();
		echo $result;
	}
	public function search_select2()
	{
		$this->permissions_m = model($this->m_name);
		$result = $this->permissions_m->load_select2();
		echo $result;
	}
	// ------------ปิด แก้ไข--------------

	// ------------ไม่ต้องแก้ -------------
	public function load_data()
	{	
		$this->permissions_m = model($this->m_name);
//$permissionsModel = model('App\Models\PermissionsModel');

		$result = $this->permissions_m->get_data();
		echo $result;
	}
	public function edit_data()
	{
		$this->permissions_m = model($this->m_name);
		$result = $this->permissions_m->edit_data();
		echo $result;
	}
	public function chk_del()
	{
		$this->permissions_m = model($this->m_name);
		$result = $this->permissions_m->chk_del();
		echo $result;
	}
	public function save_data()
	{
		$this->permissions_m = model($this->m_name);
		$result = $this->permissions_m->save_data();
		echo $result;
	}
	public function del_data()
	{
		$this->permissions_m = model($this->m_name);
		$result = $this->permissions_m->del_data();
		echo $result;
	}
// ------------ปิด ไม่ต้องแก้ -------------
}