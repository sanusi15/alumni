<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wellcome_model extends CI_Model {

    function get_data($data){
        if($data = null){
            return $this->db->get('alumni')->result_array();
        }else{
            return $this->db->get_where('alumni', ['tahun_lulus' => $data]);
        }
            
    }

    function tambah_data($data){
        return $this->db->insert('alumni', $data);
    }
   
    function edit_data($data, $noalumni){
        $this->db->where('no_alumni', $noalumni);
        return $this->db->update('alumni', $data);
    }
    
    function cari_data($data)
    {
        $this->db->like('nama', $data);
        return $this->db->get('alumni')->result_array();        
    }

    function shortingTahun($data){
        return $this->db->get_where('alumni', ['tahun_lulus' => $data])->result_array();
    }
   
    function shortingJurusan($data){
        return $this->db->get_where('alumni', ['jurusan' => $data])->result_array();
    }

    function send_data($data){
       $nim = $this->db->get_where('alumni', ['nim' => $data])->row_array();       
       if(!$nim){
           $res = [
               "status" => 404,
               "results" => null
           ];
       }else{
            $res = [
                "status" => 200,
                "results" => $nim
            ];
       }
       echo json_encode($res);
    }
	


}