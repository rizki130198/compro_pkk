<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		// if ($this->session->userdata('nama')=="") {
		// 	redirect('/');
		// }
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
	public function pengurus()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Pengurus';
		$data['titleNav'] = 'Halaman Data Pengurus';
		$data['link_view'] = 'admin/pengurus';
		$data['pengurus'] = $this->first_model->getPengurus();
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
	public function event_calendar()
	{
		$data['title'] = 'Selamat datang di Halaman Admin - Kalender Acara';
		$data['titleNav'] = 'Halaman Kalender Acara';
		$data['link_view'] = 'admin/event';
		$this->load->view('admin/index', $data);
	}	
	function load()
	{
		$event_data = $this->admin_model->fetch_all_event();
		foreach($event_data->result_array() as $row)
		{
			$data[] = array(
				'id'	=>	$row['id'],
				'title'	=>	$row['title'],
				'desc'	=>	$row['desc'],
				'start'	=>	$row['start_event'],
				'end'	=>	$row['end_event']
			);
		}
		echo json_encode($data);
	}

	function insert()
	{
		if($this->input->post('title'))
		{
			$data = array(
				'title'		=>	$this->input->post('title'),
				'desc'		=>	$this->input->post('desc'),
				'start_event'=>	$this->input->post('start'),
				'end_event'	=>	$this->input->post('end')
			);
			$this->admin_model->insert_event($data);
		}
	}

	function update()
	{
		if($this->input->post('id'))
		{
			$data = array(
				'title'			=>	$this->input->post('title'),
				'desc'		=>	$this->input->post('desc'),
				'start_event'	=>	$this->input->post('start'),
				'end_event'		=>	$this->input->post('end')
			);

			$this->admin_model->update_event($data, $this->input->post('id'));
		}
	}

	function delete()
	{
		if($this->input->post('id'))
		{
			$this->admin_model->delete_event($this->input->post('id'));
		}
	}

	public function tambah_berita()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Berita';
		$data['titleNav'] = 'Halaman Tambah Berita';
		$data['link_view'] = 'admin/addberita';
		$this->load->view('admin/index', $data);
	}
	public function tambah_pengurus()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Pengurus';
		$data['titleNav'] = 'Halaman Tambah Pengurus';
		$data['link_view'] = 'admin/addpengurus';
		$this->load->view('admin/index', $data);
	}
	public function edit_berita($id)
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Berita';
		$data['titleNav'] = 'Halaman Ubah Berita';
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
	public function getPengurus()
	{
		$query['pengurus'] = $this->db->get_where('pengurus',array('id_pengurus'=>$this->input->post('idnya')))->result();
		$data['code'] = 200;
		$data['html'] = $this->load->view('admin/edit_pngurus', $query);
		$data['message'] = 'Error Silakan Hubungi Tim Terkait';
		echo json_encode($data);
	}
	public function edit_pengurus($id)
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Pengurus';
		$data['titleNav'] = 'Halaman Ubah pengurus';
		$data['link_view'] = 'admin/edit_pengurus';
		$data['post'] = $this->db->get_where('pengurus',array('id_pengurus'=>$id))->row();
		$this->load->view('admin/index', $data);
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
	public function acteditTentang()
	{
		$val = $this->admin_model->editTentang();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}
		public function tambah_home()
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Home';
		$data['titleNav'] = 'Halaman Tambah Home';
		$data['link_view'] = 'admin/addhome';
		$this->load->view('admin/index', $data);
	}
	public function edithome($id)
	{
		$data['title'] = 'Selamat Datang di Halaman Admin - Home';
		$data['titleNav'] = 'Halaman Ubah Home';
		$data['link_view'] = 'admin/edit_home';
		$data['post'] = $this->db->get_where('home',array('idhome'=>$id))->row();
		$this->load->view('admin/index', $data);
	}
	public function acteditHome()
	{
		$val = $this->admin_model->editBeranda();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}
		public function actaddHome()
	{
		$val = $this->admin_model->addBeranda();
		if ($val == 1) {
			$json = array('berhasil'=>true);
		}else{
			$json = array('gagal'=>false);
		}
		echo json_encode($json);
	}
	public function actAddPengurus()
	{
		$val = $this->admin_model->addPengurus();
	}
	public function actEditPengurus()
	{
		$this->admin_model->editPengurus();
	}	
	public function actDeletePengurus()
	{
		$val = $this->admin_model->deletePengurus();
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