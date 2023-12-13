<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Tahun_ajaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tahun_ajaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
    
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tahun_ajaran/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tahun_ajaran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tahun_ajaran/index.html';
            $config['first_url'] = base_url() . 'tahun_ajaran/index.html';
        }
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tahun_ajaran_model->total_rows($q);
        $tahun_ajaran = $this->Tahun_ajaran_model->get_limit_data($config['per_page'], $start, $q);
    
        $this->load->library('pagination');
        $this->pagination->initialize($config);
    
        $data = array(
            'tahun_ajaran_data' => $tahun_ajaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'user' => $this->session->userdata('user'),
        );
    
        $data['judul'] = 'Data Tahun Ajaran';
    
        $this->load->view('templates/header', $data);
        $this->load->view('tahun_ajaran/tahun_ajaran_list', $data);
        $this->load->view('templates/footer', $data);
    }
    
    public function read($id) 
    {
        $row = $this->Tahun_ajaran_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'tahun_ajaran' => $row->tahun_ajaran,
                'user' => $this->session->userdata('user'),
            );

            $data['judul'] = 'Detail Tahun_ajaran';

            $this->load->view('templates/header', $data);
            $this->load->view('tahun_ajaran/tahun_ajaran_read', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('tahun_ajaran'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tahun_ajaran/create_action'),
            'id' => set_value('id'),
            'tahun_ajaran' => set_value('tahun_ajaran'),
            'user' => $this->session->userdata('user'),
        );
        
        $data['judul'] = 'Tambah Tahun Ajaran';

        $this->load->view('templates/header', $data);
        $this->load->view('tahun_ajaran/tahun_ajaran_form', $data);
        $this->load->view('templates/footer', $data);
    }

            public function create_action() 
            {
                $this->_rules();

                if ($this->form_validation->run() == FALSE) {
                    $this->create();
                } else {
                    $data = array(
                        'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
                    );
                    
                    $this->Tahun_ajaran_model->insert($data);
                    $this->session->set_flashdata('success', 'Ditambah');
                    redirect(site_url('pengumuman_ppdb'));
                    // redirect(site_url('tahun_ajaran'));
                }
            }

                public function update($id) 
                {
                    $row = $this->Tahun_ajaran_model->get_by_id($id);

                    if ($row) {
                        $data = array(
                            'button' => 'Update',
                            'action' => site_url('tahun_ajaran/update_action'),
                            'id' => set_value('id', $row->id),
                            'tahun_ajaran' => set_value('tahun_ajaran', $row->tahun_ajaran),
                            'user' => $this->session->userdata('user'),
                        );
                            
                        $data['judul'] = 'Ubah Tahun Ajaran';

                        $this->load->view('templates/header', $data);
                        $this->load->view('tahun_ajaran/tahun_ajaran_form', $data);
                        $this->load->view('templates/footer', $data);
                        
                    } else {
                        $this->session->set_flashdata('error', 'Data tidak ditemukan');
                        redirect(site_url('tahun_ajaran'));
                    }
                }

                    public function update_action() 
                    {
                        $this->_rules();

                        if ($this->form_validation->run() == FALSE) {
                            $this->update($this->input->post('id', TRUE));
                        } else {
                            $data = array(
                                'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
                            );
                            
                            $this->Tahun_ajaran_model->update($this->input->post('id', TRUE), $data);
                            $this->session->set_flashdata('success', 'Diubah');
                            redirect(site_url('pengumuman_ppdb'));
                            // redirect(site_url('tahun_ajaran'));
                        }
                    }

                        public function delete($id) 
                        {
                            $row = $this->Tahun_ajaran_model->get_by_id($id);

                            if ($row) {
                                $this->Tahun_ajaran_model->delete($id);
                                $this->session->set_flashdata('success', 'Dihapus');
                                redirect(site_url('pengumuman_ppdb')); //kembali ke halaman pengumuman pendaftaran
                                // redirect(site_url('tahun_ajaran'));
                            } else {
                                $this->session->set_flashdata('error', 'Data tidak ditemukan');
                                redirect(site_url('pengumuman_ppdb')); //kembali ke halaman pengumuman pendaftaran
                                // redirect(site_url('tahun_ajaran'));
                            }
                        }

                            public function _rules() 
                            {
                                $this->form_validation->set_rules('tahun_ajaran', 'tahun ajaran', 'trim|required|numeric');
                            
                                $this->form_validation->set_rules('id', 'id', 'trim');
                                $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
                            }
                        }
                            

/* End of file Tahun_ajaran.php */
                        /* Location: ./application/controllers/Tahun_ajaran.php */
                        /* Please DO NOT modify this information : */
                        /* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:42:43 */
                        /* http://harviacode.com */