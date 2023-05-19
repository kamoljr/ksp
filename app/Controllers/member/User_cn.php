<?php
namespace App\Controllers;

class user_cn extends BaseController
{
	public function search_select1()
	{
		$this->user_m = model('user_m');
		$result = $this->user_m->load_select1();
		echo $result;
	}
	public function search_select2()
	{
		$this->user_m = model('user_m');
		$result = $this->user_m->load_select2();
		echo $result;
	}
	public function load_data()
	{
		$this->user_m = model('user_m');
		$result = $this->user_m->get_data();
		echo $result;
	}

	public function edit_data()
	{
		$this->user_m = model('user_m');
		$result = $this->user_m->edit_data();
		echo $result;
	}


	public function save_data()
	{
		$this->user_m = model('user_m');
		$result = $this->user_m->save_data();
		echo $result;
	}

	public function del_data()
	{
		$this->user_m = model('user_m');
		$result = $this->user_m->del_data();
		echo $result;
	}
	public function croppie()
	{
		$image = $_POST['image'];

		list($type, $image) = explode(';', $image);
		list(, $image) = explode(',', $image);

		$image = base64_decode($image);
		$image_name = time() . '.png';
		file_put_contents('uploads/' . $image_name, $image);

		echo 'successfully uploaded';
	}
}