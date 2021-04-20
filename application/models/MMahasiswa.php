<?php

class MMahasiswa extends CI_Model
{
    public $nama;
    public $c1;
    public $c2;
    public $c3;
    public $c4;
    public $c5;
    public $created_at;
    public $updated_at;

    public function get_entries()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    public function get_entries_by_id($id)
    {
        $query = $this->db->get_where('mahasiswa', ['id' => $id]);
        return $query->row();
    }

    public function get_nama()
    {
        $query = $this->db->get('pendaftar');
        return $query->result();
    }

    public function insert_entry()
    {
        $this->nama         = $_POST['nama'];
        $this->c1           = $_POST['c1'];
        $this->c2           = $_POST['c2'];
        $this->c3           = $_POST['c3'];
        $this->c4           = $_POST['c4'];
        $this->c5           = $_POST['c5'];
        $this->created_at   = date('Y-m-d H:i:s');

        $this->db->trans_start();
        $this->db->insert('mahasiswa', $this);
        $this->db->trans_complete();
    }

    public function update_entry()
    {
        $this->nama         = $_POST['nama'];
        $this->c1           = $_POST['c1'];
        $this->c2           = $_POST['c2'];
        $this->c3           = $_POST['c3'];
        $this->c4           = $_POST['c4'];
        $this->c5           = $_POST['c5'];
        $this->updated_at   = date('Y-m-d H:i:s');

        $this->db->trans_start();
        $this->db->update('mahasiswa', $this, ['id' => $_POST['id']]);
        $this->db->trans_complete();
    }

    public function delete_entry($id)
    {
        $this->db->trans_start();
        $this->db->delete('mahasiswa', ['id' => $id]);
        $this->db->trans_complete();
    }
}
