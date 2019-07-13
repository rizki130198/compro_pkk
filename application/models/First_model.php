<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_model extends CI_Model {

	public function getHome()
	{
		$this->db->select('deskripsi,gambar');
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
		$this->db->select('judul,deskripsi,gambar,created_at');
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
	public function getPagingBerita()
	{
		$this->db->select('judul,deskripsi,gambar,created_at');
		$query = $this->db->get('berita');
		return $query->num_rows();
	}
	public function login()
	{
		# code...
	}

}

/* End of file First_model.php */
/* Location: ./application/models/First_model.php */