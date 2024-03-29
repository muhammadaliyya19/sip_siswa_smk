<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita_model extends CI_Model
{

    public $table = 'berita';
    // public $id = 'id';
    public $id = 'id_berita';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_all_array()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result_array();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_id_arr($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row_array();
    }

    // get total rows
    function total_rows($q = NULL)
    {
        $this->db->like('id_berita', $q);
        $this->db->or_like('judul', $q);
        $this->db->or_like('penulis', $q);
        $this->db->or_like('konten', $q);
        $this->db->or_like('foto_utama', $q);
        $this->db->or_like('tag', $q);
        $this->db->or_like('slug', $q);
        $this->db->or_like('tanggal', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_berita', $q);
        $this->db->or_like('judul', $q);
        $this->db->or_like('penulis', $q);
        $this->db->or_like('konten', $q);
        $this->db->or_like('foto_utama', $q);
        $this->db->or_like('tag', $q);
        $this->db->or_like('slug', $q);
        $this->db->or_like('tanggal', $q);
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

    public function getBeritaPrev($id)
    {
        return $this->db->get_where('berita', ['id_berita <' => $id])->row_array();
    }

    public function getBeritaNext($id)
    {
        return $this->db->get_where('berita', ['id_berita >' => $id])->row_array();
    }

    public function getBeritaRandom()
    {

        $this->db->order_by('id_berita', 'RANDOM');
        $q = $this->db->get('berita', 5);
        return $q->result_array();
    }
    public function getBeritaBySlug($slug)
    {
        return $this->db->get_where('berita', ['slug' => $slug])->row_array();
    }

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-07 23:55:36 */
/* http://harviacode.com */