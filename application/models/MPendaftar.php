<?php

class MPendaftar extends CI_Model
{
  public $nama;
  public $departemen;
  public $jenis_kelamin;
  public $no_pengurus;
  public $email;
  public $created_at;
  public $updated_at;
  
  public function get_entries()
  {
    $query = $this->db->get('pendaftar');
    return $query->result();
  }
  
  public function get_entries_by_id($id)
  {
    $query = $this->db->get_where('pendaftar', ['id' => $id]);
    return $query->row();
  }
  
  public function insert_entry()
  {
    $this->nama       = $_POST['nama'];
    $this->departemen      = $_POST['departemen'];
    $this->jenis_kelamin   = $_POST['jenis_kelamin'];
    $this->no_pengurus       = $_POST['no_pengurus'];
    $this->email      = $_POST['email'];
    $this->created_at = date('Y-m-d H:i:s');
    
    $this->db->trans_start();
    $this->db->insert('pendaftar', $this);
    $this->db->trans_complete();
  }
  
  public function update_entry()
  {
    $this->nama       = $_POST['nama'];
    $this->departemen      = $_POST['departemen'];
    $this->jenis_kelamin   = $_POST['jenis_kelamin'];
    $this->no_pengurus       = $_POST['no_pengurus'];
    $this->email      = $_POST['email'];
    $this->updated_at = date('Y-m-d H:i:s');
    
    $this->db->trans_start();
    $this->db->update('pendaftar', $this, ['id' => $_POST['id']]);
    $this->db->trans_complete();
  }
  
  public function delete_entry($id)
  {
    $this->db->trans_start();
    $this->db->delete('pendaftar', ['id' => $id]);
    $this->db->trans_complete();
  }
}
