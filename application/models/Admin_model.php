<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function getHome()
	{
		$query = $this->db->get('home');
		return $query->result();
	}
	public function proses_regis()
	{
		$v_user = $this->db->get_where('user', array('nama' => $this->input->post('nama',TRUE)))->row();
		$v_email = $this->db->get_where('user', array('email' => $this->input->post('email',TRUE)))->row();
		if (count($v_user) > 0 ) {
			$this->session->set_flashdata('gagal', 'Nama yang anda masukan sudah terdaftar');
		}else{
			if (count($v_email) > 0) {
				$this->session->set_flashdata('gagal', 'Nama yang anda masukan sudah terdaftar');
			}else{
				$val = $this->db->insert('user', array(
					'nama' => $this->input->post('nama',TRUE),
					'email' => $this->input->post('email',TRUE),
					'password' => md5($this->input->post('password',TRUE)),
					'nohp' => $this->input->post('nohp'),
					'role' => $this->input->post('role'),
					'created_at' => date('Y-m-d H:i:s')
				));
				if ($val == TRUE) {
					$this->session->set_flashdata('sukses', 'Berhasil di daftarkan');
				}
			}
		}
		redirect('admincontroller/pengguna');
	}
	public function load_user()
	{
		$this->db->order_by('iduser', 'DESC');
		$query = $this->db->get('user');
		return $query->result_array();
	}
	public function actDeleteUser($id)
	{
		$this->db->where('iduser', $id);
		$this->db->delete('user');
	}
	public function lihat_menu()
	{
		$this->db->select('id_menu,menu');
		return $this->db->get('menu')->result();

	}
	public function addMenu()
	{
		$query = $this->db->insert('menu', array(
			'menu'=>$this->input->post('menu')
		));
		if ($query==true) {
			// Berhasil
			$val = 1;
		}else{
			//Gagal
			$val = 0;
		}
		return $val;
	}
	public function editMenu()
	{
		$query = $this->db->update('menu',array(
			'menu'=>$this->input->post('menu'),array(
				'id_menu'=>$this->input->post('idmenu'))
		));
		if ($query==true) {
				// Berhasil
			$val = 1;
		}else{
				//Gagal
			$val = 0;
		}
		return $val;
	}
	public function deleteMenu()
	{
		$query = $this->db->delete('menu',array(
			'id_menu'=>$this->input->post('idmenu')
		));
		if ($query==true) {
				// Berhasil
			$val = 1;
		}else{
				//Gagal
			$val = 0;
		}
		return $val;
	}
	public function getPost()
	{
		$this->db->select('idberita,judul,deskripsi,gambar,created_at');
		$query = $this->db->get('berita');
		return $query->result_array();
	}
	public function addBerita()
	{		
		$ft = $this->input->post('oldFoto');
		$fbang = ($this->ambilOldFoto($ft)=="")?null:$this->ambilOldFoto($ft);
		$newfbang = $this->uploadFoto('foto');
		$ftbangCombine = $this->validasiKosong($fbang,$newfbang);
		$query = $this->db->insert('berita', array(
			'judul'=>$this->input->post('judul'),
			'deskripsi'=>$this->input->post('berita'),
			'gambar'=>$ftbangCombine,
			'created_at'=>date('Y-m-d H:i:s'),
		));
		if ($query==true) {
				// Berhasil
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Berita');
			redirect('admincontroller/berita');
		}else{
				//Gagal
			$this->session->set_flashdata('Gagal', 'Gagal Tambah Berita');
			redirect('admincontroller/');
		}
	}	
	public function editBerita()
	{
		$ft = $this->input->post('oldFoto');
		$fbang = ($this->ambilOldFoto($ft)=="")?null:$this->ambilOldFoto($ft);
		$newfbang = $this->uploadFoto('foto');
		$ftbangCombine = $this->validasiKosong($fbang,$newfbang);

		$query = $this->db->update('berita', array(
			'judul'=>$this->input->post('judul'),
			'deskripsi'=>$this->input->post('berita'),
			'gambar'=>$ftbangCombine)
			,array(
				'idberita'=>$this->input->post('idberita'))
		);
		if ($query==true) {
				// Berhasil
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Berita');
			redirect('admincontroller/berita');
		}else{
				//Gagal
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Berita');
			redirect('admincontroller/');
		}
		return $val;
	}
	public function deleteBerita()
	{
		$query = $this->db->delete('berita',array(
			'idberita'=>$this->input->post('idberita')
		));
		if ($query==true) {
				// Berhasil
			$val = 1;
		}else{
				//Gagal
			$val = 0;
		}
		return $val;
	}
	public function editBeranda()
	{

		$ft = $this->input->post('oldFoto');
		$fbang = ($this->ambilOldFoto($ft)=="")?null:$this->ambilOldFoto($ft);
		$newfbang = $this->uploadFoto('foto');
		$ftbangCombine = $this->validasiKosong($fbang,$newfbang);

		$query = $this->db->update('home',array(
			'deskripsi'=>$this->input->post('deskprisi'),
			'gambar'=>$ftbangCombine),array(
				'idhome'=>$this->input->post('idnya')
		));
		if ($query==true) {
				// Berhasil
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Berita');
			redirect('admincontroller/settinghome');
		}else{
				//Gagal
			$this->session->set_flashdata('Gagal', 'Gagal Tambah Berita');
			redirect('admincontroller/settinghome');
		}
		return $val;
	}
	public function deleteBeranda()
	{
		$query = $this->db->delete('menu',array(
			'id_menu'=>$this->input->post('idmenu')
		));
		if ($query==true) {

			// Berhasil
			$val = 1;
		}else{

			//Gagal
			$val = 0;
		}
		return $val;
	}
	public function addBeranda()
	{
		$gambar = $this->uploadFoto('gambar');
		$query = $this->db->insert('home', array(
			'deskripsi'=>$this->input->post('isi'),
			'gambar'=>$gambar
		));
		if ($query==true) {
				// Berhasil
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Berita');
			redirect('admincontroller/settinghome');
		}else{
				//Gagal
			$this->session->set_flashdata('Gagal', 'Gagal Tambah Berita');
			redirect('admincontroller/settinghome');
		}
	}
	public function getTentang()
	{
		$this->db->select('id_tentang,deskripsi');
		$query = $this->db->get('tentang');
		return $query->row();
	}

	public function editTentang()
	{
		$query = $this->db->update('tentang',array(
			'deskripsi'=>$this->input->post('tentang')),array(
				'id_tentang'=>$this->input->post('idnya'))
		);
		if ($query==true) {
				// Berhasil
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Berita');
			redirect('admincontroller/settinghome');
		}else{
				//Gagal
			$this->session->set_flashdata('Gagal', 'Gagal Tambah Berita');
			redirect('admincontroller/settinghome');
		}
		return $val;
	}
	public function getKontak()
	{
		$query = $this->db->get('kontak');
		return $query->result();
	}
	public function getAlamat()
	{
		$this->db->select('alamat,nohp,nohp2');
		$query = $this->db->get('alamat');
		return $query->result();
	}
	public function addPengurus()
	{		
		$newfbang = $this->uploadFotopengurus('gambar');
		$query = $this->db->insert('pengurus', array(
			'nama'=>$this->input->post('nama'),
			'foto'=>$newfbang,
			'jabatan'=>$this->input->post('posisi'),
			'created_at'=>date('Y-m-d H:i:s'),
		));
		if ($query==true) {
				// Berhasil
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Pengurus');
			redirect('admincontroller/Pengurus');
		}else{
				//Gagal
			$this->session->set_flashdata('Gagal', 'Gagal Tambah Pengurus');
			redirect('admincontroller/Pengurus');
		}
	}	
	public function editPengurus()
	{
		$ft = $this->input->post('oldFoto');
		$fbang = ($this->ambilOldFoto($ft)=="")?null:$this->ambilOldFoto($ft);
		$newfbang = $this->uploadFotopengurus('gambar');
		$ftbangCombine = $this->validasiKosong($fbang,$newfbang);

		$query = $this->db->update('pengurus', array(
			'nama'=>$this->input->post('nama'),
			'jabatan'=>$this->input->post('posisi'),
			'foto'=>$ftbangCombine)
			,array(
				'id_pengurus'=>$this->input->post('idPengurus'))
		);
		if ($query==true) {
				// Berhasil
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Pengurus');
			redirect('admincontroller/Pengurus');
		}else{
				//Gagal
			$this->session->set_flashdata('Berhasil', 'Berhasil Tambah Pengurus');
			redirect('admincontroller/');
		}
		return $val;
	}
	public function deletePengurus()
	{
		$query = $this->db->delete('pengurus',array(
			'id_pengurus'=>$this->input->post('idPengurus')
		));
		if ($query==true) {
				// Berhasil
			$val = 1;
		}else{
				//Gagal
			$val = 0;
		}
		return $val;
	}
	public function uploadFotopengurus($params)
	{

		$this->load->library('upload');
		$config['upload_path']          = './assets/anggota/home/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['remove_spaces']        = TRUE;
		$config['encrypt_name']         = TRUE;

		$fb = "";
		$this->upload->initialize($config);
		if ($this->upload->do_upload($params)) {
			$f = $this->upload->data();
			if (count($f) != 14) {
				for ($i=0; $i < count($f); $i++) {
					$abc = $f[$i]['file_name'].',';
					$fb .= $abc;
				}
				$newfotonya = substr($fb, 0, -1);
			}else{
				$newfotonya = $f['file_name'];
			}
		}else{
			$f = $this->input->post($params);
			for ($i=0; $i < count($f); $i++) {
				$abc = $f[$i].',';
				$fb .= $abc;
			}
			$newfotonya = substr($fb, 0, -1);
		}
		return $newfotonya;
	}
	public function uploadFoto($params)
	{

		$this->load->library('upload');
		$config['upload_path']          = './assets/img/berita/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['remove_spaces']        = TRUE;
		$config['encrypt_name']         = TRUE;

		$fb = "";
		$this->upload->initialize($config);
		if ($this->upload->do_upload($params)) {
			$f = $this->upload->data();
			if (count($f) != 14) {
				for ($i=0; $i < count($f); $i++) {
					$abc = $f[$i]['file_name'].',';
					$fb .= $abc;
				}
				$newfotonya = substr($fb, 0, -1);
			}else{
				$newfotonya = $f['file_name'];
			}
		}else{
			$f = $this->input->post($params);
			for ($i=0; $i < count($f); $i++) {
				$abc = $f[$i].',';
				$fb .= $abc;
			}
			$newfotonya = substr($fb, 0, -1);
		}
		return $newfotonya;
	}
	function validasiKosong($p1,$p2)
	{
		if ($p1=="") {
			$fotogabung = $p2;
		}else if($p2==""){
			$fotogabung = $p1;
		}else{
			$fotogabung = $p2.','.$p1;
		}
		return $fotogabung;
	}
	function ambilOldFoto($param)
	{
		if (count($param)!=0) {
			$nmf = "";
			for ($i=0; $i < count($param); $i++) {
				$nmf .= $param[$i].",";
			}
			$namafotoold = substr($nmf, 0,-1);
		}else{
			$namafotoold = $param[0];
		};
		return $namafotoold;
	}
	/*event*/
	function fetch_all_event(){
		$this->db->order_by('id');
		return $this->db->get('events');
	}

	function insert_event($data)
	{
		$this->db->insert('events', $data);
	}

	function update_event($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('events', $data);
	}

	function delete_event($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('events');
	}
	/*end event*/
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */