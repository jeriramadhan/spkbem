<?php

class MKriteria extends CI_Model
{
    // public $bobot;
    // public $created_at;
    // public $updated_at;
    // public $keterangan

    public function get_entries()
    {
        $query = $this->db->get('kriteria');
        return $query->result();
    }
    function get_entries_status()
    {
        $query = $this->db->get('status');
        return $query->result();
    }
    
    public function get_entries_nilai()
    {
        $query = $this->db->get('batas');
        return $query->result();
    }

    public function get_entries_by_id($id)
    {
        $query = $this->db->get_where('kriteria', ['id' => $id]);
        return $query->row();
    }

    public function insert_entry()
  {
    $this->kriteria       = $_POST['kriteria'];
    $this->keterangan      = $_POST['keterangan'];
    $this->tipe   = $_POST['tipe'];
    $this->bobot       = $_POST['bobot']/100;
    $this->created_at = date('Y-m-d H:i:s');
    
    $this->db->trans_start();
    $this->db->insert('kriteria', $this);
    $this->db->trans_complete();
  }
  
  public function update_entry()
  {
    $this->kriteria       = $_POST['kriteria'];
    $this->keterangan      = $_POST['keterangan'];
    $this->tipe   = $_POST['tipe'];
    $this->bobot       = $_POST['bobot']/100;
    $this->updated_at = date('Y-m-d H:i:s');
    
    $this->db->trans_start();
    $this->db->update('kriteria', $this, ['id' => $_POST['id']]);
    $this->db->trans_complete();
  }
  
  public function delete_entry($id)
  {
    $this->db->trans_start();
    $this->db->delete('kriteria', ['id' => $id]);
    $this->db->trans_complete();
  }

    // public function update_entry($id, $bobot)
    // {
    //     $this->bobot        = $bobot;
    //     $this->updated_at   = date('Y-m-d H:i:s');

    //     $this->db->trans_start();
    //     $this->db->update('kriteria', $this, ['id' => $id]);
    //     $this->db->trans_complete();
    // }

    public function update_keterangan($id, $keterangan)
    {
        $this->keterangan        = $keterangan;
        $this->updated_at   = date('Y-m-d H:i:s');

        $this->db->trans_start();
        $this->db->update('kriteria', $this, ['id' => $id]);
        $this->db->trans_complete();
    }

    function update_nilai($id, $nilai_batas)
    {
        $this->nilai_batas        = $nilai_batas;

        $this->db->trans_start();
        $this->db->update('batas', $this, ['id' => $id]);
        $this->db->trans_complete();
    }

        function update_status($id, $status_pengumuman)
    {
        $this->status_pengumuman        = $status_pengumuman;

        $this->db->trans_start();
        $this->db->update('status', $this, ['id' => $id]);
        $this->db->trans_complete();
    }



}
