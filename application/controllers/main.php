<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Selamat Datang di Company Profile PKK - Home';
		$data['link_view'] = 'pages/home';
		$this->load->view('utama',$data);
	}
	public function login()
	{
		$data['title'] = 'Login PKK';
		$this->load->view('pages/login',$data);
	}
	public function page_not_found()
	{
		$data['title'] = "404 PAGE NOT FOUND";
		$this->load->view('not_found',$data);
	}
}