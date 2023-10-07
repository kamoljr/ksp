<?php
namespace App\Controllers\member;
use App\Controllers\BaseController;

class Exuserwithdrawproject_cn extends BaseController
{
	public $m_name = 'member/exuserwithdrawproject_m';

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
	public function search_budget_year()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_budget_year();
		echo $result;
	}
	public function user_id_add()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->user_id_add();
		echo $result;
	}
	public function search_project_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_project_id();
		echo $result;
	}
	public function project_id_add()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->project_id_add();
		echo $result;
	}

	public function edit_data()
	{
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->edit_data();
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