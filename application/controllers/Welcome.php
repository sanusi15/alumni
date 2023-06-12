<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{				
		$isi = $this->input->post('keyword');
		if(!$isi){
			$data['alumni'] = $this->db->get('alumni')->result_array();
		}else{
			$data['alumni'] = $this->Wellcome_model->cari_data($isi);
		}
		$this->load->view('index', $data);
	}
	
	
	public function getNim($data){		
		$this->Wellcome_model->send_data($data);		
	}

	public function cari($thn){
		if($thn === 'tm' || $thn === 'te' || $thn === 'mi'){
			$data['alumni'] = $this->Wellcome_model->shortingJurusan($thn);
		}else{
			$data['alumni'] = $this->Wellcome_model->shortingTahun($thn);
		}
		$this->load->view('index', $data);
	}

	public function setTambah(){
		if (!$this->session->userdata('admin')) {
			$this->load->view('login.php');
		} else {
			$data['title'] = 'Tambah Data';
			$this->load->view('tambah', $data);
		}
	}

	public function tambahData()
	{				
		$data = [
			'no_alumni' => $this->input->post('no_alumni'),
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'jurusan' =>$this->input->post('jurusan'),
			'tgl_lahir' =>$this->input->post('tgl_lahir'),
			'tempat_lahir' =>$this->input->post('tempat'),
			'alamat' =>$this->input->post('alamat'),
			'kontak' =>$this->input->post('kontak'),
			'email' =>$this->input->post('email'),
			'tahun_lulus' =>$this->input->post('thn_lulus'),
			'foto' =>$this->upload(),
			'pesan' =>$this->input->post('pesan'),
			'judul_tugas_akhir' =>$this->input->post('judul')
		];

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
			'exact_length'=> 'tahun tidak valid',
			'numeric' => 'isi dengan angka'
		]);
		$this->form_validation->set_rules('foto', 'Foto', 'is_unique[alumni.foto]', [
			'is_unique'=> 'nama foto sudah tersedia',
		]);
		
		if($this->form_validation->run() == false){
			$data['title'] = 'Tambah Data';
			$this->load->view('tambah', $data);
		}else{
			$this->Wellcome_model->tambah_data($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil di Tambahkan');
			redirect('formData');
		}
	}

	public function upload(){
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
						
		}

	}

		

}
