<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= "https://yt3.ggpht.com/ytc/AAUvwnhFbgDmIOMUDgw1arSeUWk3t-Lkyou6WluvrmRRtA=s900-c-k-c0x00ffffff-no-rj" ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <!-- ini fungsi bikin menu -->
      <li><a href="<?= site_url('menu') ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
      <li class="<?php if ($this->uri->segment(1) == "menu" && $this->uri->segment(2) == "pendaftar") {
                    echo "active";
                  } ?>"><a href="<?= site_url('menu/pendaftar') ?>"><i class="fa fa-user"></i> <span>Input Data Staf</span></a></li>
      <li class="<?php if ($this->uri->segment(1) == "kriteria" && $this->uri->segment(2) == "IndexKriteria") {
                    echo "active";
                  } ?>"><a href="<?= site_url('kriteria/IndexKriteria') ?>"><i class="fa fa-file-pdf-o"></i> <span>Data Kriteria</span></a></li>
      <li class="<?php if ($this->uri->segment(1) == "mahasiswa") {
                    echo "active";
                  } ?>"><a href="<?= site_url('mahasiswa') ?>"><i class="fa fa-hourglass"></i> <span>Penilaian Staf</span></a></li>
      <!-- <li><a href="<?= site_url('kriteria') ?>"><i class="fa fa-file-pdf-o"></i> <span>Atribut</span></a></li> -->
      <li class="<?php if ($this->uri->segment(1) == "menu" && $this->uri->segment(2) == "hasil") {
                    echo "active";
                  } ?>"><a href="<?= site_url('menu/hasil') ?>"><i class="fa fa-list-ol"></i> <span>Hasil</span></a></li>
      <li class="<?php if ($this->uri->segment(1) == "menu" && $this->uri->segment(2) == "ranking") {
                    echo "active";
                  } ?>"><a href="<?= site_url('menu/ranking') ?>"><i class="fa   fa-line-chart"></i> <span>Ranking</span></a></li>
      <li class="<?php if ($this->uri->segment(1) == "kriteria" && ($this->uri->segment(2) == "nilai" || $this->uri->segment(2) == "nilai")) {
                    echo "active";
                  } ?> treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Pengaturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if ($this->uri->segment(2) == "nilai") {
                        echo "active";
                      } ?>"><a href="<?= site_url('kriteria/nilai') ?>"><i class="fa fa-circle-o"></i> Batas Kelulusan</a></li>
          <li class="<?php if ($this->uri->segment(2) == "status") {
                        echo "active";
                      } ?>"><a href="<?= site_url('kriteria/status') ?>"><i class="fa fa-circle-o"></i> Status Pengumuman</a></li>
          <!-- <li><a href="<?= site_url('kriteria/keterangan') ?>"><i class="fa fa-circle-o"></i> Keterangan</a></li> -->

        </ul>
      </li>
      <li class="<?php if ($this->uri->segment(1) == "arsip") {
                    echo "active";
                  } ?>"><a href="<?= site_url('arsip/browse_tahun') ?>"><i class="fa fa-file-pdf-o"></i> <span>Data Arsip</span></a></li>
      <!-- <li><a href="<?= site_url('login/logout') ?>"><i class="fa fa-user"></i> <span>Logout</span></a></li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>