<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Users_model');		
	}

	public function index()
	{
		$data = [
			'judul' => 'Home',
			'user' => $this->session->userdata('user'),
			'foto' => [],
			'video' => [],
			'berita' => []
		];		
		$this->load->view('templates/home_header');
        $this->load->view('templates/home_navbar');
        $this->load->view('pages/index', $data);
        $this->load->view('templates/home_footer',$data);
	}
	
	public function struktur()
	{
		$data = [
			'judul' => 'Struktur Organisasi',
			'user' => $this->session->userdata('user')
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/struktur');		
		$this->load->view('templates/home_footer');		
	}

	public function visi_misi()
	{
		$data = [
			'judul' => 'Contact',
			'user' => $this->session->userdata('user')
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/visimisi');		
		$this->load->view('templates/home_footer');				
	}

	public function contact()
	{
		$data = [
			'judul' => 'Contact',
			'user' => $this->session->userdata('user')
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/contact');		
		$this->load->view('templates/home_footer');				
	}	

	function generateTrxID($length=6) {
        $result           = '';
        $characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++ ) {
            $result .= $characters[rand(0, $charactersLength-1)];
        }
        return $result.date('YmdHis');
    }
}
?>