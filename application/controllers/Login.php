  <?php
  defined('BASEPATH') or exit('No direct script access allowed');
  
  class Login extends CI_Controller
  {

    function __construct(){
        parent:: __construct();
        $this->load->model('MLogin','m_login');
        $this->load->model('MMahasiswa','m_mahasiswa');
        $this->load->model('MKriteria','m_kriteria');

    }

    public function index() {
      if($this->session->userdata('masuk')==true){
        redirect('login/berhasillogin');
      }else{

         $this->load->view('layout/header-umum');
         $this->load->view('login/index');
      }
    }

  public function pengumuman()
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

    $data = $this->m_kriteria->get_entries_nilai();
    $datapengumuman = $this->m_kriteria->get_entries_status();
		$this->load->view('layout/header-umum');
		// $this->load->view('layout/sidebar');
		$this->load->view('pengumuman', ['kriteria_count' => $kriteria, 'perhitungan_normalisasi' => $perhitungan_normalisasi, 'perhitungan_bobot' => $perhitungan_bobot, 'data' => $data, 'datapengumuman'=>$datapengumuman]);
		$this->load->view('layout/footer', ['js' => 'menu/rankingjs']);
	}

    function auth(){
      $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
      $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
      $u=$username;
      $p=$password;
      $cadmin=$this->m_login->cekadmin($u,$p);
      if($cadmin->num_rows() > 0){
        $this->session->set_userdata('masuk',true);
        $this->session->set_userdata('user',$u);
        $xcadmin=$cadmin->row_array();
        if($xcadmin['pengguna_level']=='1')
        $this->session->set_userdata('akses','1');
        $idadmin=$xcadmin['pengguna_id'];
        $user_nama=$xcadmin['pengguna_nama'];
        $this->session->set_userdata('idadmin',$idadmin);
        $this->session->set_userdata('nama',$user_nama);
        
        if($xcadmin['pengguna_level']=='2'){
          $this->session->set_userdata('akses','2');
          $idadmin=$xcadmin['pengguna_id'];
          $user_nama=$xcadmin['pengguna_nama'];
          $this->session->set_userdata('idadmin',$idadmin);
          $this->session->set_userdata('nama',$user_nama);
        } 
        
      }
      
      if($this->session->userdata('masuk')==true){
        redirect('login/berhasillogin');
      }else{
        redirect('login/gagallogin');
      }
    }

    function berhasillogin(){
      redirect('menu');
    }

    function gagallogin(){
      // $url=base_url('login');
      echo $this->session->set_flashdata('msg','<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username Atau Password Salah</div>');
      redirect('login');
    }

    function logout(){
      $this->session->sess_destroy();
      // $url=base_url('login');
      redirect('login');
    }
    
  }