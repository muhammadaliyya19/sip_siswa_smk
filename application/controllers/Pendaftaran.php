<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Calon_siswa_model');
		$this->load->model('Pengumuman_pendaftaran_model');
        $this->load->model('Tahun_ajaran_model');
        $this->load->model('Nilai_ijazah_model');
		$this->load->library('form_validation');
		$this->load->library('datatables');
		$this->load->model('Users_model');
	}

	public function index()
	{
		$data = array(
			'judul' => 'Data Pendaftaran',
			'user' => $this->session->userdata('user'),
		);

		$this->load->view('templates/header', $data);
		$this->load->view('calon_siswa/calon_siswa_list', $data);
		$this->load->view('templates/footer', $data);
	}

	public function mine()
	{
		$data = array(
			'judul' => 'Pendaftaran Saya',
			'user' => $this->session->userdata('user'),
		);

		$this->load->view('templates/header', $data);
		$this->load->view('calon_siswa/pendaftaran_calon_siswa_list', $data);
		$this->load->view('templates/footer', $data);
	}

	public function json()
	{
		header('Content-Type: application/json');
		echo $this->Calon_siswa_model->json();
	}

	public function read($id)
	{
		$row = $this->Calon_siswa_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id' => $row->id,
				'nama' => $row->nama,
				'tempat_lahir' => $row->tempat_lahir,
				'tanggal_lahir' => $row->tanggal_lahir,
				'jenis_kelamin' => $row->jenis_kelamin,
				'agama' => $row->agama,
				'anak_ke' => $row->anak_ke,
				'jumlah_saudara' => $row->jumlah_saudara,
				'no_hp_siswa' => $row->no_hp_siswa,
				'alamat_siswa' => $row->alamat_siswa,
				'berat_badan' => $row->berat_badan,
				'tinggi_badan' => $row->tinggi_badan,
				'gol_darah' => $row->gol_darah,
				'asal_sekolah' => $row->asal_sekolah,
				'alamat_sekolah' => $row->alamat_sekolah,
				'nama_ayah' => $row->nama_ayah,
				'nama_ibu' => $row->nama_ibu,
				'alamat_orang_tua' => $row->alamat_orang_tua,
				'no_hp_orang_tua' => $row->no_hp_orang_tua,
				'penghasilan_orang_tua' => $row->penghasilan_orang_tua,
				'tanggungan_anak' => $row->tanggungan_anak,
				'id_tahun_ajaran' => $row->id_tahun_ajaran,
				'id_user' => $row->id_user,
				'status_lolos' => $row->status_lolos,
				'nisn' => $row->nisn,
			);

			$data['judul'] = 'Detail Pendaftaran';
			$data['user'] = $this->session->userdata('user');

			$this->load->view('templates/header', $data);
			$this->load->view('calon_siswa/calon_siswa_read', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$this->session->set_flashdata('error', 'Data tidak ditemukan');
			redirect(site_url('calon_siswa'));
		}
	}

	public function create()
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('pendaftaran/create_action'),
			'id' => set_value('id'),
			'nama' => set_value('nama'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'agama' => set_value('agama'),
			'anak_ke' => set_value('anak_ke'),
			'jumlah_saudara' => set_value('jumlah_saudara'),
			'no_hp_siswa' => set_value('no_hp_siswa'),
			'alamat_siswa' => set_value('alamat_siswa'),
			'berat_badan' => set_value('berat_badan'),
			'tinggi_badan' => set_value('tinggi_badan'),
			'gol_darah' => set_value('gol_darah'),
			'asal_sekolah' => set_value('asal_sekolah'),
			'alamat_sekolah' => set_value('alamat_sekolah'),
			'nama_ayah' => set_value('nama_ayah'),
			'nama_ibu' => set_value('nama_ibu'),
			'alamat_orang_tua' => set_value('alamat_orang_tua'),
			'no_hp_orang_tua' => set_value('no_hp_orang_tua'),
			'penghasilan_orang_tua' => set_value('penghasilan_orang_tua'),
			'tanggungan_anak' => set_value('tanggungan_anak'),
			'id_tahun_ajaran' => set_value('id_tahun_ajaran'),
			'id_user' => set_value('id_user'),
			'status_lolos' => set_value('status_lolos'),
			'nisn' => set_value('nisn'),

			// for nilai ijazah
			'nilai_bhs_indo' => set_value('nilai_bhs_indo'),
            'nilai_bhs_inggris' => set_value('nilai_bhs_inggris'),
            'nilai_ipa' => set_value('nilai_ipa'),
            'nilai_ips' => set_value('nilai_ips'),
            'nilai_mtk' => set_value('nilai_mtk'),
            'nilai_akhir' => set_value('nilai_akhir'),
            'keterangan' => set_value('keterangan'),
		);

        $tahun_ajarans = $this->Tahun_ajaran_model->get_all();
		$data['judul'] = 'Tambah Pendaftaran';
		$data['user'] = $this->session->userdata('user');
        $data['tahun_ajarans'] = $tahun_ajarans;
		// var_dump($data['user']); die;

		$this->load->view('templates/header', $data);
		$this->load->view('calon_siswa/calon_siswa_form_admin', $data);
		$this->load->view('templates/footer', $data);
	}

	public function apply($id)
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('pendaftaran/create_action'),
			'id' => set_value('id'),
			'nama' => set_value('nama'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'agama' => set_value('agama'),
			'anak_ke' => set_value('anak_ke'),
			'jumlah_saudara' => set_value('jumlah_saudara'),
			'no_hp_siswa' => set_value('no_hp_siswa'),
			'alamat_siswa' => set_value('alamat_siswa'),
			'asal_sekolah' => set_value('asal_sekolah'),
			'alamat_sekolah' => set_value('alamat_sekolah'),
			'nama_ayah' => set_value('nama_ayah'),
			'nama_ibu' => set_value('nama_ibu'),
			'alamat_orang_tua' => set_value('alamat_orang_tua'),
			'no_hp_orang_tua' => set_value('no_hp_orang_tua'),
			'id_tahun_ajaran' => set_value('id_tahun_ajaran'),
			'id_user' => set_value('id_user'),
			'status_lolos' => set_value('status_lolos'),
			'nisn' => set_value('nisn'),

			// for nilai ijazah
			'nilai_bhs_indo' => set_value('nilai_bhs_indo'),
            'nilai_bhs_inggris' => set_value('nilai_bhs_inggris'),
            'nilai_ipa' => set_value('nilai_ipa'),
            'nilai_ips' => set_value('nilai_ips'),
            'nilai_mtk' => set_value('nilai_mtk'),
            'nilai_akhir' => set_value('nilai_akhir'),
            'keterangan' => set_value('keterangan'),

			// unused column, dihapus
			// 'berat_badan' => set_value('berat_badan'),
			// 'tinggi_badan' => set_value('tinggi_badan'),
			// 'gol_darah' => set_value('gol_darah'),
			// 'penghasilan_orang_tua' => set_value('penghasilan_orang_tua'),
			// 'tanggungan_anak' => set_value('tanggungan_anak'),
		);

		$data['this_pengumuman'] = $this->Pengumuman_pendaftaran_model->get_by_id($id);
		$data['judul'] = 'Pendaftaran Calon Siswa Baru';
		$data['user'] = $this->session->userdata('user');
		$this->load->view('templates/header', $data);
		$this->load->view('calon_siswa/calon_siswa_form', $data);
		$this->load->view('templates/footer', $data);
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			// upload berkas kelengkapan
			$nama_file = $this->do_upload();

			// prepare data calon siswa
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
				'agama' => $this->input->post('agama', TRUE),
				'anak_ke' => $this->input->post('anak_ke', TRUE),
				'jumlah_saudara' => $this->input->post('jumlah_saudara', TRUE),
				'no_hp_siswa' => $this->input->post('no_hp_siswa', TRUE),
				'alamat_siswa' => $this->input->post('alamat_siswa', TRUE),
				'asal_sekolah' => $this->input->post('asal_sekolah', TRUE),
				'alamat_sekolah' => $this->input->post('alamat_sekolah', TRUE),
				'nama_ayah' => $this->input->post('nama_ayah', TRUE),
				'nama_ibu' => $this->input->post('nama_ibu', TRUE),
				'alamat_orang_tua' => $this->input->post('alamat_orang_tua', TRUE),
				'no_hp_orang_tua' => $this->input->post('no_hp_orang_tua', TRUE),
				'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran', TRUE),
				'id_user' => $this->input->post('id_user', TRUE),
				'status_lolos' => $this->input->post('status_lolos', TRUE),
				'nisn' => $this->input->post('nisn', TRUE),
				'berkas' => $nama_file,
				// 'berat_badan' => $this->input->post('berat_badan',TRUE),
				// 'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
				// 'gol_darah' => $this->input->post('gol_darah',TRUE),
				// 'penghasilan_orang_tua' => $this->input->post('penghasilan_orang_tua',TRUE),
				// 'tanggungan_anak' => $this->input->post('tanggungan_anak',TRUE),
			);

			// insert calon siswa
			$this->Calon_siswa_model->insert($data);

			// insert nilai ijazah
			$nilai_ijazah = array(
				'id_user' => $this->input->post('id_user', TRUE),
				'nisn' => $this->input->post('nisn', TRUE),
				'nilai_bhs_indo' => $this->input->post('nilai_bhs_indo', TRUE),
                'nilai_bhs_inggris' => $this->input->post('nilai_bhs_inggris', TRUE),
                'nilai_ipa' => $this->input->post('nilai_ipa', TRUE),
                'nilai_ips' => $this->input->post('nilai_ips', TRUE),
                'nilai_mtk' => $this->input->post('nilai_mtk', TRUE),
                'nilai_akhir' => $this->input->post('nilai_akhir', TRUE),
                'keterangan' => $this->input->post('keterangan', TRUE),
			);
            $this->Nilai_ijazah_model->insert($nilai_ijazah);

			$this->session->set_flashdata('success', 'Ditambah');
			redirect(site_url('pendaftaran'));
		}
	}

	public function update($id)
	{
		$row = $this->Calon_siswa_model->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('calon_siswa/update_action'),
				'id' => set_value('id', $row->id),
				'nama' => set_value('nama', $row->nama),
				'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
				'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
				'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
				'agama' => set_value('agama', $row->agama),
				'anak_ke' => set_value('anak_ke', $row->anak_ke),
				'jumlah_saudara' => set_value('jumlah_saudara', $row->jumlah_saudara),
				'no_hp_siswa' => set_value('no_hp_siswa', $row->no_hp_siswa),
				'alamat_siswa' => set_value('alamat_siswa', $row->alamat_siswa),
				'asal_sekolah' => set_value('asal_sekolah', $row->asal_sekolah),
				'alamat_sekolah' => set_value('alamat_sekolah', $row->alamat_sekolah),
				'nama_ayah' => set_value('nama_ayah', $row->nama_ayah),
				'nama_ibu' => set_value('nama_ibu', $row->nama_ibu),
				'alamat_orang_tua' => set_value('alamat_orang_tua', $row->alamat_orang_tua),
				'no_hp_orang_tua' => set_value('no_hp_orang_tua', $row->no_hp_orang_tua),
				'id_tahun_ajaran' => set_value('id_tahun_ajaran', $row->id_tahun_ajaran),
				'id_user' => set_value('id_user', $row->id_user),
				'status_lolos' => set_value('status_lolos', $row->status_lolos),
				'nisn' => set_value('nisn', $row->nisn),
				// 'berat_badan' => set_value('berat_badan', $row->berat_badan),
				// 'tinggi_badan' => set_value('tinggi_badan', $row->tinggi_badan),
				// 'gol_darah' => set_value('gol_darah', $row->gol_darah),
				// 'penghasilan_orang_tua' => set_value('penghasilan_orang_tua', $row->penghasilan_orang_tua),
				// 'tanggungan_anak' => set_value('tanggungan_anak', $row->tanggungan_anak),
			);

			$data['judul'] = 'Ubah Pendaftaran';
			$data['user'] = $this->session->userdata('user');

			$this->load->view('templates/header', $data);
			$this->load->view('calon_siswa/calon_siswa_form_admin', $data);
			$this->load->view('templates/footer', $data);

		} else {
			$this->session->set_flashdata('error', 'Data tidak ditemukan');
			redirect(site_url('calon_siswa'));
		}
	}

	public function update_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id', TRUE));
		} else {
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
				'agama' => $this->input->post('agama', TRUE),
				'anak_ke' => $this->input->post('anak_ke', TRUE),
				'jumlah_saudara' => $this->input->post('jumlah_saudara', TRUE),
				'no_hp_siswa' => $this->input->post('no_hp_siswa', TRUE),
				'alamat_siswa' => $this->input->post('alamat_siswa', TRUE),
				'asal_sekolah' => $this->input->post('asal_sekolah', TRUE),
				'alamat_sekolah' => $this->input->post('alamat_sekolah', TRUE),
				'nama_ayah' => $this->input->post('nama_ayah', TRUE),
				'nama_ibu' => $this->input->post('nama_ibu', TRUE),
				'alamat_orang_tua' => $this->input->post('alamat_orang_tua', TRUE),
				'no_hp_orang_tua' => $this->input->post('no_hp_orang_tua', TRUE),
				'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran', TRUE),
				'id_user' => $this->input->post('id_user', TRUE),
				'status_lolos' => $this->input->post('status_lolos', TRUE),
				'nisn' => $this->input->post('nisn', TRUE),
				// 'berat_badan' => $this->input->post('berat_badan',TRUE),
				// 'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
				// 'gol_darah' => $this->input->post('gol_darah',TRUE),
				// 'penghasilan_orang_tua' => $this->input->post('penghasilan_orang_tua',TRUE),
				// 'tanggungan_anak' => $this->input->post('tanggungan_anak',TRUE),
			);

			$this->Calon_siswa_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('success', 'Diubah');
			redirect(site_url('calon_siswa'));
		}
	}

	public function verify_pendaftaran()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id', TRUE));
		} else {
			$data = array(
				'status_lolos' => $this->input->post('status_lolos', TRUE),
			);

			$this->Calon_siswa_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('success', 'Diubah');
			redirect(site_url('calon_siswa'));
		}
	}

	public function delete($id)
	{
		$row = $this->Calon_siswa_model->get_by_id($id);

		if ($row) {
			$this->Calon_siswa_model->delete($id);
			$this->session->set_flashdata('success', 'Dihapus');
			redirect(site_url('calon_siswa'));
		} else {
			$this->session->set_flashdata('error', 'Data tidak ditemukan');
			redirect(site_url('calon_siswa'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'agama', 'trim|required');
		$this->form_validation->set_rules('anak_ke', 'anak ke', 'trim|required|numeric');
		$this->form_validation->set_rules('jumlah_saudara', 'jumlah saudara', 'trim|required|numeric');
		$this->form_validation->set_rules('no_hp_siswa', 'no hp siswa', 'trim|required');
		$this->form_validation->set_rules('alamat_siswa', 'alamat siswa', 'trim|required');
		$this->form_validation->set_rules('asal_sekolah', 'asal sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat_sekolah', 'alamat sekolah', 'trim|required');
		$this->form_validation->set_rules('nama_ayah', 'nama ayah', 'trim|required');
		$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'trim|required');
		$this->form_validation->set_rules('alamat_orang_tua', 'alamat orang tua', 'trim|required');
		$this->form_validation->set_rules('no_hp_orang_tua', 'no hp orang tua', 'trim|required');
		$this->form_validation->set_rules('id_tahun_ajaran', 'id tahun ajaran', 'trim|required|numeric');
		$this->form_validation->set_rules('id_user', 'id user', 'trim|required|numeric');
		$this->form_validation->set_rules('status_lolos', 'status lolos', 'trim|required|numeric');
		$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
		// $this->form_validation->set_rules('berat_badan', 'berat badan', 'trim|required|numeric');
		// $this->form_validation->set_rules('tinggi_badan', 'tinggi badan', 'trim|required|numeric');
		// $this->form_validation->set_rules('gol_darah', 'gol darah', 'trim|required');
		// $this->form_validation->set_rules('penghasilan_orang_tua', 'penghasilan orang tua', 'trim|required|numeric');
		// $this->form_validation->set_rules('tanggungan_anak', 'tanggungan anak', 'trim|required|numeric');

		// validasi nilai ijazah
		$this->form_validation->set_rules('nilai_bhs_indo', 'nilai bhs indo', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_bhs_inggris', 'nilai bhs inggris', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_ipa', 'nilai ipa', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_ips', 'nilai ips', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_mtk', 'nilai mtk', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_akhir', 'nilai akhir', 'trim|required|numeric');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function excel()
	{
		$this->load->helper('exportexcel');
		$namaFile = "calon_siswa.xls";
		$judul = "calon_siswa";
		$tablehead = 0;
		$tablebody = 1;
		$nourut = 1;
		//penulisan header
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=" . $namaFile . "");
		header("Content-Transfer-Encoding: binary ");

		xlsBOF();

		$kolomhead = 0;
		xlsWriteLabel($tablehead, $kolomhead++, "No");
		xlsWriteLabel($tablehead, $kolomhead++, "Nama");
		xlsWriteLabel($tablehead, $kolomhead++, "Tempat Lahir");
		xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Lahir");
		xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
		xlsWriteLabel($tablehead, $kolomhead++, "Agama");
		xlsWriteLabel($tablehead, $kolomhead++, "Anak Ke");
		xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Saudara");
		xlsWriteLabel($tablehead, $kolomhead++, "No Hp Siswa");
		xlsWriteLabel($tablehead, $kolomhead++, "Alamat Siswa");
		xlsWriteLabel($tablehead, $kolomhead++, "Asal Sekolah");
		xlsWriteLabel($tablehead, $kolomhead++, "Alamat Sekolah");
		xlsWriteLabel($tablehead, $kolomhead++, "Nama Ayah");
		xlsWriteLabel($tablehead, $kolomhead++, "Nama Ibu");
		xlsWriteLabel($tablehead, $kolomhead++, "Alamat Orang Tua");
		xlsWriteLabel($tablehead, $kolomhead++, "No Hp Orang Tua");
		xlsWriteLabel($tablehead, $kolomhead++, "Id Tahun Ajaran");
		xlsWriteLabel($tablehead, $kolomhead++, "Id User");
		xlsWriteLabel($tablehead, $kolomhead++, "Status Lolos");
		xlsWriteLabel($tablehead, $kolomhead++, "Nisn");
		// xlsWriteLabel($tablehead, $kolomhead++, "Berat Badan");
		// xlsWriteLabel($tablehead, $kolomhead++, "Tinggi Badan");
		// xlsWriteLabel($tablehead, $kolomhead++, "Gol Darah");
		// xlsWriteLabel($tablehead, $kolomhead++, "Penghasilan Orang Tua");
		// xlsWriteLabel($tablehead, $kolomhead++, "Tanggungan Anak");

		foreach ($this->Calon_siswa_model->get_all() as $data) {
			$kolombody = 0;

			//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
			xlsWriteNumber($tablebody, $kolombody++, $nourut);
			xlsWriteLabel($tablebody, $kolombody++, $data->nama);
			xlsWriteLabel($tablebody, $kolombody++, $data->tempat_lahir);
			xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_lahir);
			xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
			xlsWriteLabel($tablebody, $kolombody++, $data->agama);
			xlsWriteNumber($tablebody, $kolombody++, $data->anak_ke);
			xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_saudara);
			xlsWriteLabel($tablebody, $kolombody++, $data->no_hp_siswa);
			xlsWriteLabel($tablebody, $kolombody++, $data->alamat_siswa);
			xlsWriteLabel($tablebody, $kolombody++, $data->asal_sekolah);
			xlsWriteLabel($tablebody, $kolombody++, $data->alamat_sekolah);
			xlsWriteLabel($tablebody, $kolombody++, $data->nama_ayah);
			xlsWriteLabel($tablebody, $kolombody++, $data->nama_ibu);
			xlsWriteLabel($tablebody, $kolombody++, $data->alamat_orang_tua);
			xlsWriteLabel($tablebody, $kolombody++, $data->no_hp_orang_tua);
			xlsWriteNumber($tablebody, $kolombody++, $data->id_tahun_ajaran);
			xlsWriteNumber($tablebody, $kolombody++, $data->id_user);
			xlsWriteNumber($tablebody, $kolombody++, $data->status_lolos);
			xlsWriteLabel($tablebody, $kolombody++, $data->nisn);
			// xlsWriteNumber($tablebody, $kolombody++, $data->berat_badan);
			// xlsWriteNumber($tablebody, $kolombody++, $data->tinggi_badan);
			// xlsWriteLabel($tablebody, $kolombody++, $data->gol_darah);
			// xlsWriteNumber($tablebody, $kolombody++, $data->penghasilan_orang_tua);
			// xlsWriteNumber($tablebody, $kolombody++, $data->tanggungan_anak);

			$tablebody++;
			$nourut++;
		}

		xlsEOF();
		exit();
	}

	public function do_upload()
    {
        $this->load->library('upload');
		$path = $_FILES['berkas_persyaratan']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
        $files = $_FILES['berkas_persyaratan'];
        $config = $this->set_upload_options();
        $config['file_name'] = time() . '-' . date("Y-m-d-his") . '.'. $ext;
        $this->upload->initialize($config);
        $res = $this->upload->do_upload('berkas_persyaratan');
        echo $res . "Berkas sukses diupload<br><br>";
        return $config['file_name'];
    }

    private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './assets/berkas_daftar/';
        $config['allowed_types'] = 'zip|7z|rar|tar|gz';
        $config['max_size'] = '1200000';
        $config['overwrite'] = FALSE;
        return $config;
    }

}

/* End of file Calon_siswa.php */
/* Location: ./application/controllers/Calon_siswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:47:02 */
/* http://harviacode.com */