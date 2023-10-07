<?php
namespace App\Controllers\member;
use App\Controllers\BaseController;

class User_cn extends BaseController
{
	public $m_name = 'member/user_m';

	// ------------เปิด แก้ไข--------------
	public function search_select1()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->load_select1();
		echo $result;
	}
	public function search_select2()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->load_select2();
		echo $result;
	}
	// ------------ปิด แก้ไข--------------

	// ------------ไม่ต้องแก้ -------------
	public function load_data()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->get_data();
		echo $result;
	}
	public function create_chift_unit_add()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->create_chift_unit_add();
		echo $result;
	}
	public function search_structure_name()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_structure_name();
		echo $result;
	}
	public function search_unit_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_unit_id();
		echo $result;
	}
	public function search_group_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_group_id();
		echo $result;
	}

	public function edit_data()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->edit_data();
		echo $result;
	}
	public function cancel_user()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->cancel_user();
		echo $result;
	}
	public function dispose_user()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->dispose_user();
		echo $result;
	}
	public function chk_del()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->chk_del();
		echo $result;
	}
	public function save_data()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->save_data();
		echo $result;
	}
	public function del_data()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->del_data();
		echo $result;
	}
// ------------ปิด ไม่ต้องแก้ -------------
}