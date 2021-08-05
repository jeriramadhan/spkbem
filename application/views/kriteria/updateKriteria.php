<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Ubah Kriteria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Ubah Kriteria</a></li>
            <li class="active">Ubah</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah <?= $data->kriteria ?></h3>
            </div>

            <form role="form" action="<?= site_url('kriteria/updateKriteria/' . $data->id) ?>" method="post" style="padding: 10px 20px">
                <input type="hidden" name="id" value="<?= $data->id ?>" />
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Kriteria</label>
                            <input type="text" class="form-control" name="kriteria" value="<?= $data->kriteria ?>" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="<?= $data->keterangan ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tipe</label>
                            <input type="text" class="form-control" name="tipe" value="<?= $data->tipe ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Bobot</label>
                            <input type="text" class="form-control" name="bobot" value="<?= ($data->bobot)*100 ?>" required>
                        </div>
                    </div>
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