<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Visi_misi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Visi_misi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'visi_misi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'visi_misi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'visi_misi/index.html';
            $config['first_url'] = base_url() . 'visi_misi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Visi_misi_model->total_rows($q);
        $visi_misi = $this->Visi_misi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'visi_misi_data' => $visi_misi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'judul' => 'Data Visi Misi',
            'user' => $this->session->userdata('user')
        );

        $this->load->view('templates/header', $data);
        $this->load->view('visi_misi/visi_misi_list', $data);
        $this->load->view('templates/footer', $data);
    }

    public function read($id)
    {
        $row = $this->Visi_misi_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'visi' => $row->visi,
                'misi' => $row->misi,
                'tgl_update' => $row->tgl_update,
            );

            $data['judul'] = 'Detail Visi Misi';
            $data['user'] = $this->session->userdata('user');

            $this->load->view('templates/header', $data);
            $this->load->view('visi_misi/visi_misi_read', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('visi_misi'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('visi_misi/create_action'),
            'id' => set_value('id'),
            'visi' => set_value('visi'),
            'misi' => set_value('misi'),
            'tgl_update' => set_value('tgl_update'),
        );

        $data['judul'] = 'Tambah Visi_misi';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('visi_misi/visi_misi_form', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'visi' => $this->input->post('visi', TRUE),
                'misi' => $this->input->post('misi', TRUE),
                // 'tgl_update' => $this->input->post('tgl_update',TRUE),
            );

            $this->Visi_misi_model->insert($data);
            $this->session->set_flashdata('success', 'Ditambah');
            redirect(site_url('visi_misi'));
        }
    }

    public function update($id)
    {
        $row = $this->Visi_misi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('visi_misi/update_action'),
                'id' => set_value('id', $row->id),
                'visi' => set_value('visi', $row->visi),
                'misi' => set_value('misi', $row->misi),
                'tgl_update' => set_value('tgl_update', date('Y-m-d')),
            );

            $data['judul'] = 'Ubah Visi Misi';
            $data['user'] = $this->session->userdata('user');

            $this->load->view('templates/header', $data);
            $this->load->view('visi_misi/visi_misi_form', $data);
            $this->load->view('templates/footer', $data);

        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('visi_misi'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'visi' => $this->input->post('visi', TRUE),
                'misi' => $this->input->post('misi', TRUE),
                'tgl_update' => $this->input->post('tgl_update', TRUE),
            );

            $this->Visi_misi_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('success', 'Diubah');
            redirect(site_url('visi_misi'));
        }
    }

    public function delete($id)
    {
        $row = $this->Visi_misi_model->get_by_id($id);

        if ($row) {
            $this->Visi_misi_model->delete($id);
            $this->session->set_flashdata('success', 'Dihapus');
            redirect(site_url('visi_misi'));
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('visi_misi'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('visi', 'visi', 'required');
        $this->form_validation->set_rules('misi', 'misi', 'required');
        // $this->form_validation->set_rules('tgl_update', 'tgl update', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Visi_misi.php */
/* Location: ./application/controllers/Visi_misi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:52:24 */
/* http://harviacode.com */