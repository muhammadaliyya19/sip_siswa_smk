<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Users_model');		
		$this->load->model('Visi_misi_model');
		$this->load->model('Berita_model');		
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
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('templates/home_footer',$data);
	}
	
	public function struktur()
	{
		$data = [
			'judul' => 'Struktur Organisasi',
			'user' => $this->session->userdata('user'),
			'foto' => []
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/struktur');		
		$this->load->view('templates/home_footer', $data);		
	}

	public function visi_misi()
	{
		$row = $this->Visi_misi_model->get_all();
		$visi = str_replace('\n', '<br>', $row[0]->visi);
		$misi = str_replace('\n', '<br>', $row[0]->misi);
		
		$data = [
			'judul' => 'Visi Misi',
			'user' => $this->session->userdata('user'),
			'foto' => [],
			'visimisi' => [
				'visi' => str_replace('\n', '<br>', $visi),
				'misi' => str_replace('\n', '<br>', $misi),
			]
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/visimisi');		
		$this->load->view('templates/home_footer', $data);				
	}

	public function contact()
	{
		$data = [
			'judul' => 'Contact',
			'user' => $this->session->userdata('user'),
			'foto' => []
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/contact');		
		$this->load->view('templates/home_footer', $data);				
	}	

	public function about()
	{
		$data = [
			'judul' => 'Tentang Kami',
			'user' => $this->session->userdata('user'),
			'foto' => []
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/about');		
		$this->load->view('templates/home_footer', $data);				
	}
	
	public function berita()
	{
		$row = $this->Berita_model->get_all_array();
		// print_r($row); die;
		$data = [
			'judul' => 'Berita',
			'user' => $this->session->userdata('user'),
			'foto' => [],
			'berita' => $row
		];
		$this->load->view('templates/home_header', $data);		
        $this->load->view('templates/home_navbar');
		$this->load->view('pages/berita');		
		$this->load->view('templates/home_footer', $data);				
	}

	public function baca($slug)
    {
        $data['this_berita'] 	= $this->Berita_model->getBeritaBySlug($slug);
        $data['prev_berita'] 	= $this->Berita_model->getBeritaPrev($data['this_berita']['id']);
        $data['next_berita'] 	= $this->Berita_model->getBeritaNext($data['this_berita']['id']);
        $data['random_berita'] 	= $this->Berita_model->getBeritaRandom();
		$data['user'] 			= $this->session->userdata('user');
		$this->load->view('templates/home_header', $data);
        $this->load->view('templates/home_navbar', $data);
        $this->load->view('pages/baca_berita', $data);
        $this->load->view('templates/home_footer',$data);
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