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

		if ($data['profil']['gambar'] == '') {
			$data['profil']['gambar'] = $data['profil']['level'] == 0 ? 'man.png' : 'student.png';						
		}

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
			$session = $this->session->userdata();
			$session['nama_user'] 	= $this->input->post('nama');

			$this->session->set_userdata($session);
			$this->session->set_userdata('user', $session);
			$this->session->set_flashdata('success', 'diubah');
			redirect('profil', 'refresh');
		} else {
			$this->index();
		}
	}

	public function ubah_gambar_action()
	{
		$this->delImage('users', $this->session->userdata('id_user'));
		$filename = $this->_upload('gambar', 'profil', 'user');
		$this->db->set('gambar', $filename);
		$this->db->where('id_users', $this->session->userdata('id_user'));
		$this->db->update('users');

		$session = $this->session->userdata();
		$session['gbr_user'] 	= $filename;
		$session['gambar'] 		= $filename;

		$this->session->set_userdata($session);
		$this->session->set_userdata('user', $session);

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

	function delImage($table, $id, $column = 'gambar')
	{
		$gambar_lama = $this->db->get_where($table, ['id_'.$table => $id])->row_array()[$column];
		$path = 'assets/img/' . $table . '/' . $gambar_lama;
		if($gambar_lama != ''){
			if (file_exists(FCPATH . $path)) {
				unlink(FCPATH . $path);
			}
		}
	}

	function _upload($name, $url, $path)
	{
		$config['upload_path'] = './assets/img/' . $path . '/';
		$config['allowed_types'] = 'pdf|jpg|png|jpeg';
		$config['max_size']  = '4048';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($name)){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect($url,'refresh');
		}
		return $this->upload->data('file_name');
	}

}

/* End of file profil.php */
/* Location: ./application/modules/profil/controllers/profil.php */?>