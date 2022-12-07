<?php

class model_tb_user extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tb_user');
    }

    function insert_data($data)
    {
        return $this->db->insert('tb_user', $data);
    }
}
