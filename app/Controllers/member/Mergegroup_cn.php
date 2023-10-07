<?php
namespace App\Controllers\member;
use App\Controllers\BaseController;

class Mergegroup_cn extends BaseController
{
	public $m_name = 'member/mergegroup_m';

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
	public function create_orgchart_unit()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->create_orgchart_unit();
		echo $result;
	}
	
	public function merge_unit_add()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->merge_unit_add();
		echo $result;
	}
	public function merge_group_add()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->merge_group_add();
		echo $result;
	}
	public function create_orgchart_group()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->create_orgchart_group();
		echo $result;
	}
	public function moveunit_save()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->moveunit_save();
		echo $result;
	}
	public function copyorg()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->copyorg();
		echo $result;
	}
	public function findmessages()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->findmessages();
		echo $result;
	}
	public function search_structure_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_structure_id();
		echo $result;
	}
	public function search_unit_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_unit_id();
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