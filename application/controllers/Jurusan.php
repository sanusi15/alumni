<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

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
		$data['jurusan'] = $this->db->get('jurusan')->result_array();
		$this->load->view('admin/template/header.php');
		$this->load->view('admin/jurusan.php', $data);
		$this->load->view('admin/template/footer.php');
	}

    public function simpan()
    {
        $data = [
            'nama_jurusan' => $this->input->post('nama'),
        ];

        $this->db->insert('jurusan', $data);
        $this->session->set_flashdata('pesan', 'Data jurusan berhasil ditambah');
        redirect('jurusan');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'nama_jurusan' => $this->input->post('nama'),
        ];

        $this->db->where('id', $id);
        $this->db->update('jurusan', $data);
        $this->session->set_flashdata('pesan', 'Data jurusan berhasil diubah');
        redirect('jurusan');
    }
    
    public function delete()
    {
        $id = $this->input->post('id');        
        $this->db->delete('jurusan', ['id' => $id]);
        $this->session->set_flashdata('pesan', 'Data jurusan berhasil dihapus');
        redirect('jurusan');
    }
	

}