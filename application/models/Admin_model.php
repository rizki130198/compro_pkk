<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function getHome()
	{
		$query = $this->db->get('home');
		return $query->result();
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
		$query = $this->db->insert('berita', array(
			'judul'=>$this->input->post('judul'),
			'deskripsi'=>$this->input->post('berita'),
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
		$newfbang = $this->uploadFoto('foto_bang');
		$ftbangCombine = $this->validasiKosong($fbang,$newfbang);

		$query = $this->db->update('berita', array(
			'judul'=>$this->input->post('judul'),
			'deskripsi'=>$this->input->post('berita'))
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
	public function editBeranda()
	{

		$ft = $this->input->post('oldFoto');
		$fbang = ($this->ambilOldFoto($ft)=="")?null:$this->ambilOldFoto($ft);
		$newfbang = $this->uploadFoto('foto_bang');
		$ftbangCombine = $this->validasiKosong($fbang,$newfbang);

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
			redirect('admin/');
		}else{
				//Gagal
			$this->session->set_flashdata('Gagal', 'Gagal Tambah Berita');
			redirect('admin/');
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
			'deskripsi'=>$this->input->post('menu'),array(
				'id_tentang'=>$this->input->post('idnya'))
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
	public function uploadFoto($params)
	{

		$this->load->library('upload');
		$config['upload_path']          = './public/images/';
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
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */