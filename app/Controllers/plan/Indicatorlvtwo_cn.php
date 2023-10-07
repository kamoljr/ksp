<?php
namespace App\Controllers\plan;
use App\Controllers\BaseController;

class Indicatorlvtwo_cn extends BaseController
{
	public $m_name = 'plan/indicatorlvtwo_m';

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
	public function search_plantargetlvone_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_plantargetlvone_id();
		echo $result;
	}
	public function search_strategylvone_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_strategylvone_id();
		echo $result;
	}
	public function indicatorlvone_id_add()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->indicatorlvone_id_add();
		echo $result;
	}
	public function search_strategylvtwo_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_strategylvtwo_id();
		echo $result;
	}
	public function search_plantargetlvtwo_id()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->search_plantargetlvtwo_id();
		echo $result;
	}
	public function plantargetlvone_id_add()
	{	
		$this->unit_m = model($this->m_name);
		$result = $this->unit_m->plantargetlvone_id_add();
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