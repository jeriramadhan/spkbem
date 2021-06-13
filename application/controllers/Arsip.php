<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('MLogin', 'm_login');
    $this->load->model('MMahasiswa', 'm_mahasiswa');
    $this->load->model('MKriteria', 'm_kriteria');
  }


  function browse_tahun()
  {
    $data['title'] = "Pilih Tahun";
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('arsip/nomor', $data);
    $this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
  }

  // function browse_tampil_nomor()
  // {
  //   $data['title'] = "Tampil Tahun";
  //   $tahun = $this->input->post('tahun');
  //   $data['bttahun'] = $this->m_mahasiswa->browse_nomor($tahun)->result();
  //   $this->load->view('layout/header');
  //   $this->load->view('layout/sidebar');
  //   $this->load->view('arsip/tampil_tahun', $data);
  //   $this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
  // }
  
  public function data()
  {
    $tahun = $this->input->post('tahun');
    
    $data = $this->m_mahasiswa->browse_nomor($tahun)->result();
    // print_r($data);die;
    if ($data == '' || $data == null) {
      $data['title'] = "<p style='color:red;'>Tahun Belum Ada Data";
      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('arsip/nomor', $data);
      $this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
    } else {
  // $data = $this->m_mahasiswa->get_entries();
  $kriteria = $this->m_kriteria->get_entries();

  $c = [];
  $perhitungan_normalisasi = [];
  $perhitungan_bobot = [];
  $nilai_saw = [];

  foreach ($data as $d) {
  foreach ($kriteria as $idx_k => $k) {
  // $jenis = 'c' . ($idx_k + 1);
  $jenis = strtolower($k->kriteria);
  ${$jenis}[] = $d->{$jenis};
  }
  }

  foreach ($kriteria as $idx_k => $k) {
  $jenis = strtolower($k->kriteria);
  if ($k->tipe == 'benefit') {
  $c[$idx_k] = max(${$jenis});
  } else {
  $c[$idx_k] = min(${$jenis});
  }
  }

  foreach ($data as $idx_d => $d) {
  $perhitungan_normalisasi[$idx_d]['nama'] = $d->nama;
  $perhitungan_normalisasi[$idx_d]['departemen'] = $d->departemen;
  $perhitungan_normalisasi[$idx_d]['angkatan'] = $d->angkatan;
  foreach ($kriteria as $idx_k => $k) {
  $jenis = strtolower($k->kriteria);
  ${$jenis}[] = $d->{$jenis};

  if ($k->tipe == 'benefit') {
  $perhitungan_normalisasi[$idx_d][$jenis] = round($d->{$jenis} / $c[$idx_k], 2);
  } else {
  $perhitungan_normalisasi[$idx_d][$jenis] = round($c[$idx_k] / $d->{$jenis}, 2);
  }
  }
  }

  foreach ($perhitungan_normalisasi as $idx_d => $d) {
  $perhitungan_bobot[$idx_d]['nama'] = $d['nama'];
  $perhitungan_bobot[$idx_d]['departemen'] = $d['departemen'];
  $perhitungan_bobot[$idx_d]['angkatan'] = $d['angkatan'];
  $total = 0;
  foreach ($kriteria as $idx_k => $k) {
  $jenis = strtolower($k->kriteria);
  $hasil = round($d[$jenis] * $k->bobot, 2);
  $perhitungan_bobot[$idx_d][$jenis] = $hasil;
  $total += $hasil;
  }
  $perhitungan_bobot[$idx_d]['total'] = $total;
  $nilai_saw[] = $total;
  }

  $i = 0;
  foreach ($nilai_saw as $d) {
  $max = max($nilai_saw);
  $keys = array_search($max, $nilai_saw);
  unset($nilai_saw[$keys]);
  $i++;
  $perhitungan_bobot[$keys]['rank'] = $i;
  }

  $data = $this->m_kriteria->get_entries_nilai();
  $datapengumuman = $this->m_kriteria->get_entries_status();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
  $this->load->view('arsip', ['kriteria_count' => $kriteria, 'perhitungan_normalisasi' => $perhitungan_normalisasi, 'perhitungan_bobot' => $perhitungan_bobot, 'data' => $data, 'datapengumuman'=>$datapengumuman]);
  $this->load->view('layout/footer', ['js' => 'menu/rankingjs']);
  }
}
}