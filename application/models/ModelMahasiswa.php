<?php

class ModelMahasiswa extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('siswa');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
