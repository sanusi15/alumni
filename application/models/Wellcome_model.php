<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wellcome_model extends CI_Model
{

    function get_data($data)
    {
        if ($data = null) {
            return $this->db->get('alumni')->result_array();
        } else {
            return $this->db->get_where('alumni', ['tahun_ajaran' => $data]);
        }
    }

    function get_data_all()
    {
        $this->db->select('*');
        $this->db->from('alumni t1');
        $this->db->join('jurusan t2', 't1.jurusan = t2.id');
        $this->db->join('tahun_ajaran t3', 't1.tahun_lulus = t3.id_tahun');
        $this->db->where('t1.status', 'aktif');
        $result = $this->db->get();
        return $result;
    }

    function get_data_where($nisn)
    {
        $this->db->select('*');
        $this->db->from('alumni t1');
        $this->db->join('jurusan t2', 't1.jurusan = t2.id', 'inner');
        $this->db->join('tahun_ajaran t3', 't1.tahun_lulus = t3.id_tahun', 'inner');
        $this->db->where('nisn', $nisn);
        $result = $this->db->get();
        return $result;
    }
    function get_data_where_id($id)
    {
        $this->db->select('*');
        $this->db->from('alumni t1');
        $this->db->join('jurusan t2', 't1.jurusan = t2.id', 'inner');
        $this->db->join('tahun_ajaran t3', 't1.tahun_lulus = t3.id_tahun', 'inner');
        $this->db->where('id_alumni', $id);
        $result = $this->db->get();
        return $result;
    }

    function tambah_data($data)
    {
        return $this->db->insert('alumni', $data);
    }

    function edit_data($data, $nisn)
    {
        $this->db->where('nisn', $nisn);
        return $this->db->update('alumni', $data);
    }

    function cari_data($data)
    {
        $query = $this->db->query("SELECT * FROM alumni t1 JOIN jurusan t2 ON t1.jurusan=t2.id JOIN tahun_ajaran t3 ON t1.tahun_lulus=t3.id_tahun WHERE t1.nama LIKE '%$data%'");
        return $query;
    }

    function shorting($jurusan = '', $tahunlulus = '')
    {
        if ($jurusan != '' && $tahunlulus != '') {
            $query = $this->db->query("SELECT * FROM alumni t1 JOIN jurusan t2 ON t1.jurusan=t2.id JOIN tahun_ajaran t3 ON t1.tahun_lulus=t3.id_tahun WHERE t1.jurusan='$jurusan' AND t1.tahun_lulus='$tahunlulus' ");
            return $query;
        } else {
            $query = $this->db->query("SELECT * FROM alumni t1 JOIN jurusan t2 ON t1.jurusan=t2.id JOIN tahun_ajaran t3 ON t1.tahun_lulus=t3.id_tahun WHERE t1.jurusan='$jurusan' OR t1.tahun_lulus='$tahunlulus' ");
            return $query;
        }
    }

    function send_data($data)
    {
        return $this->get_data_where($data)->row_array();
    }
}
