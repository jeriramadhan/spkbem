<!-- <legend><?php echo $title; ?></legend>
<div class="panel panel-primary"> -->
<!-- <div class="panel-heading"><i class="glyphicon glyphicon-th-large"></i> </div>
<div class="panel-body">
  <form action="<?php echo site_url('arsip/browse_tampil_nomor'); ?>" method="post">
    <div class="form-group">
      <div class="input-group col-sm-3">
        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
        <select name="tahun" class="form-control">
          <?php
          $tahun = 2014;
          for ($i = $tahun; $i <= $tahun + 15; $i++)
            echo "<option value=$i>$i<br></option>";
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="well">
        <button class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Browse</button>
      </div>
    </div>
  </form>
</div>
</div> -->
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
        <h3 class="box-title">Arsip</h3>
      </div>
      <form action="<?php echo site_url('arsip/browse_tampil_nomor'); ?>" method="post">
        <div class="form-group">
          <div class="input-group col-sm-3">
            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            <select name="tahun" class="form-control">
              <?php
              $tahun = 2014;
              for ($i = $tahun; $i <= $tahun + 15; $i++)
                echo "<option value=$i>$i<br></option>";
              ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="well">
            <button class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Browse</button>
          </div>
        </div>
      </form>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <td>Nama</td>
            <td>Departemen</td>
            <td>Angkatan</td>
          </tr>
        </thead>
        <?php $no = 0;
        foreach ($bttahun as $nosur) : $no++; ?>
          <tr>
            <td><?php echo $nosur->nama; ?></td>
            <td><?php echo $nosur->departemen; ?></td>
            <td><?php echo $nosur->angkatan; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>

    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->