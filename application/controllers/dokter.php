<?php

class dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
        $this->load->model('model_dokter');
    }


    public function index()
    {

        $data['title'] = 'Manajemen Data Dokter';
        $data['dokter'] = $this->model_dokter->tampil_data_dokter()->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('dokter/v_data_dokter', $data);
        $this->load->view('templates_admin/footer');
    }


    public function tambah()
    {

        $data['title'] = 'Tambah Data Dokter';

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('dokter/v_data_tambah');
        $this->load->view('templates_admin/footer');
    }

    public function insert()
    {
        $n = $this->input->post('nama_dokter');

        $data = array(
            'nama_dokter' => $n,
        );

        $this->model_dokter->insert_data($data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            New Dokter Added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('dokter');
    }


    public function edit()
    {

        $this->form_validation->set_rules('nama_dokter', 'nama dokter', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Change Failed
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('dokter');
        } else {
            $data = [
                'nama_dokter' => $_POST['nama_dokter'],
            ];

            $this->db->where('id_dokter', $_POST['id_dokter']);
            $this->db->update('dokter', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Dokter Change
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('dokter');
        }
    }


    public function delete($id)
    {
        $this->db->where('id_dokter', $id);
        $this->db->delete('dokter');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Dokter Deleted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('dokter');
    }
}
