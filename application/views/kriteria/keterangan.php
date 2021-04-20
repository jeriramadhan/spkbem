<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kriteria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Kriteria</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Kriteria</h3>
            </div>

            <form role="form" action="<?= site_url('kriteria/keterangan') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <?php foreach ($data as $i => $d) { ?>
                        <div class="form-group col-md-4">
                            <label>Kriteria <?= $i + 1?>: <?= $d->keterangan?></label>
                            <input type="text" class="form-control" name="c<?= $i + 1 ?>" value="<?= $d->keterangan ?>" placeholder="Enter Kriteria <?= $i + 1 ?>" required>
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