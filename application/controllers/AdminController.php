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
		$data['titleNav'] = 'Halaman Dashboard';
		$data['link_view'] = 'admin/home';
		$this->load->view('admin/index', $data);
	}	
	public function menu()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Menu';
		$data['titleNav'] = 'Halaman Pengaturan Menu';
		$data['link_view'] = 'admin/menu';
		$data['menu'] = $this->admin_model->lihat_menu();
		$this->load->view('admin/index', $data);
	}
	public function berita()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Berita';
		$data['titleNav'] = 'Halaman Pengaturan Berita';
		$data['link_view'] = 'admin/berita';
		$data['post'] = $this->admin_model->getPost();
		$this->load->view('admin/index', $data);
	}
	public function daf_pengguna()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Tambah Pengguna';
		$data['titleNav'] = 'Halaman Tambah Pengguna';
		$data['link_view'] = 'admin/daf_pengguna';
		$data['post'] = $this->admin_model->getPost();
		$this->load->view('admin/index', $data);
	}
	public function pengguna()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Pengguna';
		$data['titleNav'] = 'Halaman Data Pengguna';
		$data['link_view'] = 'admin/pengguna';
		$data['post'] = $this->admin_model->getPost();
		$this->load->view('admin/index', $data);
	}
	public function load_user()
	{
		$data = $this->admin_model->load_user();
		echo json_encode($data);
	}
	public function deleteUsers()
	{
		$this->admin_model->actDeleteUser($this->input->post('iduser'));
	}
	public function proses_regis()
	{
		$this->admin_model->proses_regis();
	}
	public function settinghome()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Home';
		$data['titleNav'] = 'Halaman Pengaturan Home';
		$data['link_view'] = 'admin/settinghome';
		$data['home'] = $this->admin_model->getHome();
		$data['tentang'] = $this->admin_model->getTentang();
		$data['kontak'] = $this->admin_model->getKontak();
		$data['alamat'] = $this->admin_model->getAlamat();
		$this->load->view('admin/index', $data);
	}	
	public function tambah_berita()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Berita';
		$data['titleNav'] = 'Halaman Tambah Berita';
		$data['link_view'] = 'admin/addberita';
		$this->load->view('admin/index', $data);
	}
	public function edit_berita($id)
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Berita';
		$data['titleNav'] = 'Halaman Tambah Berita';
		$data['link_view'] = 'admin/editberita';
		$data['post'] = $this->db->get_where('berita',array('idberita'=>$id))->row();
		$this->load->view('admin/index', $data);
	}
	public function getBerita()
	{
		$query['berita'] = $this->db->get_where('berita',array('idberita'=>$this->input->post('idnya')))->result();
		$data['code'] = 200;
		$data['html'] = $this->load->view('admin/editberita', $query);
		$data['message'] = 'Error Silakan Hubungi Tim Terkait';
		echo json_encode($data);
	}
	public function actAddBerita()
	{
		$val = $this->admin_model->addBerita();
	}
	public function actEditBerita()
	{
		$this->admin_model->editBerita();
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
	public function keluar()
	{
		$sess = $this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file AdminController.php */
/* Location: ./application/controllers/AdminController.php */