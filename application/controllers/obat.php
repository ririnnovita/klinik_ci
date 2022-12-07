<?php

class obat extends CI_Controller
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
        $this->load->model('model_obat');
    }


    public function index()
    {

        $data['title'] = 'Manajemen Data Obat';
        $data['obat'] = $this->model_obat->tampil_data_obat()->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('obat/v_data', $data);
        $this->load->view('templates_admin/footer');
    }


    public function tambah()
    {

        $data['title'] = 'Tambah Data Obat';

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('obat/v_data_tambah');
        $this->load->view('templates_admin/footer');
    }

    public function insert()
    {
        $n = $this->input->post('nama_obat');

        $data = array(
            'nama_obat' => $n,
        );

        $this->model_obat->insert_data($data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            New Obat Added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('obat');
    }


    public function edit()
    {

        $this->form_validation->set_rules('nama_obat', 'nama obat', 'required');

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
            redirect('obat');
        } else {
            $data = [
                'nama_obat' => $_POST['nama_obat'],
            ];

            $this->db->where('id_obat', $_POST['id_obat']);
            $this->db->update('obat', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Obat Change
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
            );
            redirect('obat');
        }
    }


    public function delete($id)
    {
        $this->db->where('id_obat', $id);
        $this->db->delete('obat');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Obat Deleted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('obat');
    }
}
