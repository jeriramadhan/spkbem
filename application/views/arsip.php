<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Arsip
    </h1>
    <ol class="breadcrumb">
      <li><a href="#">Arsip</a></li>
      <li class="active">Index</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Pilih Tahun</h3>
      </div>

      <form class="form-inline" action="<?php echo site_url('arsip/data'); ?>" method="post">
        <div class="form-group well">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            <select name="tahun" class="form-control">
              <?php
              $tahun = 2016;
              for ($i = $tahun; $i <= $tahun + 7; $i++)
                echo "<option value=$i>$i<br></option>";
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mb-2">Tampilkan</button>
        </div>

      </form>

      <div class="box-body">
        <table id="table2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th width="50" style="text-align:center">No</th>
              <th width="250" style="text-align:center">Nama</th>
              <?php foreach ($kriteria_count as $i => $v) { ?>
                <th style="text-align:center"><?php echo $v->kriteria; ?> </th>
              <?php } ?>
              <th style="text-align:center">Total</th>
              <th style="text-align:center">Ranking</th>
              <th style="text-align:center">Departemen</th>
              <th style="text-align:center">Angkatan</th>
              <th style="text-align:center">Penilaian</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($perhitungan_bobot as $k => $v) {
              echo '<tr>';
              echo '<td style="text-align:center">' . ($k + 1) . '</td>';
              echo '<td>' . $v['nama'] . '</td>';
              foreach ($kriteria_count as $i => $data2) {
                echo '<td style="text-align:center">' . $v[$data2->kriteria] . '</td>';
              }
              echo '<td style="text-align:center">' . $v['total'] . '</td>';
              echo '<td style="text-align:center">' . $v['rank'] . '</td>';
              echo '<td style="text-align:center">' . $v['departemen'] . '</td>';
              echo '<td style="text-align:center">' . $v['angkatan'] . '</td>';
              foreach ($data as $d) {
                $datanilaibatas = $d->nilai_batas;
              }
              if ($v['total'] >= 0.70 && $v['total'] < 0.81) {
                echo '<td style="text-align:center">B</td>';
              } else if ($v['total'] < 0.66 && $v['total'] >= 0.50) {
                echo '<td style="text-align:center">C</td>';
              } else if ($v['total'] < 0.50) {
                echo '<td style="text-align:center">D</td>';
              } else {
                echo '<td style="text-align:center">A</td>';
              }
              echo '</tr>';
            } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.box -->
    <ul>
      <strong><i><u>Keterangan</u></i></strong>
      <br>
      <?php foreach ($kriteria_count as $i => $v) { ?>
        <li><?php echo $v->kriteria . " adalah " . $v->keterangan; ?> </li>
      <?php } ?>
    </ul>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->