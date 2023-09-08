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
	
	public function about()
	{
		$data = [
			'judul' => 'About',
			'user' => $this->session->userdata('user')
		];
		$this->load->view('templatess/user_header', $data);		
		$this->load->view('pages/about');		
		$this->load->view('templatess/user_footer');		
	}

	public function products($id=null)
	{
		if ($id == null) {
			$produk = $this->Produk_model->get_avail_prod();
			$data = [
				'judul' 	=> 'Products',
				'produk' 	=> $produk,
				'user' 		=> $this->session->userdata('user'),
				'dt_filter' => isset($_GET) ? $_GET : null
			];
		}else{
			$row = $this->Produk_model->get_by_id($id);
			if ($row) {
				$foto_detail = $this->Produk_model->get_detail_by_produk($row->id);
				$data = array(
					'id' => $row->id,
					'nama' => $row->nama,
					'harga' => $row->harga,
					'foto' => $row->foto,
					'stok' => $row->stok,
					'keterangan' => $row->keterangan,
					'created_at' => $row->created_at,
					'modified_at' => $row->modified_at,
					'judul' => 'Detail Produk',
					'method' => 'read',
					'detail' => $foto_detail,
                	'kode_pesanan' => $this->generateTrxID(),
					'user' => $this->session->userdata('user')
				);
			}
		}
		$this->load->view('templatess/user_header', $data);		
		if ($id == null) {
			$this->load->view('pages/products', $data);		
		} else {
			$this->load->view('pages/product_detail', $data);		
		}
		$this->load->view('templatess/user_footer');		
	}

	public function contact()
	{
		$data = [
			'judul' => 'Contact',
			'user' => $this->session->userdata('user')
		];
		$this->load->view('templatess/user_header', $data);		
		$this->load->view('pages/contact');		
		$this->load->view('templatess/user_footer');				
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