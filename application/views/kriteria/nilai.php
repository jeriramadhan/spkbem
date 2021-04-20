<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Nilai Batas Kelulusan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Nilai</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Nilai Batas</h3>
            </div>

            <form role="form" action="<?= site_url('kriteria/nilai') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <?php foreach ($data as $d) { ?>
                        <div class="form-group col-md-4">
                            <label>Nilai Batas Kelulusan Saat ini = <span class="label label-info"><?= $d->nilai_batas ?></span> </label>
                            <br><br>
                            <label>Ubah Nilai Batas</label><br>
                            <input type="text" class="form-control" name="nilai_batas" value="<?= $d->nilai_batas ?>" placeholder="Enter Nilai" required>
                        </div>
                    <?php } ?>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>


        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->