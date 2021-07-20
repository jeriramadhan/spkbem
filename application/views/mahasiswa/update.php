<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Update Penilaian Staf
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Penilaian Staf</a></li>
            <li class="active">Ubah</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Penilaian <?= $data->nama ?></h3>
            </div>

            <form role="form" action="<?= site_url('mahasiswa/update/' . $data->id) ?>" method="post" style="padding: 10px 20px">
                <input type="hidden" name="id" value="<?= $data->id ?>" />
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" placeholder="Enter Nama">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr />
                        <small>Penilaian</small>
                    </div>
                    <?php foreach ($kriteria as $i => $d) {
                        $krit = $d->kriteria; ?>

                        <div class="form-group col-md-4">
                            <label>C<?= $i + 1 ?>: <?= $d->keterangan ?></label>
                            <input type="text" class="form-control" name="c<?= $i + 1 ?>" value="<?= $data->$krit ?>" placeholder="Enter Nilai <?= $i + 1 ?>" required>
                        </div>
                    <?php } ?>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Simpan</button>
                </div>
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <p class="text-success">Sukses Mengubah Data !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
</div>