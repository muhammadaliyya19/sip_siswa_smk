<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nilai_ijazah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_ijazah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'nilai_ijazah/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'nilai_ijazah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'nilai_ijazah/index.html';
            $config['first_url'] = base_url() . 'nilai_ijazah/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Nilai_ijazah_model->total_rows($q);
        $nilai_ijazah = $this->Nilai_ijazah_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'nilai_ijazah_data' => $nilai_ijazah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $data['judul'] = 'Data Nilai_ijazah';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('nilai_ijazah/nilai_ijazah_list', $data);
        $this->load->view('templates/footer', $data);
    }

    public function read($id)
    {
        $row = $this->Nilai_ijazah_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_nilai_ijazah' => $row->id_nilai_ijazah,
                'id_user' => $row->id_user,
                'nisn' => $row->nisn,
                'nilai_bhs_indo' => $row->nilai_bhs_indo,
                'nilai_bhs_inggris' => $row->nilai_bhs_inggris,
                'nilai_ipa' => $row->nilai_ipa,
                'nilai_ips' => $row->nilai_ips,
                'nilai_mtk' => $row->nilai_mtk,
                'nilai_akhir' => $row->nilai_akhir,
                'keterangan' => $row->keterangan,
            );

            $data['judul'] = 'Detail Nilai_ijazah';

            $this->load->view('templates/header', $data);
            $this->load->view('nilai_ijazah/nilai_ijazah_read', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('nilai_ijazah'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('nilai_ijazah/create_action'),
            'id_nilai_ijazah' => set_value('id_nilai_ijazah'),
            'id_user' => set_value('id_user'),
            'nisn' => set_value('nisn'),
            'nilai_bhs_indo' => set_value('nilai_bhs_indo'),
            'nilai_bhs_inggris' => set_value('nilai_bhs_inggris'),
            'nilai_ipa' => set_value('nilai_ipa'),
            'nilai_ips' => set_value('nilai_ips'),
            'nilai_mtk' => set_value('nilai_mtk'),
            'nilai_akhir' => set_value('nilai_akhir'),
            'keterangan' => set_value('keterangan'),
        );

        $data['judul'] = 'Tambah Nilai_ijazah';
        $data['user'] = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('nilai_ijazah/nilai_ijazah_form', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
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

            $this->Nilai_ijazah_model->insert($data);
            $this->session->set_flashdata('success', 'Ditambah');
            redirect(site_url('nilai_ijazah'));
        }
    }

    public function update($id)
    {
        $row = $this->Nilai_ijazah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('nilai_ijazah/update_action'),
                'id_nilai_ijazah' => set_value('id_nilai_ijazah', $row->id_nilai_ijazah),
                'id_user' => set_value('id_user', $row->id_user),
                'nisn' => set_value('nisn', $row->nisn),
                'nilai_bhs_indo' => set_value('nilai_bhs_indo', $row->nilai_bhs_indo),
                'nilai_bhs_inggris' => set_value('nilai_bhs_inggris', $row->nilai_bhs_inggris),
                'nilai_ipa' => set_value('nilai_ipa', $row->nilai_ipa),
                'nilai_ips' => set_value('nilai_ips', $row->nilai_ips),
                'nilai_mtk' => set_value('nilai_mtk', $row->nilai_mtk),
                'nilai_akhir' => set_value('nilai_akhir', $row->nilai_akhir),
                'keterangan' => set_value('keterangan', $row->keterangan),
            );

            $data['judul'] = 'Ubah Nilai_ijazah';

            $this->load->view('templates/header', $data);
            $this->load->view('nilai_ijazah/nilai_ijazah_form', $data);
            $this->load->view('templates/footer', $data);

        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('nilai_ijazah'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_nilai_ijazah', TRUE));
        } else {
            $data = array(
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

            $this->Nilai_ijazah_model->update($this->input->post('id_nilai_ijazah', TRUE), $data);
            $this->session->set_flashdata('success', 'Diubah');
            redirect(site_url('nilai_ijazah'));
        }
    }

    public function delete($id)
    {
        $row = $this->Nilai_ijazah_model->get_by_id($id);

        if ($row) {
            $this->Nilai_ijazah_model->delete($id);
            $this->session->set_flashdata('success', 'Dihapus');
            redirect(site_url('nilai_ijazah'));
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('nilai_ijazah'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_user', 'id user', 'trim|required|numeric');
        $this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
        $this->form_validation->set_rules('nilai_bhs_indo', 'nilai bhs indo', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_bhs_inggris', 'nilai bhs inggris', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_ipa', 'nilai ipa', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_ips', 'nilai ips', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_mtk', 'nilai mtk', 'trim|required|numeric');
        $this->form_validation->set_rules('nilai_akhir', 'nilai akhir', 'trim|required|numeric');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

        $this->form_validation->set_rules('id_nilai_ijazah', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Nilai_ijazah.php */
/* Location: ./application/controllers/Nilai_ijazah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:43:13 */
/* http://harviacode.com */