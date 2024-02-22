<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// cek_login();
		$this->load->model('Users_model');
	}

	public function index()
	{
		$data['judul'] = "Profil Saya";
		$data['user'] = $this->session->userdata('user');
		$data['profil'] = $this->db->get_where('users', ['id_users' => $this->session->userdata('id_user')])->row_array();

		$this->load->view('templates/header', $data, FALSE);
		$this->load->view('profil/index', $data, FALSE);
		$this->load->view('templates/footer', $data, FALSE);
	}

	public function ubah_profil_action()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama', 'nama user', 'required');
		$valid->set_rules('id_users', 'ID user', 'required');
		$valid->set_rules('username', 'username', 'required');

		if ($valid->run()) {
			$this->Users_model->ubah_profil($this->input->post("id_users", true), $this->input->post());
			$this->session->set_flashdata('success', 'diubah');
			redirect('profil', 'refresh');
		} else {
			$this->index();
		}
	}

	public function ubah_gambar_action()
	{
		delImage('user', $this->session->userdata('id_user'));
		$this->db->set('gambar', _upload('gambar', 'profil', 'user'));
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->update('user');

		$this->session->set_flashdata('success', 'diubah');
		redirect('profil', 'refresh');
	}

	public function ubah_password_action()
	{
		$valid = $this->form_validation;

		$valid->set_rules('pw_sekarang', 'password sekarang', 'required');
		$valid->set_rules('pw1', 'password baru', 'required|matches[pw2]');
		$valid->set_rules('pw2', 'konfirmasi password baru', 'required|matches[pw1]');

		if ($valid->run()) {

			$post = $this->input->post();

			// $hash = $this->users_model->get_by_id($this->session->userdata('id_user'))->password;
			$non_hash = $this->Users_model->get_by_id($this->session->userdata('id_user'))->password;

			// if (password_verify($post['pw_sekarang'], $hash)) {
			if ($post['pw_sekarang'] == $non_hash) {

				// $this->db->set('password', password_hash($post['pw1'], PASSWORD_DEFAULT));
				$this->db->set('password', $post['pw1']); // non hash
				$this->db->where('id_users', $this->session->userdata('id_user'));
				$this->db->update('users');

				$this->session->set_flashdata('success', 'diubah');
				redirect('profil', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Password sekarang salah');
				redirect('profil', 'refresh');
			}

		} else {
			$this->index();
		}
	}

}

/* End of file profil.php */
/* Location: ./application/modules/profil/controllers/profil.php */?>