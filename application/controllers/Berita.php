<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
		$this->load->model('Users_model');		
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
    
        if ($q <> '') {
            $config['base_url'] = base_url() . 'berita/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'berita/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'berita/index.html';
            $config['first_url'] = base_url() . 'berita/index.html';
        }
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Berita_model->total_rows($q);
        $berita = $this->Berita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
        'berita_data' => $berita,
        'q' => $q,
        'pagination' => $this->pagination->create_links(),
        'total_rows' => $config['total_rows'],
        'start' => $start,
        'user' => $this->session->userdata('user'),                    
        );

        $data['judul'] = 'Data Berita';
        $data['user']   = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('berita/berita_list', $data);
        $this->load->view('templates/footer', $data);
    }
        

    public function read($id) 
    {
        $row = $this->Berita_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'judul' => $row->judul,
                'penulis' => $row->penulis,
                'konten' => $row->konten,
                'foto_utama' => $row->foto_utama,
                'tag' => $row->tag,
                'slug' => $row->slug,
                'tanggal' => $row->tanggal,
            );
    
            $data['judul'] = 'Detail Berita';
            $data['user']   = $this->session->userdata('user');
    
            $this->load->view('templates/header', $data);
            $this->load->view('berita/berita_read', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('berita'));
        }
    }
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('berita/create_action'),
            'id' => set_value('id'),
            'judul' => set_value('judul'),
            'penulis' => set_value('penulis'),
            'konten' => set_value('konten'),
            'foto_utama' => set_value('foto_utama'),
            'tag' => set_value('tag'),
            'slug' => set_value('slug'),
            'tanggal' => set_value('tanggal'),
        );

        $data['judul'] = 'Tambah Berita';
        $data['user']   = $this->session->userdata('user');

        $this->load->view('templates/header', $data);
        $this->load->view('berita/berita_form', $data);
        $this->load->view('templates/footer', $data);
    }

    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            // Pre proses, cek pratinjau atau terbitkan
            if (isset($_POST['terbitkan'])) {
                $nama_file = $this->do_upload();				
                // $this->Berita_model->tambahDataBerita($nama_file);							
                // $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Berita telah diterbitkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');	
                // redirect('berita');
                date_default_timezone_set("Asia/Jakarta");
                $now = new DateTime();

                $slug = "";
                $judul = $this->input->post('judul',TRUE);
                $pieces = explode(" ", $judul);
                for ($i=0; $i < count($pieces); $i++) { 
                    $slug.=strtolower($pieces[$i]);
                    if ($i != (count($pieces)-1)) {
                        $slug.="-";
                    }
                }

                $data = array(
                    'judul' => $judul,
                    'penulis' => $this->input->post('penulis',TRUE),
                    'konten' => $this->input->post('konten',TRUE),
                    'foto_utama' => $nama_file,
                    'tag' => $this->input->post('tag',TRUE),
                    'slug' => $slug,
                    'tanggal' => $now->format('Y-m-d H:i:s'),
                );
                
                $this->Berita_model->insert($data);
                $this->session->set_flashdata('success', 'Ditambah');
                redirect(site_url('berita'));
            }
            if (isset($_POST['pratinjau'])) {
                $data = array(
                    "judul" 		=> $this->input->post('judul', true),
                    "konten" 		=> $this->input->post('konten', true),
                    "foto_utama"	=> "def_berita.png",
                    "tag" 			=> $this->input->post('tag', true)
                );
                $this->preview($data);
            }            
        }
    }

    public function update($id) 
    {
        $row = $this->Berita_model->get_by_id($id);
    
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('berita/update_action'),
                'id' => set_value('id', $row->id),
                'judul' => set_value('judul', $row->judul),
                'penulis' => set_value('penulis', $row->penulis),
                'konten' => set_value('konten', $row->konten),
                'foto_utama' => set_value('foto_utama', $row->foto_utama),
                'tag' => set_value('tag', $row->tag),
                'slug' => set_value('slug', $row->slug),
                'tanggal' => set_value('tanggal', $row->tanggal),
            );
            $data['judul'] = 'Ubah Berita';
            $data['user']   = $this->session->userdata('user');
    
            $this->load->view('templates/header', $data);
            $this->load->view('berita/berita_form', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('berita'));
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
                'penulis' => $this->input->post('penulis',TRUE),
                'konten' => $this->input->post('konten',TRUE),
                // 'foto_utama' => $this->input->post('foto_utama',TRUE),
                'tag' => $this->input->post('tag',TRUE),
                'slug' => $this->input->post('slug',TRUE),
                'tanggal' => date('Y-m-d'),
            );
            
            $this->Berita_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('success', 'Diubah');
            redirect(site_url('berita'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Berita_model->get_by_id($id);
        if ($row) {
            $this->Berita_model->delete($id);
            $this->session->set_flashdata('success', 'Dihapus');
            redirect(site_url('berita'));
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan');
            redirect(site_url('berita'));
        }
    }
    
    public function _rules() 
    {
        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
        $this->form_validation->set_rules('konten', 'konten', 'trim|required');
        $this->form_validation->set_rules('tag', 'tag', 'trim|required');
        // $this->form_validation->set_rules('foto_utama', 'foto utama', 'trim|required');
        // $this->form_validation->set_rules('slug', 'slug', 'trim|required');
        // $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        
        // $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function preview($data_berita)
    {
        $id_u 	= $_SESSION['user']['id_user'];			
        $this_user = $this->Users_model->get_by_id($id_u);
        $data		= [
            'judul' => 'Preview Berita',
            'this_berita' => $data_berita,
            'this_user' => $this_user,
            'user' => $this->session->userdata('user')
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('berita/preview', $data);
        $this->load->view('templates/footer', $data);
    }	

    public function do_upload()
	{       
		$this->load->library('upload');
		$files = $_FILES['foto'];
		$config = $this->set_upload_options();
		$config['file_name'] = time().'-'.date("Y-m-d-his").'.jpg';			
		$this->upload->initialize($config);
		$res = $this->upload->do_upload($files);
		echo $res . "Foto sukses diupload<br><br>";
		return $config['file_name'];
	}

    private function set_upload_options()
	{   
        //upload an image options
        $config = array();
		$config['upload_path'] = './assets/img/berita/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = '120000';
		$config['overwrite']     = FALSE;
		return $config;
	}
}
    

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:55:36 */
/* http://harviacode.com */