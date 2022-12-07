<?php

class model_obat extends CI_Model
{
    function tampil_data_obat()
    {
        return $this->db->get('obat');
    }

    function insert_data($data)
    {
        return $this->db->insert('obat', $data);
    }
}
