<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Pengumuman_pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_pendaftaran_model');
        $this->load->library('form_validation');
    }

    public function index()
        {
            $q = urldecode($this->input->get('q', TRUE));
            $start = intval($this->input->get('start'));

            if ($q <> '') {
                $config['base_url'] = base_url() . 'pengumuman_pendaftaran/index.html?q=' . urlencode($q);
                $config['first_url'] = base_url() . 'pengumuman_pendaftaran/index.html?q=' . urlencode($q);
                } else {
                    $config['base_url'] = base_url() . 'pengumuman_pendaftaran/index.html';
                    $config['first_url'] = base_url() . 'pengumuman_pendaftaran/index.html';
                }

                $config['per_page'] = 10;
                $config['page_query_string'] = TRUE;
                $config['total_rows'] = $this->Pengumuman_pendaftaran_model->total_rows($q);
                $pengumuman_pendaftaran = $this->Pengumuman_pendaftaran_model->get_limit_data($config['per_page'], $start, $q);

                $this->load->library('pagination');
                $this->pagination->initialize($config);

                $data = array(
                'pengumuman_pendaftaran_data' => $pengumuman_pendaftaran,
                'q' => $q,
                'pagination' => $this->pagination->create_links(),
                'total_rows' => $config['total_rows'],
                'start' => $start,
                );

                $data['judul'] = 'Data Pengumuman_pendaftaran';

                $this->load->view('templates/header', $data);
                $this->load->view('pengumuman_pendaftaran/pengumuman_pendaftaran_list', $data);
                $this->load->view('templates/footer', $data);
            }

    public function read($id) 
        {
            $row = $this->Pengumuman_pendaftaran_model->get_by_id($id);
            if ($row) {
                $data = array(
		'id' => $row->id,
		'judul' => $row->judul,
		'deskripsi' => $row->deskripsi,
		'id_tahun_ajaran' => $row->id_tahun_ajaran,
		'tgl_update' => $row->tgl_update,
	    );

                $data['judul'] = 'Detail Pengumuman_pendaftaran';

                $this->load->view('templates/header', $data);
                $this->load->view('pengumuman_pendaftaran/pengumuman_pendaftaran_read', $data);
                $this->load->view('templates/footer', $data);
                } else {
                    $this->session->set_flashdata('error', 'Data tidak ditemukan');
                    redirect(site_url('pengumuman_pendaftaran'));
                }
            }

            public function create() 
            {
                $data = array(
                'button' => 'Create',
                'action' => site_url('pengumuman_pendaftaran/create_action'),
	    'id' => set_value('id'),
	    'judul' => set_value('judul'),
	    'deskripsi' => set_value('deskripsi'),
	    'id_tahun_ajaran' => set_value('id_tahun_ajaran'),
	    'tgl_update' => set_value('tgl_update'),
	);

                $data['judul'] = 'Tambah Pengumuman_pendaftaran';

                $this->load->view('templates/header', $data);
                $this->load->view('pengumuman_pendaftaran/pengumuman_pendaftaran_form', $data);
                $this->load->view('templates/footer', $data);
            }

            public function create_action() 
            {
                $this->_rules();

                if ($this->form_validation->run() == FALSE) {
                    $this->create();
                    } else {
                        $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran',TRUE),
		'tgl_update' => $this->input->post('tgl_update',TRUE),
	    );

                        $this->Pengumuman_pendaftaran_model->insert($data);
                        $this->session->set_flashdata('success', 'Ditambah');
                        redirect(site_url('pengumuman_pendaftaran'));
                    }
                }

                public function update($id) 
                {
                    $row = $this->Pengumuman_pendaftaran_model->get_by_id($id);

                    if ($row) {
                        $data = array(
                        'button' => 'Update',
                        'action' => site_url('pengumuman_pendaftaran/update_action'),
		'id' => set_value('id', $row->id),
		'judul' => set_value('judul', $row->judul),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'id_tahun_ajaran' => set_value('id_tahun_ajaran', $row->id_tahun_ajaran),
		'tgl_update' => set_value('tgl_update', $row->tgl_update),
	    );

                        $data['judul'] = 'Ubah Pengumuman_pendaftaran';

                        $this->load->view('templates/header', $data);
                        $this->load->view('pengumuman_pendaftaran/pengumuman_pendaftaran_form', $data);
                        $this->load->view('templates/footer', $data);

                        } else {
                            $this->session->set_flashdata('error', 'Data tidak ditemukan');
                            redirect(site_url('pengumuman_pendaftaran'));
                        }
                    }

                    public function update_action() 
                    {
                        $this->_rules();

                        if ($this->form_validation->run() == FALSE) {
                            $this->update($this->input->post('id', TRUE));
                            } else {
                                $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'id_tahun_ajaran' => $this->input->post('id_tahun_ajaran',TRUE),
		'tgl_update' => $this->input->post('tgl_update',TRUE),
	    );

                                $this->Pengumuman_pendaftaran_model->update($this->input->post('id', TRUE), $data);
                                $this->session->set_flashdata('success', 'Diubah');
                                redirect(site_url('pengumuman_pendaftaran'));
                            }
                        }

                        public function delete($id) 
                        {
                            $row = $this->Pengumuman_pendaftaran_model->get_by_id($id);

                            if ($row) {
                                $this->Pengumuman_pendaftaran_model->delete($id);
                                $this->session->set_flashdata('success', 'Dihapus');
                                redirect(site_url('pengumuman_pendaftaran'));
                                } else {
                                    $this->session->set_flashdata('error', 'Data tidak ditemukan');
                                    redirect(site_url('pengumuman_pendaftaran'));
                                }
                            }

                            public function _rules() 
                            {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('id_tahun_ajaran', 'id tahun ajaran', 'trim|required|numeric');
	$this->form_validation->set_rules('tgl_update', 'tgl update', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
                        }

}

/* End of file Pengumuman_pendaftaran.php */
                        /* Location: ./application/controllers/Pengumuman_pendaftaran.php */
                        /* Please DO NOT modify this information : */
                        /* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:51:37 */
                        /* http://harviacode.com */