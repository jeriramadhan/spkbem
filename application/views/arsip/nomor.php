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

      <form action="<?php echo site_url('arsip/data'); ?>" method="post">
        <div class="form-group">
          <div class="input-group col-sm-3">
            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            <select name="tahun" class="form-control">
              <?php
              $tahun = 2016;
              for ($i = $tahun; $i <= $tahun + 7; $i++)
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
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->