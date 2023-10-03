<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
	
	public function index()
	{
		$data = [
			'judul' => 'Dashboard',
			'user' => $this->session->userdata('user')
		];
		$this->load->view('templates/header', $data, FALSE);
		$this->load->view('admin/dashboard', $data, FALSE);
		$this->load->view('templates/footer', $data, FALSE);
	}

	public function getDashboardData()
	{
        // $sum_produks = $this->Produk_model->total_rows();
        $sum_users = $this->Users_model->total_rows();
        // $sum_orders = $this->Pesanan_model->total_rows();
        // $sum_order_finish = $this->Pesanan_model->total_orderFinish_rows();

		$result = [
			'sum_admin_user' => $sum_users
			// 'sum_orders' => $sum_orders,
			// 'sum_order_finished' => $sum_order_finish,
			// 'products' => $sum_produks
		];
		
		echo json_encode($result);
	}

}
