<?php namespace App\Controllers;
use App\Libraries\G_Library;  //so we can easily load the custom library


class Pages extends BaseController
{

	public function index()
	{
		throw new \CodeIgniter\Exceptions\PageNotFoundException(''); // แสดง PageNotFound
	}
	public function view($pages = '')
	{
		$mom_id = "";
		$app_id = "";
		$url = "";
		$app_name = "";
		$description = "";
		$description_id = "";
		$description_name = "";
		$description_en = "";
	

		$this->app_m = model('app_m');
		$result = $this->app_m->getapp($pages);
		

		foreach ($result as $row)
		{
		
			$mom_id = $row['mom_id'];
			$app_id = $row['app_id'];
			$url = $row['url'];
			$app_name = $row['app_name'];
			$description = $row['description'];
			$description_id = $row['description_id'];
			$description_en = $row['description_en'];
		
		}

		$data['pages'] = $pages; 
		$data['url'] = $url; // ใช้เช็คสร้างเมนู กรณี สร้างเลเวลแรก
		$data['mom_id'] = $mom_id;
		$data['app_id'] = $app_id;
		$data['description'] = $description;
		$data['description_id'] = $description_id;
		$data['app_name'] = $app_name;
		$data['description_en'] = $description_en;
		
		//echo APPPATH.'/Views/'.$description_en.'/'.$pages.'/'.$pages.'.phpss';
		if (!is_file(APPPATH.'/Views/'.$description_en.'/'.$pages.'/'.$pages.'.php')){
			$data['pages'] = 'filenotfound';
		}
		echo view('/templates/pages.php',$data);
		//throw new \CodeIgniter\Router\Exceptions\RedirectException('home'); // redirect ไปที่ control อะไร
		//throw new \CodeIgniter\Exceptions\PageNotFoundException('ไม่พบหน้าเว็บนี้ '.$AppLink); // แสดง PageNotFound
		//$mine = new G_Library(); // loads and creates instance
		//$mine = $mine->thai_date_and_time();
	}
	public function navigation()
	{
		$this->app_m = model('app_m');
		$result = $this->app_m->getappall();
    	echo $result;
	}
	public function navigationsub()
	{
		$this->app_m = model('app_m');
		$result = $this->app_m->getappsuball();
    	echo $result;
	}

	//--------------------------------------------------------------------

}