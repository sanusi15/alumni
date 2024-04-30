<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nisn')) {
            redirect('loginmhs');
        }
    }

    public function index()
    {
        $sessionUser = $this->session->userdata('nisn');
        $data['mhs'] = $this->Wellcome_model->get_data_where($sessionUser)->row_array();
        $data['tahun'] = $this->db->get('tahun_ajaran')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $this->load->view('mahasiswa/template/header', $data);
        $this->load->view('mahasiswa/dashboard');
        $this->load->view('mahasiswa/template/footer');
    }

    public function update()
    {
        $name = $this->input->post('name');
        $no_alumni = $this->input->post('no_alumni');
        $jurusan = $this->input->post('jurusan');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $email = $this->input->post('email');
        $kontak = $this->input->post('kontak');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $password = $this->input->post('password');

        $data = [
            'no_alumni' => $no_alumni,
            'password' => $password,
            'nama' => $name,
            'jurusan' => $jurusan,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'email' => $email,
            'tahun_lulus' => $tahun_lulus,
        ];

        $this->db->set($data)->where('nisn', $this->session->userdata('nisn'))->update('alumni');
        $this->session->set_flashdata('update', 'Update Berhasil');
        redirect('Mahasiswa');
    }

    public function updtImage()
    {
        $nisn = $this->session->userdata('nisn');
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['remove_space'] = TRUE;
        $config['file_name'] = $nisn;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('foto')) {
            $data = $this->upload->data();
            $this->db->set('foto', $data['file_name'])->where('nisn', $nisn)->update('alumni');
            $this->session->set_flashdata('update', 'Update Berhasil');
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata('update', 'Update Gagal');
            redirect('mahasiswa');
        }
    }

    public function signOut()
    {
        $this->session->unset_userdata('nisn');
        redirect('loginmhs');
    }
}
