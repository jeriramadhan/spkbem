<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('MLogin', 'm_login');
    $this->load->model('MMahasiswa', 'm_mahasiswa');
    $this->load->model('MKriteria', 'm_kriteria');
  }


  function index()
  {
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('bantuan');
    $this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
  }

}