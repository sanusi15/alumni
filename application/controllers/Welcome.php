<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$isi = $this->input->post('keyword');
		if (!$isi) {
			$data['alumni'] = $this->db->get('alumni')->result_array();
		} else {
			$data['alumni'] = $this->Wellcome_model->cari_data($isi);
		}
		$data['tahun'] = $this->db->get('tahun_ajaran')->result_array();
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$this->load->view('index', $data);
	}

	public function getViewCard()
	{
		if ($this->input->post()) {
			if ($this->input->post('nama')) {
				$nama = $this->input->post('nama');
				$getData = $this->Wellcome_model->cari_data($nama)->result_array();
			} else {
				if ($this->input->post('jurusan') == '' && $this->input->post('tahun_ajaran') == '') {
					$getData = $this->Wellcome_model->get_data_all()->result_array();
				} else {
					$jurusan = $this->input->post('jurusan');
					$tahun_ajaran = $this->input->post('tahun_ajaran');
					$getData = $this->Wellcome_model->shorting($jurusan, $tahun_ajaran)->result_array();
				}
			}
		}
		$data['alumni'] = $getData;
		$this->load->view('card', $data);
	}

	public function about()
	{
		$isi = $this->input->post('keyword');
		if (!$isi) {
			$data['alumni'] = $this->db->get('alumni')->result_array();
		} else {
			$data['alumni'] = $this->Wellcome_model->cari_data($isi);
		}
		$data['tahun'] = $this->db->get('tahun_ajaran')->result_array();
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$this->load->view('about', $data);
	}

	public function dahsboard()
	{
		$mhsLogin = $this->session->userdata('session');
		$data['mhs'] = $this->db->get_where('alumni', ['nim' => $mhsLogin['nim']])->row_array();

		$this->load->view('mahasiswa/template/header', $data);
		$this->load->view('mahasiswa/dashboard', $data);
		$this->load->view('mahasiswa/template/footer');
	}

	public function login()
	{
		$this->load->view('mahasiswa/login');
	}

	public function proseslogin()
	{
		$nisn = $this->input->post('nisn');
		$password = $this->input->post('password');
		$cekNisn = $this->db->get_where('alumni', ['nisn' => $nisn]);
		if ($cekNisn->num_rows() >= 1) {
			$userLogin = $cekNisn->row_array();
			if ($password == $userLogin['password']) {
				if ($userLogin['status'] == 'nonaktif') {
					$this->session->set_flashdata('message', 'Login Ditolak');
					redirect('loginmhs');
				}
				$dataSession = ['nisn' => $userLogin['nisn']];
				$this->session->set_userdata($dataSession);
				$this->session->set_flashdata('message', 'Login sukses');
				redirect('mahasiswa');
			} else {
				$this->session->set_flashdata('message', 'Login Gagal');
				redirect('loginmhs');
			}
		} else {
			$this->session->set_flashdata('message', 'Login Gagal');
			redirect('loginmhs');
		}
	}

	public function daftar()
	{
		$data['thn'] = $this->db->get('tahun_ajaran')->result_array();
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$this->load->view('mahasiswa/daftar', $data);
	}

	public function regist()
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
			'status' => 'pending',
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
		$this->form_validation->set_rules('status_pekerjaan', 'Status Pekerjaan', 'required', [
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
			$this->load->view('mahasiswa/daftar', $data);
		} else {
			$this->db->insert('alumni', $data);
			$this->session->set_flashdata('message', 'registrasisukses');
			redirect('Welcome/login');
		}
	}

	public function setTambah()
	{
		if (!$this->session->userdata('admin')) {
			$this->load->view('login.php');
		} else {
			$data['title'] = 'Tambah Data';
			$this->load->view('tambah', $data);
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
			$upload_data = $this->upload->data();
			return $upload_data['file_name'];
		}
	}

	public function getDetailCard()
	{
		$nisn = $this->input->post('data');
		$query = $this->Wellcome_model->get_data_all($nisn)->row_array();
		echo json_encode($query);
	}

	public function getDataRegist()
	{
		$id = $this->input->post('id');
		$query = $this->Wellcome_model->get_data_where_id($id)->row_array();
		echo json_encode($query);
	}
}
