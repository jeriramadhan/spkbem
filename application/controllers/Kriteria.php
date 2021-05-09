<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            redirect('login');
        };
		$this->load->model('MKriteria', 'm_kriteria');
	}

	public function index()
	{
		$data = $this->m_kriteria->get_entries();

		if (!empty($_POST)) {
			foreach ($data as $i => $d) {
				$this->m_kriteria->update_entry($d->id, $_POST['c' . ($i + 1)]);
			}
			redirect('kriteria');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kriteria/index', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
	}

	public function indexKriteria()
	{
		$data = $this->m_kriteria->get_entries();

		if (!empty($_POST)) {
			foreach ($data as $i => $d) {
				$this->m_kriteria->update_entry($d->id, $_POST['c' . ($i + 1)]);
			}
			redirect('kriteria');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kriteria/indexKriteria', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
	}


	public function createKriteria()
	{
		if (!empty($_POST)) {
			$this->m_kriteria->insert_entry();
			redirect('kriteria/indexKriteria');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kriteria/createKriteria');
		$this->load->view('layout/footer', ['js' => 'menu/createjs']);
	}

	public function updateKriteria($id)
	{
		if (!empty($_POST)) {
			$this->m_kriteria->update_entry();
			redirect('kriteria/indexKriteria');
		}

		$data = $this->m_kriteria->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kriteria/updateKriteria', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'menu/updatejs']);
	}

	public function deleteKriteria($id)
	{
		$this->m_kriteria->delete_entry($id);
		redirect('kriteria/indexKriteria');
	}



		public function keterangan()
	{
		$data = $this->m_kriteria->get_entries();

		if (!empty($_POST)) {
			foreach ($data as $i => $d) {
				$this->m_kriteria->update_keterangan($d->id, $_POST['c' . ($i + 1)]);
			}
			redirect('kriteria/keterangan');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kriteria/keterangan', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
	}

	public function nilai()
	{
		$data = $this->m_kriteria->get_entries_nilai();

		if (!empty($_POST)) {
			foreach ($data as $d) {
				$this->m_kriteria->update_nilai($d->id, $_POST['nilai_batas']);
			}
			redirect('kriteria/nilai');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kriteria/nilai', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
	}

	public function status()
	{
		$data = $this->m_kriteria->get_entries_status();

		if (!empty($_POST)) {
			foreach ($data as $d) {
				$this->m_kriteria->update_status($d->id, $_POST["status_pengumuman"]);
			}
			redirect('kriteria/status');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('kriteria/status', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'kriteria/indexjs']);
	}


}
