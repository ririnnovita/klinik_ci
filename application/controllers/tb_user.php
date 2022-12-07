<?php

class Tb_user extends CI_Controller
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
    $this->load->model('model_tb_user');
  }


  public function index()
  {

    $data['title'] = 'Manajemen Data Users';
    $data['tb_user'] = $this->model_tb_user->tampil_data()->result_array();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('tb_user/v_data', $data);
    $this->load->view('templates_admin/footer');
  }


  public function tambah()
  {

    $data['title'] = 'Tambah Data Users';

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('tb_user/v_data_tambah');
    $this->load->view('templates_admin/footer');
  }

  public function insert()
  {
    $u = $this->input->post('username');
    $n = $this->input->post('nama_lengkap');
    $p = $this->input->post('password');

    $data = array(
      'username' => $u,
      'nama_lengkap' => $n,
      'password' => $p
    );

    $this->model_tb_user->insert_data($data);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
      New User Added!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'
    );
    redirect('tb_user');
  }


  public function edit()
  {

    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

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
      redirect('tb_user');
    } else {
      $data = [
        'username' => $_POST['username'],
        'nama_lengkap' => $_POST['nama_lengkap'],
        'password' => $_POST['password']
      ];

      $this->db->where('id', $_POST['id']);
      $this->db->update('tb_user', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
      User Change
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('tb_user');
    }
  }


  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tb_user');
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      User Deleted
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'
    );
    redirect('tb_user');
  }
}
