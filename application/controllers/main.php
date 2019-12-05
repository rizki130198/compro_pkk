<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Selamat Datang di Company Profile PKK - Home';
		$data['link_view'] = 'pages/home';
		$data['home'] = $this->first_model->getHome();
		$data['post'] = $this->first_model->getPost();
		$data['menu'] = $this->first_model->getMenu();
		$data['submenu'] = $this->first_model->getSubmenu();
		$data['alamat'] = $this->first_model->getAlamat();
		$data['tentang'] = $this->first_model->getTentang();
		$data['pengurus'] = $this->first_model->getPengurus();

		$this->load->view('utama',$data);
	}
	public function detail_b()
	{
		$id = $this->uri->segment(3);
		$data['title'] = 'Detail Berita';
		$data['link_view'] = 'pages/berita_detail';		
		$data['home'] = $this->first_model->getHome();
		$data['post'] = $this->first_model->getPost();
		$data['alamat'] = $this->first_model->getAlamat();
		$data['tentang'] = $this->first_model->getTentang();
		$data['row'] = $this->db->get_where('berita',array('idberita'=>$id))->row();
		$this->load->view('utama',$data);
	}
	public function berita()
	{
		$data['title'] = 'Semua Berita PKK';
		$data['link_view'] = 'pages/berita';
		$data['alamat'] = $this->first_model->getAlamat();
		$data['tentang'] = $this->first_model->getTentang();
		$this->load->view('utama',$data);
	}
	public function learn_more()
	{
		$data['title'] = 'Pelajari Lebih Lanjut';
		$data['link_view'] = 'pages/learn_more';
		$data['alamat'] = $this->first_model->getAlamat();
		$data['tentang'] = $this->first_model->getTentang();
		$this->load->view('utama',$data);
	}
	public function unit_usaha()
	{
		$data['title'] = 'Unit Usaha dan Anak Perusahaan';
		$data['link_view'] = 'pages/unit_usaha';
		$data['alamat'] = $this->first_model->getAlamat();
		$data['tentang'] = $this->first_model->getTentang();
		$this->load->view('utama',$data);
	}
	public function tentang()
	{
		$data['title'] = 'Tentang PKK';
		$data['link_view'] = 'pages/tentang';
		$data['alamat'] = $this->first_model->getAlamat();
		$data['tentang'] = $this->first_model->getTentang();
		$this->load->view('utama',$data);
	}
	public function login()
	{
		$data['title'] = 'Login PKK';
		$this->load->view('pages/login',$data);
	}
	public function ajaxPaging($rownum = 0)
	{
		$this->load->library('pagination');

		$config['use_page_numbers'] = TRUE;
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';

		$config['base_url'] = base_url('main/ajaxPaging');
		$config['total_rows'] = $this->first_model->getPagingBerita();
		$config['per_page'] = 6;

		$this->pagination->initialize($config);
		$data['row'] = $rownum;
		$data['result'] = $this->first_model->getPostPaging($config['per_page'],$rownum);
		$data['pagination'] =  $this->pagination->create_links();

		echo json_encode($data);
		
	}
	public function page_not_found()
	{
		$data['title'] = "404 PAGE NOT FOUND";
		$this->load->view('not_found',$data);
	}
	public function actlogin()
	{
		$this->first_model->login();
	}	
	public function sendmessage()
	{
		$this->first_model->kirimpesan();
	}
}