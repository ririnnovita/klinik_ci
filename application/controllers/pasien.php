<?php

class pasien extends CI_Controller
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
    $this->load->model('model_pasien');
  }


  public function index()
  {

    $data['title'] = 'Manajemen Data Pasien';
    $data['pasien'] = $this->model_pasien->tampil_data_pasien()->result_array();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('pasien/v_data', $data);
    $this->load->view('templates_admin/footer');
  }


  public function tambah()
  {

    $data['title'] = 'Tambah Data Pasien';

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('pasien/v_data_tambah');
    $this->load->view('templates_admin/footer');
  }

  public function insert()
  {
    $n = $this->input->post('nama_pasien');
    $j = $this->input->post('jenis_kelamin');
    $u = $this->input->post('umur');

    $data = array(
      'nama_pasien' => $n,
      'jenis_kelamin' => $j,
      'umur' => $u
    );

    $this->model_pasien->insert_data($data);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
            New Pasien Added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
    );
    redirect('pasien');
  }


  public function edit()
  {

    $this->form_validation->set_rules('nama_pasien', 'nama pasien', 'required');
    $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
    $this->form_validation->set_rules('umur', 'umur', 'required');

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
      redirect('pasien');
    } else {
      $data = [
        'nama_pasien' => $_POST['nama_pasien'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'umur' => $_POST['umur']
      ];

      $this->db->where('id_pasien', $_POST['id_pasien']);
      $this->db->update('pasien', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Pasien Change
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>'
      );
      redirect('pasien');
    }
  }


  public function delete($id)
  {
    $this->db->where('id_pasien', $id);
    $this->db->delete('pasien');
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Pasien Deleted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
    );
    redirect('pasien');
  }
}
