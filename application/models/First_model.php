<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_model extends CI_Model {

	public function getHome()
	{
		$this->db->order_by('idhome', 'desc');
		$this->db->limit(0,5);
		$query = $this->db->get('home');
		return $query->result();
	}
	public function getPost()
	{
		$this->db->select('judul,deskripsi,gambar,created_at');
		$query = $this->db->get('berita');
		return $query->result_array();
	}
	public function getPostPaging($isi,$page)
	{
		$this->db->limit($isi, $page);
		$this->db->select('idberita,judul,deskripsi,gambar,created_at');
		$query = $this->db->get('berita');
		return $query->result_array();
	}
	public function getMenu()
	{
		$this->db->select('menu');
		$query = $this->db->get('menu');
		return $query->result();
	}
	public function getSubmenu()
	{
		$this->db->select('idmenu,namasubmenu');
		$query = $this->db->get('submenu');
		return $query->result();
	}
	public function getTentang()
	{
		$this->db->select('deskripsi');
		$query = $this->db->get('tentang');
		return $query->row();
	}
	public function getAlamat()
	{
		$query = $this->db->get('alamat');
		return $query->row();
	}
	public function getPagingBerita()
	{
		$this->db->select('judul,deskripsi,gambar,created_at');
		$query = $this->db->get('berita');
		return $query->num_rows();
	}
	public function getPengurus()
	{
		$query = $this->db->get('pengurus');
		return $query->result();
	}
	public function login()
	{
		$cek = $this->db->get_where('admin',array('username'=>$this->input->post('username'), 'password'=>md5($this->input->post('password'))));
		if ($cek->num_rows() > 0) {
			$row = $cek->row();
			$sessi = array(
				'nama'=>$row->username,
			);
			$this->session->set_userdata($sessi);
			redirect('admincontroller');
		}else{
			redirect('main');
		}
	}	
	public function kirimpesan()
	{
		$query = $this->db->insert('kontak', array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'subjek'=>$this->input->post('subject'),
			'pesan'=>$this->input->post('pesan'),
			'created_at'=>date('Y-m-d H:i:s')
		));
		if ($query==true) {
			redirect('/');
		}else{
			redirect('/');
		}
	}

}

/* End of file First_model.php */
/* Location: ./application/models/First_model.php */