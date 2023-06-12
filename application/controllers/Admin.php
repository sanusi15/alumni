<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {        
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/index.php');
        $this->load->view('admin/template/footer.php');
    }
    
    public function login()
    {
        $this->load->view('login');
    }

    public function cek_login()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $cek = $this->db->get_where('login', ['username' => $username, 'password' => $pass])->num_rows();
        if($cek >= 1){
            $this->session->set_userdata(['username' => 'Admin']);
            redirect('dashboard');
        }else{
            $this->session->set_flashdata('pesan', 'Login failed, please check username and password!');
            redirect('login');
        }
    }

    public function listData()
    {
        $data['data'] = $this->db->get('alumni')->result_array();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/data.php',$data);
        $this->load->view('admin/template/footer.php');
    }

    public function setTambah()
    {
        $data['title'] = 'Tambah Data';
        $this->load->view('tambah', $data);        
    }

    public function edit($noalumni)
    {
        $data['res'] = $this->db->get_where('alumni', ['no_alumni' => $noalumni])->row_array();
        $data['title'] = 'Edit Data';
        $this->load->view('admin/edit', $data);
    }

    public function update()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['remove_space'] = TRUE;
        $config['file_name'] = 'user';
        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')){
            $data = [
                'no_alumni' => $this->input->post('no_alumni'),
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'jurusan' => $this->input->post('jurusan'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'tempat_lahir' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kontak' => $this->input->post('kontak'),
                'email' => $this->input->post('email'),
                'tahun_lulus' => $this->input->post('thn_lulus'),
                'foto' => $this->upload(),
                'pesan' => $this->input->post('pesan'),
                'judul_tugas_akhir' => $this->input->post('judul')
            ];
        }else{
            $data = [
                'no_alumni' => $this->input->post('no_alumni'),
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'jurusan' => $this->input->post('jurusan'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'tempat_lahir' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kontak' => $this->input->post('kontak'),
                'email' => $this->input->post('email'),
                'tahun_lulus' => $this->input->post('thn_lulus'),                
                'judul_tugas_akhir' => $this->input->post('judul')
            ];
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'nama harus diisi'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required', [
            'required' => 'tanggal lahir harus diisi'
        ]);
        $this->form_validation->set_rules('tempat', 'Tempat lahir', 'required', [
            'required' => 'tempat lahir harus diisi'
        ]);
        $this->form_validation->set_rules('alamat', 'Tempat lahir', 'required', [
            'required' => 'alamat  harus diisi'
        ]);
        $this->form_validation->set_rules('judul', 'Judul tugas akhir', 'required', [
            'required' => 'judul tugas harus diisi'
        ]);
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|max_length[150]', [
            'required' => 'pesan harus diisi',
            'max_length' => 'pesan terlalu panjang'
        ]);
        $this->form_validation->set_rules('nim', 'NIM', 'required|min_length[9]|numeric', [
            'required' => 'nim harus diisi',
            'min_length' => 'nim tidak valid',
            'numeric' => 'nim tidak valid'
        ]);
        $this->form_validation->set_rules('no_alumni', 'No Alumni', 'required|min_length[9]|numeric', [
            'required' => 'no alumni harus diisi',
            'min_length' => 'no alumni tidak valid',
            'numeric' => 'no alumni tidak valid'
        ]);
        $this->form_validation->set_rules('kontak', 'kontak', 'required|max_length[15]|numeric', [
            'required' => 'no telepon harus diisi',
            'max_length' => 'no telepon tidak valid',
            'numeric' => 'no telepon tidak valid'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'email harus diisi',
            'valid_email' => 'email tidak valid'
        ]);
        $this->form_validation->set_rules('thn_lulus', 'Tahun lulus', 'required|numeric|exact_length[4]', [
            'required' => 'tahun harus diisi',
            'exact_length' => 'tahun tidak valid',
            'numeric' => 'isi dengan angka'
        ]);
        $this->form_validation->set_rules('foto', 'Foto', 'is_unique[alumni.foto]', [
            'is_unique' => 'nama foto sudah tersedia',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Data';
            $this->load->view('admin/edit', $data);
        } else {
            $this->Wellcome_model->edit_data($data, $this->input->post('no_alumni'));
            $this->session->set_flashdata('pesan', 'Data Berhasil di Update');
            redirect('formData');
        }       
    }

    public function upload()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['remove_space'] = TRUE;
        $config['file_name'] = 'user';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('pesan', 'Ukuran gambar terlalu besar');
            redirect('');
        } else {
            $this->upload->data();
            return $this->upload->data('file_name');
        }
    }

    public function destroy($noalumni)
    {        
        $this->db->where('no_alumni', $noalumni);
        $this->db->delete('alumni');
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('formData');

    }

}
