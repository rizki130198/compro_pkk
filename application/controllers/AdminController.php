<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		if ($this->session->userdata('nama')=="") {
			redirect('/');
		}
	}
	public function index()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Home';
		$data['link_view'] = 'admin/home';
		$this->load->view('admin/index', $data);
	}	
	public function menu()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Menu';
		$data['link_view'] = 'admin/menu';
		$data['menu'] = $this->admin_model->lihat_menu();
		$this->load->view('admin/index', $data);
	}
	public function berita()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Berita';
		$data['link_view'] = 'admin/berita';
		$data['post'] = $this->admin_model->getPost();
		$this->load->view('admin/index', $data);
	}
	public function settinghome()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Pengaturan';
		$data['link_view'] = 'admin/settinghome';
		$data['home'] = $this->admin_model->getHome();
		$data['tentang'] = $this->admin_model->getTentang();
		$data['kontak'] = $this->admin_model->getKontak();
		$data['alamat'] = $this->admin_model->getAlamat();
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