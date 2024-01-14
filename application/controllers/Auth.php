<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('Calon_siswa_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		redirect('auth/login', 'refresh');
	}

	public function login()
	{
		if ($this->session->userdata('login')) {
			redirect('dashboard', 'refresh');
		}

		$valid = $this->form_validation;

		$valid->set_rules('username', 'username', 'required');
		$valid->set_rules('password', 'password', 'required');
		$valid->set_message('required', 'Kolom wajib diisi');

		if ($valid->run()) {
			$post = $this->input->post();

			$user = $this->db->get_where('users', ['username' => $post['username']])->row_array();

			// var_dump($user); die;

			if ($user) {

				// if (password_verify($post['password'], $user['password'])) {
				if ($post['password'] == $user['password']) {
					$gambar = $user['level'] == 0 ? 'man.png' : 'student.png';
					$session = [
						'login' => true,
						'id_user' => $user['id'],
						'nama_user' => $user['nama'],
						'gbr_user' => $gambar,
						'level' => $user['level'] == 0 ? 'Administrator' : 'Calon Siswa'
					];

					$this->session->set_userdata($session);
					$this->session->set_userdata('user', $session);
					if ($user['level'] != "1") {
						// echo "anda adalah admin";
						redirect('dashboard', 'refresh');
					} else {
						// echo "anda bukan admin";
						redirect('dashboard', 'refresh');
					}

				} else {
					$this->session->set_flashdata('error', 'Password anda salah');
					redirect('auth', 'refresh');
				}

			} else {
				$this->session->set_flashdata('error', 'Email tidak ditemukan');
				redirect('auth', 'refresh');
			}
		}

		$this->load->view('auth/login');
	}

	public function registration()
	{
		if ($this->session->userdata('login')) {
			redirect('dashboard', 'refresh');
		}

		$valid = $this->form_validation;

		$valid->set_rules('email', 'email', 'required');
		$valid->set_rules('nama_lengkap', 'nama lengkap', 'required');
		$valid->set_rules('username', 'username', 'required');
		$valid->set_rules('password', 'password', 'required');
		$valid->set_message('required', 'Kolom wajib diisi');

		// konsep registrasi : 
		/*
				  1. Isi form registrasi dengan lengkap
				  2. Cek apakah akun sudah terdaftar, jika sudah maka return false dan notif akun telah terdaftar
				  3. Jika belum terdaftar, maka akan dibuat sebuah akun user
				  4. Done
			  */
		$post = $this->input->post();
		$data = array(
			'nama' => $this->input->post('nama_lengkap', TRUE),
			// 'nisn' => $this->input->post('nisn', TRUE),
			'email' => $this->input->post('email', TRUE),
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),
			'post_data' => $post,
		);

		if ($valid->run()) {

			$user = $this->db->get_where('users', ['username' => $post['username']])->row_array();
			$user2 = $this->db->get_where('users', ['nama' => $post['nama_lengkap']])->row_array();
			$user3 = $this->db->get_where('users', ['email' => $post['email']])->row_array();
			// $cs = $this->db->get_where('calon_siswa', ['nisn' => $post['nisn']])->row_array();

			// var_dump($data); die;

			if ($user) {
				$this->session->set_flashdata('error', 'Username sudah pernah didaftarkan!');
			} else if ($user2) {
				$this->session->set_flashdata('error', 'Nama sudah pernah didaftarkan!');
			} else if ($user3) {
				$this->session->set_flashdata('error', 'Email sudah pernah didaftarkan!');
			} else {
				// prepare userData
				$data = array(
					'nama' => $this->input->post('nama_lengkap', TRUE),
					'email' => $this->input->post('email', TRUE),
					'username' => $this->input->post('username', TRUE),
					'password' => $this->input->post('password', TRUE),
					'level' => 1,
				);

				$u_id = $this->Users_model->insert($data); //insert new user here

				// prepare calon_siswa data

				$this->session->set_flashdata('success', 'Akun berhasil didaftarkan! Silakan login untuk melanjutkan.');
				redirect('auth/login', 'refresh');
			}
		}
		// $this->load->view('auth/registrasi');
		$this->load->view('auth/registrasi', $data);

	}

	public function logout()
	{
		echo "disini lho";
		$this->session->sess_destroy();
		redirect('auth', 'refresh');
	}

	private function _send_email($token, $email)
	{
		$pengaturan = $this->db->get('pengaturan')->row_array();

		$mail = new PHPMailer(true);
		try {
			//Server settings
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
			$mail->isSMTP();
			$mail->Host = $pengaturan['smtp_host'];
			$mail->SMTPAuth = true;
			$mail->Username = $pengaturan['smtp_email'];
			$mail->Password = $pengaturan['smtp_password'];
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = 465;

			//Recipients
			$mail->setFrom('noreply@mail.com', $pengaturan['nama_aplikasi']);
			$mail->addAddress($email);

			// Content
			$mail->isHTML(true);
			$mail->Subject = 'Lupa Password';
			$mail->Body = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Lupa Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                            <img target="_blank" src="' . base_url('assets/img/pengaturan/') . $pengaturan['logo'] . '" alt="Lupa Password" width="300" height="300" style="display: block;" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                        <b>Lupa Password</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                       Klik tautan dibawah untuk mengatur ulang password anda!
                                    </td>
                                </tr>
                                <tr>
                                	<td><a href="' . base_url('auth/verify?email=' . $email . '&token=' . $token) . '">RESET PASSWORD</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';

			$mail->send();

		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

	public function lupa_password()
	{
		$this->form_validation->set_rules('email', 'email', 'required');

		if ($this->form_validation->run()) {

			$user = $this->db->get_where('user', ['email' => $this->input->post('email')])->row_array();

			if ($user) {

				$token = acak(32);

				$token_user = [
					'id_user' => $user['id_user'],
					'token' => $token
				];

				$this->db->insert('token_user', $token_user);

				$this->_send_email($token, $user['email']);

				$this->session->set_flashdata('message', 'Periksa email anda untuk mengatur ulang password anda');
				redirect('login', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Email tidak ditemukan!');
				redirect('auth/lupa_password', 'refresh');
			}

		}

		$this->load->view('auth/lupa_password');
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			$token_user = $this->db->get_where('token_user', ['token' => $token])->row_array();
			if ($token_user) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('error', 'Lupa Password Gagal, Token Salah');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('error', 'Lupa Password Gagal, Email Tidak Ditemukan');
			redirect('auth');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}

		$this->form_validation->set_rules('pw1', 'Password Baru', 'trim|required|matches[pw2]');
		$this->form_validation->set_rules('pw2', 'Konfirmasi Password', 'trim|required|matches[pw1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('reset_password');
		} else {
			$password = password_hash($this->input->post('pw1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$user = $this->db->get('user', ['email' => $email])->row_array();

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->unset_userdata('reset_email');

			$this->db->delete('token_user', ['id_user' => $user['id_user']]);

			$this->session->set_flashdata('message', 'Password berhasil diubah, silahkan login kembali');
			redirect('auth');
		}
	}
}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */?>