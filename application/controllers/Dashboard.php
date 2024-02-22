<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('Tahun_ajaran_model');
		$this->load->model('Pengumuman_pendaftaran_model');
		$this->load->model('Calon_siswa_model');
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
		$sum_users = $this->Users_model->total_rows();
		$sum_tahun_ajaran = $this->Tahun_ajaran_model->total_rows();
		$sum_geombang_pendaftaran = $this->Pengumuman_pendaftaran_model->total_rows();
		$sum_siswa_mendaftar = $this->Calon_siswa_model->total_rows();
		
		$result = [
			'sum_all_users' => $sum_users,
			'sum_tahun_ajaran' => $sum_tahun_ajaran,
			'sum_geombang_pendaftaran' => $sum_geombang_pendaftaran,
			'sum_siswa_mendaftar' => $sum_siswa_mendaftar,
		];

		echo json_encode($result);
	}

}
