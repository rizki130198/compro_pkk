<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Model {

	public function index()
	{
		$this->load->view('admin/index', $data);
	}
	public function actAddBerita()
	{
		$val = $this->admin_model->addBerita();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}
	public function actEditBerita()
	{
		$val = $this->admin_model->editBerita();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}	
	public function actDeleteBerita()
	{
		$val = $this->admin_model->deleteBerita();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}
	public function actAddmenu()
	{
		$val = $this->admin_model->addMenu();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}
	public function actEditMenu()
	{
		$val = $this->admin_model->editMenu();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}
	public function actDeleteMenu()
	{
		$val = $this->admin_model->deleteMenu();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}

}

/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */