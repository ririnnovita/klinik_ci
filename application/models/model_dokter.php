<?php

class model_dokter extends CI_Model
{
    function tampil_data_dokter()
    {
        return $this->db->get('dokter');
    }

    function insert_data($data)
    {
        return $this->db->insert('dokter', $data);
    }
}
