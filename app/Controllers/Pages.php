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
		$app_name_des = "";
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
			$tmp_str = $row['app_name'];
			$tmp_str = str_replace(" ",'',$tmp_str);
			$app_name = str_replace("&emsp;",'',$tmp_str);
			$app_name_des = $row['app_name_des'];
			$description = $row['description'];
			$description_id = $row['description_id'];
			$description_en = $row['description_en'];
			$icon_system = $row['icon_system'];
		
		}

		$data['pages'] = $pages; 
		$data['url'] = $url; // ใช้เช็คสร้างเมนู กรณี สร้างเลเวลแรก
		$data['mom_id'] = $mom_id;
		$data['app_id'] = $app_id;
		$data['description'] = $description;
		$data['description_id'] = $description_id;
		$data['app_name'] = $app_name;
		$data['app_name_des'] = $app_name_des;
		$data['description_en'] = $description_en;
		$data['icon_system'] = $icon_system;

		$data['ip_apps'] = '192.168.1.44';

		$data['link_url'] = "/public/index.php/pages/view/";

		
		$geturi = new \CodeIgniter\HTTP\URI(current_url());// รับค่า พารามิเตอร์จาก url
		$segments = $geturi->getSegments();
		//echo count($segments);

		$para1 = '';
		$para2 = '';
		$para3 = '';
		$para4 = '';
		$para5 = '';
		if (count($segments) == 6){
			$para1 = $geturi->getSegment(6);
		}
		if (count($segments) == 7){
			$para1 = $geturi->getSegment(6);
			$para2 = $geturi->getSegment(7);
		}
		if (count($segments) == 8){
			$para1 = $geturi->getSegment(6);
			$para2 = $geturi->getSegment(7);
			$para3 = $geturi->getSegment(8);
		}
		if (count($segments) == 9){
			$para1 = $geturi->getSegment(6);
			$para2 = $geturi->getSegment(7);
			$para3 = $geturi->getSegment(8);
			$para4 = $geturi->getSegment(9);
		}
		if (count($segments) == 10){
			$para1 = $geturi->getSegment(6);
			$para2 = $geturi->getSegment(7);
			$para3 = $geturi->getSegment(8);
			$para4 = $geturi->getSegment(9);
			$para5 = $geturi->getSegment(10);
		}
		$data['para1'] = $para1;
		$data['para2'] = $para2;
		$data['para3'] = $para3;
		$data['para4'] = $para4;
		$data['para5'] = $para5;

		// echo "para1=".$para1;
		// echo "para2=".$para2;
		// echo "para3=".$para3;
		// echo "para4=".$para4;
		// echo "para5=".$para5;
		
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