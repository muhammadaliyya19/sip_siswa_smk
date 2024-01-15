<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengumuman_ppdb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_pendaftaran_model');
        $this->load->model('Tahun_ajaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'pengumuman_ppdb/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengumuman_ppdb/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengumuman_ppdb/index.html';
            $config['first_url'] = base_url() . 'pengumuman_ppdb/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengumuman_pendaftaran_model->total_rows($q);
        $pengumuman_pendaftaran = $this->Pengumuman_pendaftaran_model->get_limit_data($config['per_page'], $start, $q);

        // var_dump($pengumuman_pendaftaran); die;

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $tahun_ajarans = $this->Tahun_ajaran_model->get_all();

        $data = array(
            'pengumuman_pendaftaran_data' => $pengumuman_pendaftaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->session->userdata('user'),
            'tahun_ajarans' => $tahun_ajarans,
        );

        $data['judul'] = 'Data Pengumuman PPDB';

        $this->load->view('templates/header', $data);
        $this->load->view('pengumuman_ppdb/pengumuman_pendaftaran_list', $data);
        $this->load->view('templates/footer', $data);
    }

    public function read($id)
    {
        $row = $this->Pengumuman_pendaftaran_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'title' => $row->judul,
                'deskripsi' => $row->deskripsi,
                'id_tahun_ajaran' => $row->id_tahun_ajaran,
                'tahun_ajaran' => $row->tahun_ajaran,
                'tgl_update' => $row->tgl_update,
                'is_active' => $row->is_active,
                'link_files' => $row->link_files,
            );

            $data['judul'] = 'Detail Pengumuman PPDB';
            $data['user'] = $this->session->userdata('user');

            $this->load->view('templates/header', $data);
            $this->load->view('pengumuman_ppdb/pengumuman_pendaftaran_read', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('pengumuman_ppdb'));
        }
    }

    public function create()
    {
        $tahun_ajarans = $this->Tahun_ajaran_model->get_all();
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengumuman_ppdb/create_action'),
            'id' => set_value('id'),
            'title' => set_value('title'),
            'deskripsi' => set_value('deskripsi'),
            'id_tahun_ajaran' => set_value('id_tahun_ajaran'),
            'tgl_update' => set_value('tgl_update'),
            'is_active' => set_value('is_active'),
            'link_files' => set_value('link_files'),
            'tahun_ajarans' => $tahun_ajarans,
        );

        $data['judul'] = 'Tambah Pengumuman PPDB';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('pengumuman_ppdb/pengumuman_pendaftaran_form', $data);
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
            $data = array(
                'judul' => $this->input->post('title', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran', TRUE),
                'is_active' => $this->input->post('is_active', TRUE),
                'link_files' => $nama_file,
                // 'tgl_update' => $this->input->post('tgl_update',TRUE),
            );

            $this->Pengumuman_pendaftaran_model->insert($data);
            $this->session->set_flashdata('success', 'Ditambah');
            redirect(site_url('pengumuman_ppdb'));
        }
    }

    public function update($id)
    {
        $row = $this->Pengumuman_pendaftaran_model->get_by_id($id);
        $tahun_ajarans = $this->Tahun_ajaran_model->get_all();

        if ($row) {
			$data = array(
                'button' => 'Update',
                'action' => site_url('pengumuman_ppdb/update_action'),
                'id' => set_value('id', $row->id),
                'title' => set_value('title', $row->judul),
                'deskripsi' => set_value('deskripsi', $row->deskripsi),
                'id_tahun_ajaran' => set_value('id_tahun_ajaran', $row->id_tahun_ajaran),
                'tgl_update' => set_value('tgl_update', $row->tgl_update),
                'is_active' => set_value('is_active', $row->is_active),
                'tahun_ajarans' => $tahun_ajarans,
                'link_files' => $row->link_files,
            );

            $data['judul'] = 'Ubah Pengumuman Ppdb';
            $data['user'] = $this->session->userdata('user');

            $this->load->view('templates/header', $data);
            $this->load->view('pengumuman_ppdb/pengumuman_pendaftaran_form', $data);
            $this->load->view('templates/footer', $data);

        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('pengumuman_ppdb'));
        }
    }

    public function update_action()
    {
        $this->_rules();
        $id = $this->input->post('id', TRUE);
        $row = $this->Pengumuman_pendaftaran_model->get_by_id($id);
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $nama_file = $this->do_upload();
            // var_dump($nama_file); die;
            if ($nama_file != "" && $row->link_files != "") {
				// delete old files
				unlink('./assets/berkas_pengumuman/' . $row->link_files);
			} else if ($nama_file == "" && $row->link_files != "") {
				$nama_file = $row->link_files;
			}
            $data = array(
                'judul' => $this->input->post('title', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran', TRUE),
                'tgl_update' => $this->input->post('tgl_update', TRUE),
                'is_active' => $this->input->post('is_active', TRUE),
                'link_files' => $nama_file,
            );

            $this->Pengumuman_pendaftaran_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('success', 'Diubah');
            redirect(site_url('pengumuman_ppdb'));
        }
    }

    public function delete($id)
    {
        $row = $this->Pengumuman_pendaftaran_model->get_by_id($id);

        if ($row) {
            $this->Pengumuman_pendaftaran_model->delete($id);
            $this->session->set_flashdata('success', 'Dihapus');
            redirect(site_url('pengumuman_ppdb'));
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('pengumuman_ppdb'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('title', 'judul', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
        $this->form_validation->set_rules('id_tahun_ajaran', 'id tahun ajaran', 'trim|required|numeric');
        $this->form_validation->set_rules('tgl_update', 'tgl update', 'trim');
        $this->form_validation->set_rules('is_active', 'status aktif', 'required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function do_upload()
    {
		if ($_FILES['berkas_pendukung']['size'] > 0) {
			$this->load->library('upload');
			$path = $_FILES['berkas_pendukung']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$files = $_FILES['berkas_pendukung'];
			// var_dump($files);
			// echo "<br><br><br>";
			// var_dump($ext);
			// die;
			$config = $this->set_upload_options();
			$config['file_name'] = time() . '-' . date("Y-m-d-his") . '.'. $ext;
			$this->upload->initialize($config);
			$res = $this->upload->do_upload('berkas_pendukung');
			echo $res . "Berkas sukses diupload<br><br>";
			echo $config['file_name'];
			// die;
			return $config['file_name'];
		} else {
			return "";
		}
    }

    private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './assets/berkas_pengumuman/';
        $config['allowed_types'] = 'zip|7z|rar|tar|gz|xls|xlsx';
        $config['max_size'] = '1200000';
        $config['overwrite'] = FALSE;
        return $config;
    }

}

/* End of file Pengumuman_pendaftaran.php */
/* Location: ./application/controllers/Pengumuman_pendaftaran.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:51:37 */
/* http://harviacode.com */