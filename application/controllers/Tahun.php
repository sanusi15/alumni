<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun extends CI_Controller
{

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
        $data['tahun'] = $this->db->get('tahun_ajaran')->result_array();
        $this->load->view('admin/template/header.php');
        $this->load->view('admin/tahun.php', $data);
        $this->load->view('admin/template/footer.php');
    }

    public function simpan()
    {
        $data = [
            'tahun' => $this->input->post('tahun'),
        ];

        $this->db->insert('tahun_ajaran', $data);
        $this->session->set_flashdata('pesan', 'Tahun Lulus berhasil ditambah');
        redirect('tahun');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = [
            'tahun' => $this->input->post('tahun'),
        ];

        $this->db->where('id_tahun', $id);
        $this->db->update('tahun_ajaran', $data);
        $this->session->set_flashdata('pesan', 'Data Tahun berhasil diubah');
        redirect('tahun');
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->db->delete('tahun_ajaran', ['id_tahun' => $id]);
        $this->session->set_flashdata('pesan', 'Data Tahun berhasil dihapus');
        redirect('tahun');
    }
}
