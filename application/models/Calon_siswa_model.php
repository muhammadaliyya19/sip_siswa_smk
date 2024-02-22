<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Calon_siswa_model extends CI_Model
{

    public $table = 'calon_siswa';
    // public $id = 'id';
    public $id = 'id_calon_siswa';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $datapost = $_POST;
        $this->datatables->select(
            'calon_siswa.id_calon_siswa, calon_siswa.nama, calon_siswa.tempat_lahir, calon_siswa.tanggal_lahir, calon_siswa.jenis_kelamin, calon_siswa.agama, calon_siswa.anak_ke, 
            calon_siswa.jumlah_saudara, calon_siswa.no_hp_siswa, calon_siswa.alamat_siswa, 
            calon_siswa.asal_sekolah, calon_siswa.alamat_sekolah, calon_siswa.nama_ayah, 
            calon_siswa.nama_ibu, calon_siswa.alamat_orang_tua, calon_siswa.no_hp_orang_tua, calon_siswa.id_tahun_ajaran, tahun_ajaran.tahun_ajaran, 
            calon_siswa. id_user, calon_siswa.status_lolos, calon_siswa.nisn,calon_siswa.berkas' 
            // berat_badan,
            // tinggi_badan,
            // gol_darah,
            // penghasilan_orang_tua,
            // tanggungan_anak,
        );
        $this->datatables->from('calon_siswa');
        $this->datatables->join('tahun_ajaran', 'calon_siswa.id_tahun_ajaran = tahun_ajaran.id_tahun_ajaran');
        if($datapost['id_tahun_ajaran'] != "All" && $datapost['id_tahun_ajaran'] != 0) {
            $this->datatables->where('calon_siswa.id_tahun_ajaran', $datapost['id_tahun_ajaran']);
        }
        $this->datatables->add_column('action',
            '<a href="#" class="btn btn-success info-user" data-idsiswa = "$1"><i class="fa fa-info-circle"></i></a> 
            <a href="' . site_url('pendaftaran/read/$1') . '" class="btn btn-info"><i class="fa fa-eye"></i></a> 
            <a href="' . site_url('pendaftaran/cetak/$1') . '" target="_blank" class="btn btn-success"><i class="fa fa-print"></i></a> 
            <a href="' . site_url('pendaftaran/update/$1') . '" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
            <a data-href="' . site_url('pendaftaran/delete/$1') . '" class="btn btn-danger hapus-data"><i class="fa fa-trash"></i></a>', 'id_calon_siswa');
        return $this->datatables->generate();
    }

    function json_mine()
    {
        $this_user = $this->session->userdata('user');
        $this->datatables->select(
            'calon_siswa.id_calon_siswa, calon_siswa.nama, calon_siswa.tempat_lahir, calon_siswa.tanggal_lahir, calon_siswa.jenis_kelamin, calon_siswa.agama, calon_siswa.anak_ke, 
            calon_siswa.jumlah_saudara, calon_siswa.no_hp_siswa, calon_siswa.alamat_siswa, 
            calon_siswa.asal_sekolah, calon_siswa.alamat_sekolah, calon_siswa.nama_ayah, 
            calon_siswa.nama_ibu, calon_siswa.alamat_orang_tua, calon_siswa.no_hp_orang_tua, calon_siswa.id_tahun_ajaran, tahun_ajaran.tahun_ajaran, 
            calon_siswa. id_user, calon_siswa.status_lolos, calon_siswa.nisn,calon_siswa.berkas' 
            // berat_badan,
            // tinggi_badan,
            // gol_darah,
            // penghasilan_orang_tua,
            // tanggungan_anak,
        );
        $this->datatables->from('calon_siswa');
        //add this line for join
        $this->datatables->join('tahun_ajaran', 'calon_siswa.id_tahun_ajaran = tahun_ajaran.id_tahun_ajaran');
        $this->datatables->where('calon_siswa.id_user', $this_user['id_user']);
        $this->datatables->add_column('action',
            '<a href="' . site_url('pendaftaran/read_mine/$1') . '" target="_blank" class="btn btn-info"><i class="fa fa-eye"></i></a>
            <a href="' . site_url('pendaftaran/cetak/$1') . '" target="_blank" class="btn btn-success"><i class="fa fa-print"></i></a>'
            , 'id_calon_siswa');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_tahunAjarId($ta_id)
    {
        $this->db->where("id_tahun_ajaran", $ta_id);
        return $this->db->get($this->table)->result();
    }
    
    function get_by_userId($user_id)
    {
        $this->db->where("id_user", $user_id);
        return $this->db->get($this->table)->row();
    }

    function check_user_registered($id_user)
    {
        $this_user = $this->session->userdata('user');
        $this->datatables->where('calon_siswa.id_user', $this_user['id_user']);
        $res = $this->db->get($this->table)->row();
        if ($res){
            return true;
        } else {
            return false;
        }
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id_calon_siswa', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('tempat_lahir', $q);
        $this->db->or_like('tanggal_lahir', $q);
        $this->db->or_like('jenis_kelamin', $q);
        $this->db->or_like('agama', $q);
        $this->db->or_like('anak_ke', $q);
        $this->db->or_like('jumlah_saudara', $q);
        $this->db->or_like('no_hp_siswa', $q);
        $this->db->or_like('alamat_siswa', $q);
        $this->db->or_like('asal_sekolah', $q);
        $this->db->or_like('alamat_sekolah', $q);
        $this->db->or_like('nama_ayah', $q);
        $this->db->or_like('nama_ibu', $q);
        $this->db->or_like('alamat_orang_tua', $q);
        $this->db->or_like('no_hp_orang_tua', $q);
        $this->db->or_like('id_tahun_ajaran', $q);
        $this->db->or_like('id_user', $q);
        $this->db->or_like('status_lolos', $q);
        $this->db->or_like('nisn', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
        // $this->db->or_like('berat_badan', $q);
        // $this->db->or_like('tinggi_badan', $q);
        // $this->db->or_like('gol_darah', $q);
        // $this->db->or_like('tanggungan_anak', $q);
        // $this->db->or_like('penghasilan_orang_tua', $q);
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('nama', $q);
        $this->db->or_like('tempat_lahir', $q);
        $this->db->or_like('tanggal_lahir', $q);
        $this->db->or_like('jenis_kelamin', $q);
        $this->db->or_like('agama', $q);
        $this->db->or_like('anak_ke', $q);
        $this->db->or_like('jumlah_saudara', $q);
        $this->db->or_like('no_hp_siswa', $q);
        $this->db->or_like('alamat_siswa', $q);
        $this->db->or_like('asal_sekolah', $q);
        $this->db->or_like('alamat_sekolah', $q);
        $this->db->or_like('nama_ayah', $q);
        $this->db->or_like('nama_ibu', $q);
        $this->db->or_like('alamat_orang_tua', $q);
        $this->db->or_like('no_hp_orang_tua', $q);
        $this->db->or_like('id_tahun_ajaran', $q);
        $this->db->or_like('id_user', $q);
        $this->db->or_like('status_lolos', $q);
        $this->db->or_like('nisn', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
        // $this->db->or_like('berat_badan', $q);
        // $this->db->or_like('tinggi_badan', $q);
        // $this->db->or_like('gol_darah', $q);
        // $this->db->or_like('penghasilan_orang_tua', $q);
        // $this->db->or_like('tanggungan_anak', $q);
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Calon_siswa_model.php */
/* Location: ./application/models/Calon_siswa_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:47:02 */
/* http://harviacode.com */