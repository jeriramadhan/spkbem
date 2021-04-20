<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login');
            redirect($url);
				};
		$this->load->model('MPendaftar', 'm_pendaftar');
			}

  public function index() {
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/home');
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
  }
  
    public function pendaftar() {
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/pendaftar');
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
	}

	public function createPendaftar()
	{
		if (!empty($_POST)) {
			$this->m_pendaftar->insert_entry();
			redirect('menu');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/creatependaftar');
		$this->load->view('layout/footer', ['js' => 'menu/createjs']);
	}

	public function update($id)
	{
		if (!empty($_POST)) {
			$this->m_mahasiswa->update_entry();
			redirect('mahasiswa');
		}

		$data = $this->m_mahasiswa->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/update', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'mahasiswa/updatejs']);
	}

	public function delete($id)
	{
		$this->m_mahasiswa->delete_entry($id);
		redirect('mahasiswa');
	}

}