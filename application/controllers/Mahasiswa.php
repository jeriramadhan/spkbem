<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            redirect('login');
        };
		$this->load->model('MMahasiswa', 'm_mahasiswa');
		$this->load->model('MKriteria', 'm_kriteria');
		$this->load->model('MPendaftar', 'm_pendaftar');
	}

	public function index()
	{
		$data = $this->m_mahasiswa->get_entries();
		$kriteria = $this->m_kriteria->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/index', ['data' => $data,'kriteria_count' => $kriteria]);
		$this->load->view('layout/footer', ['js' => 'mahasiswa/indexjs']);
	}

	public function create()
	{
		if (!empty($_POST)) {
			$this->m_mahasiswa->insert_entry();
			redirect('mahasiswa');
		}
		$data['getKriteria'] = $this->m_kriteria->get_entries();
		$data['getUser'] = $this->m_pendaftar->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/create',$data);
		$this->load->view('layout/footer', ['js' => 'mahasiswa/createjs']);
	}

	public function update($id)
	{
		if (!empty($_POST)) {
			$this->m_mahasiswa->update_entry();
			redirect('mahasiswa');
		}

		$data = $this->m_mahasiswa->get_entries_by_id($id);
		$kriteria = $this->m_kriteria->get_entries();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('mahasiswa/update', ['kriteria'=> $kriteria, 'data' => $data]);
		$this->load->view('layout/footer', ['js' => 'mahasiswa/updatejs']);
	}

	public function delete($id)
	{
		$this->m_mahasiswa->delete_entry($id);
		redirect('mahasiswa');
	}

	public function view_saw()
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
		$this->load->view('mahasiswa/view_saw', ['perhitungan_normalisasi' => $perhitungan_normalisasi, 'perhitungan_bobot' => $perhitungan_bobot]);
		$this->load->view('layout/footer', ['js' => 'mahasiswa/view_sawjs']);
	}
}
