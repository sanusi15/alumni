<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['jml_m'] = $this->db->where('status', 'aktif')->get('alumni')->num_rows();
        $data['jml_j'] = $this->db->get('jurusan')->num_rows();
        $data['jml_t'] = $this->db->get('tahun_ajaran')->num_rows();
        $data['jml_r'] = $this->db->get_where('alumni', ['status' => 'pending'])->num_rows();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/index.php', $data);
        $this->load->view('admin/template/footer.php');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function cek_login()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');

        $cek = $this->db->get_where('login', ['username' => $username, 'password' => $pass]);
        if ($cek->num_rows() >= 1) {
            $res = $cek->row();
            $this->session->set_userdata(['username' => $res->username, 'level' => $res->level]);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('pesan', 'Login failed, please check username and password!');
            redirect('login');
        }
    }

    public function mhsRegistrasi()
    {
        $this->db->select('*');
        $this->db->from('alumni t1');
        $this->db->join('jurusan t2', 't1.jurusan = t2.id', 'inner');
        $this->db->join('tahun_ajaran t3', 't1.tahun_lulus = t3.id_tahun', 'inner');
        $this->db->where('status', 'pending');
        $data['data'] = $this->db->get()->result_array();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/mhsregist.php', $data);
        $this->load->view('admin/template/footer.php');
    }

    public function validasi()
    {
        $aksi = $this->input->post('aksi');
        $nisn = $this->input->post('nisn');
        $status = ($aksi == 'Terima') ? 'aktif' : 'nonaktif';
        $data = array(
            'status' => $status
        );
        $this->db->where('nisn', $nisn);
        $this->db->update('alumni', $data);
        $this->session->set_flashdata('msg', 'Berhasil');
        redirect('mhsRegist');
    }

    public function listData()
    {
        $data['data'] = $this->Wellcome_model->get_data_all()->result_array();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/data.php', $data);
        $this->load->view('admin/template/footer.php');
    }

    public function setTambah()
    {
        $data['title'] = 'Tambah Data';
        $data['thn'] = $this->db->get('tahun_ajaran')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/tambah.php', $data);
        $this->load->view('admin/template/footer.php');
    }

    public function save()
    {
        $nama = $this->input->post('nama');
        $nisn = $this->input->post('nisn');
        $password = $this->input->post('password');
        $status_pekerjaan = $this->input->post('status_pekerjaan');
        $thn_lulus = $this->input->post('thn_lulus');
        $jurusan = $this->input->post('jurusan');
        $email = $this->input->post('email');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $alamat = $this->input->post('alamat');
        $kontak = $this->input->post('kontak');

        $data = [
            'status_pekerjaan' => $status_pekerjaan,
            'nisn' => $nisn,
            'password' => $password,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'tanggal_lahir' => $tgl_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'kontak' => $kontak,
            'email' => $email,
            'tahun_lulus' => $thn_lulus,
            'foto' => 'default.jpg',
            'status' => 'aktif',
        ];

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'nama harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'password harus diisi'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required', [
            'required' => 'tanggal lahir harus diisi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required', [
            'required' => 'tempat lahir harus diisi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'alamat  harus diisi'
        ]);
        $this->form_validation->set_rules('nisn', 'NISN', 'required|min_length[10]|numeric', [
            'required' => 'NISN harus diisi',
            'min_length' => 'NISN harus berisi 10 karakter',
            'numeric' => 'NISN tidak valid'
        ]);
        $this->form_validation->set_rules('status_pekerjaan', 'No Alumni', 'required|min_length[9]|numeric', [
            'required' => 'no alumni harus diisi'
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
        $this->form_validation->set_rules('thn_lulus', 'Tahun lulus', 'required|numeric', [
            'required' => 'tahun harus diisi',
            'exact_length' => 'tahun tidak valid',
        ]);

        if ($this->form_validation->run() == false) {
            $data['thn'] = $this->db->get('tahun_ajaran')->result_array();
            $data['jurusan'] = $this->db->get('jurusan')->result_array();
            $data['title'] = 'Tambah Data';
            $this->load->view('admin/template/header.php');
            $this->load->view('admin/tambah.php', $data);
            $this->load->view('admin/template/footer.php');
        } else {
            $this->db->insert('alumni', $data);
            $this->session->set_flashdata('message', 'registrasisukses');
            redirect('formData');
        }
    }

    public function edit($nisn)
    {
        $data['res'] = $this->Wellcome_model->get_data_where($nisn)->row_array();
        $data['title'] = 'Edit Data';
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $data['tahun'] = $this->db->get('tahun_ajaran')->result_array();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/edit.php', $data);
        $this->load->view('admin/template/footer.php');
    }

    public function update()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['remove_space'] = TRUE;
        $config['file_name'] = 'user';
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('foto')) {
            $data = [
                'status_pekerjaan' => $this->input->post('status_pekerjaan'),
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                'jurusan' => $this->input->post('jurusan'),
                'tanggal_lahir' => $this->input->post('tgl_lahir'),
                'tempat_lahir' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kontak' => $this->input->post('kontak'),
                'email' => $this->input->post('email'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'foto' => $this->upload(),
            ];
        } else {
            $data = [
                'status_pekerjaan' => $this->input->post('status_pekerjaan'),
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                'jurusan' => $this->input->post('jurusan'),
                'tanggal_lahir' => $this->input->post('tgl_lahir'),
                'tempat_lahir' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'kontak' => $this->input->post('kontak'),
                'email' => $this->input->post('email'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
            ];
        }

        $this->Wellcome_model->edit_data($data, $this->input->post('nisn'));
        $this->session->set_flashdata('pesan', 'Data Berhasil di Update');
        redirect('formData');
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

    public function report()
    {
        $data['title'] = 'Laporan';
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $data['tahun'] = $this->db->get('tahun_ajaran')->result_array();
        $data['report'] = $this->db->get('report')->result_array();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/report.php', $data);
        $this->load->view('admin/template/footer.php');
    }

    public function print()
    {
        $thnAngkatan = $this->input->post('thn_angkatan');
        $jurusan = $this->input->post('jurusan');
        if ($jurusan == 'all') {
            $jurusan = '';
        }
        $this->data['data'] = $this->Wellcome_model->shorting($jurusan, $thnAngkatan)->result_array();
        $this->data['tahunAngkatan'] = $this->db->select('tahun')->from('tahun_ajaran')->where('id_tahun', $thnAngkatan)->get()->row_array();
        if ($jurusan == '') {
            $this->data['jurusan'] = ['nama_jurusan' => 'Semua Jursan'];
        } else {
            $this->data['jurusan'] = $this->db->select('nama_jurusan')->from('jurusan')->where('id', $jurusan)->get()->row_array();
        }

        $this->load->library('pdfgenerator');
        $file_pdf = 'LaporanDataAlumni';
        $paper = 'A4';
        $orientation = "potrait";
        $html = $this->load->view('admin/print', $this->data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function uploadReport()
    {
        $config['upload_path'] = './assets/filereport/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 5048;
        $config['remove_space'] = TRUE;
        $config['file_name'] = 'file_report';
        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('msgUploadReport', 'failed');
            redirect('report');
        } else {

            $this->upload->data();
            $data = [
                "tgl_report" => $this->input->post('tgl'),
                "keterangan" => $this->input->post('keterangan'),
                "file" => $this->upload->data('file_name'),
            ];
            $insert = $this->db->insert('report', $data);
            if ($insert) {
                $this->session->set_flashdata('msgUploadReport', 'sukses');
                redirect('report');
            }
        }
    }

    public function destroy($noalumni)
    {
        $this->db->where('nisn', $noalumni);
        $this->db->delete('alumni');
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('formData');
    }

    public function logout()
    {
        redirect('admin');
    }
}
