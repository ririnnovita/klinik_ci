<?php

class Laporan extends CI_Controller
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
        $this->load->model('model_pasien');
        $this->load->model('model_berobat');
    }


    public function index()
    {

        redirect('admin/dashboard');
    }

    function data_dokter()
    {
        $data['title'] = 'Laporan Data Dokter';
        $data['dokter'] = $this->model_dokter->tampil_data_dokter()->result_array();

        $this->load->view('laporan/v_lap_dokter', $data);
    }
    function data_pasien()
    {
        $data['title'] = 'Laporan Data Pasien';
        $data['pasien'] = $this->model_pasien->tampil_data_pasien()->result_array();

        $this->load->view('laporan/v_lap_pasien', $data);
    }
    function data_berobat()
    {
        $data['title'] = 'Laporan Data Kunjungan';
        $data['berobat'] = $this->model_berobat->tampil_data_berobat()->result_array();

        $this->load->view('laporan/v_lap_berobat', $data);
    }
}
