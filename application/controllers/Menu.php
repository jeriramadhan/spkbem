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
		$this->load->model('MMahasiswa', 'm_mahasiswa');
		$this->load->model('MKriteria', 'm_kriteria');
			}

  public function index() {
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/home');
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
  }
  
    public function pendaftar() {
		$data = $this->m_pendaftar->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/pendaftar', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'menu/indexjs']);
	}

	public function createPendaftar()
	{
		if (!empty($_POST)) {
			$this->m_pendaftar->insert_entry();
			redirect('menu/pendaftar');
		}

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/creatependaftar');
		$this->load->view('layout/footer', ['js' => 'menu/createjs']);
	}

	public function updatePendaftar($id)
	{
		if (!empty($_POST)) {
			$this->m_pendaftar->update_entry();
			redirect('menu/pendaftar');
		}

		$data = $this->m_pendaftar->get_entries_by_id($id);
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/updatependaftar', ['data' => $data]);
		$this->load->view('layout/footer', ['js' => 'menu/updatejs']);
	}

	public function deletePendaftar($id)
	{
		$this->m_pendaftar->delete_entry($id);
		redirect('menu/pendaftar');
	}

	public function ranking()
	{
		$data = $this->m_mahasiswa->get_entries();
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

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/ranking', ['kriteria_count'=>$kriteria,'perhitungan_normalisasi' => $perhitungan_normalisasi, 'perhitungan_bobot' => $perhitungan_bobot]);
		$this->load->view('layout/footer', ['js' => 'menu/rankingjs']);
	}

		public function hasil()
	{
		$data = $this->m_mahasiswa->get_entries();
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

		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('menu/hasil', ['kriteria_count' => $kriteria, 'perhitungan_normalisasi' => $perhitungan_normalisasi, 'perhitungan_bobot' => $perhitungan_bobot]);
		$this->load->view('layout/footer', ['js' => 'menu/rankingjs']);
	}

}