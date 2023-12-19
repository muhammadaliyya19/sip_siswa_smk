<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Calon_siswa_model extends CI_Model
{

    public $table = 'calon_siswa';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json()
    {
        $this->datatables->select('id,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,anak_ke,jumlah_saudara,no_hp_siswa,alamat_siswa,
        --berat_badan,
        --tinggi_badan,
        --penghasilan_orang_tua,
        --tanggungan_anak,
        --gol_darah,
        asal_sekolah,alamat_sekolah,nama_ayah,nama_ibu,alamat_orang_tua,no_hp_orang_tua,
        id_tahun_ajaran,id_user,status_lolos,nisn');
        $this->datatables->from('calon_siswa');
        //add this line for join
        //$this->datatables->join('table2', 'calon_siswa.field = table2.field');
        $this->datatables->add_column('action',
            '<a href="' . site_url('calon_siswa/read/$1') . '" class="btn btn-info"><i class="fa fa-eye"></i></a> 
            <a href="' . site_url('calon_siswa/update/$1') . '" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
            <a data-href="' . site_url('calon_siswa/delete/$1') . '" class="btn btn-danger hapus-data"><i class="fa fa-trash"></i></a>', 'id');
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

    // get total rows
    function total_rows($q = NULL)
    {
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
        // $this->db->or_like('berat_badan', $q);
        // $this->db->or_like('tinggi_badan', $q);
        // $this->db->or_like('gol_darah', $q);
        // $this->db->or_like('penghasilan_orang_tua', $q);
        // $this->db->or_like('tanggungan_anak', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
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
        // $this->db->or_like('berat_badan', $q);
        // $this->db->or_like('tinggi_badan', $q);
        // $this->db->or_like('gol_darah', $q);
        // $this->db->or_like('penghasilan_orang_tua', $q);
        // $this->db->or_like('tanggungan_anak', $q);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
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