<?php namespace App\Controllers;

class PublicModel_cn extends BaseController
{
	public $m_name = 'PublicModel_m';


	public function select_budget_year()// ตัวกรองปีงบประมาณ ใช้ที่หน้าหลัก
	{
		$this->publicmodel = model($this->m_name);
		$result = $this->publicmodel->select_budget_year();
    echo $result;
	}

}
