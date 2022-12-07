<?php

class berobat extends CI_Controller
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
        $this->load->model('model_berobat');
        $this->load->model('model_pasien');
        $this->load->model('model_dokter');
        $this->load->model('model_obat');
    }


    public function index()
    {

        $data['title'] = 'Data Kunjungan/Berobat';
        $data['berobat'] = $this->model_berobat->tampil_data_berobat()->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('berobat/v_data', $data);
        $this->load->view('templates_admin/footer');
    }


    public function tambah()
    {

        $data['title'] = 'Kunjungan Baru';

        $data['pasien'] = $this->model_pasien->tampil_data_pasien()->result_array();
        $data['dokter'] = $this->model_dokter->tampil_data_dokter()->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('berobat/v_data_tambah', $data);
        $this->load->view('templates_admin/footer');
    }

    public function insert()
    {
        $t = $this->input->post('tgl_berobat');
        $p = $this->input->post('pasien');
        $d = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $t,
            'id_pasien' => $p,
            'id_dokter' => $d,
        );

        $this->model_berobat->insert_data($data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            New Kunjungan Added!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('berobat');
    }


    public function edit($id)
    {

        $data['title'] = 'Edit Data Kunjungan/Berobat';

        $where = array('id_berobat' => $id);
        $data['edit'] = $this->model_berobat->edit_data($where)->row_array();

        $data['pasien'] = $this->model_pasien->tampil_data_pasien()->result_array();
        $data['dokter'] = $this->model_dokter->tampil_data_dokter()->result_array();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('berobat/v_data_edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_berobat');
        $t = $this->input->post('tgl_berobat');
        $p = $this->input->post('pasien');
        $d = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $t,
            'id_pasien' => $p,
            'id_dokter' => $d,
        );

        $where = array('id_berobat' => $id);
        $this->model_berobat->update_data($data, $where);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Kunjungan Change
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('berobat');
    }


    public function delete($id)
    {
        $this->db->where('id_berobat', $id);
        $this->db->delete('berobat');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Pasien Deleted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('berobat');
    }

    public function rekam($id)
    {
        $data['title'] = 'Reakam Medis';

        // tampilkan detail rekam media
        $data['tampil'] = $this->model_berobat->tampil_rekam($id)->row_array();

        // tampilkan riwayat kunjungan
        $q = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat='$id'")->row_array();
        $id_pasien = $q['id_pasien'];
        $data['riwayat'] = $this->model_berobat->tampil_riwayat($id_pasien)->result_array();

        // tamoilkan data obat di combo
        $data['obat'] = $this->model_obat->tampil_data_obat()->result_array();

        // untuk menampilkan resep obat
        $data['resep'] = $this->model_berobat->tampil_resep($id)->result_array();

        // var_dump($data['resep']);
        // die;


        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('berobat/v_rekam_medis', $data);
        $this->load->view('templates_admin/footer');
    }

    public function insert_rekam()
    {
        $id_berobat = $this->input->post('id');
        $keluhan = $this->input->post('keluhan');
        $diagnosa = $this->input->post('diagnosa');
        $penatalaksanaan = $this->input->post('penatalaksanaan');

        $data = array(
            'keluhan_pasien' => $keluhan,
            'hasil_diagnosa' => $diagnosa,
            'penatalaksanaan' => $penatalaksanaan,
        );

        $where = array('id_berobat' => $id_berobat);
        $this->model_berobat->update_data($data, $where);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            New Rekam Medis Added
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('berobat/rekam/' . $id_berobat);
    }

    public function insert_resep()
    {
        $id_berobat = $this->input->post('id');
        $obat = $this->input->post('obat');

        $data = array(
            'id_berobat' => $id_berobat,
            'id_obat' => $obat
        );

        $this->model_berobat->insert_resep($data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            New Resep Obat Added
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('berobat/rekam/' . $id_berobat);
    }

    public function hapus_resep($id, $id_berobat)
    {
        $where = array('id_resep' => $id);
        $this->model_berobat->hapus_resep($where);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Resep Obat Deleted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('berobat/rekam/' . $id_berobat);
    }
}
