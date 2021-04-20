<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Mahasiswa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Mahasiswa</a></li>
            <li class="active">Update</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update <?= $data->nama ?></h3>
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
                    <div class="form-group col-md-4">
                        <label>Penilaian 1 </label>
                        <input type="number" class="form-control" name="c1" value="<?= $data->c1 ?>" placeholder="Masukkan Penilaian 1 " required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Penilaian 2 </label>
                        <input type="number" class="form-control" name="c2" value="<?= $data->c2 ?>" placeholder="Masukkan Penilaian 2" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Penilaian 3 </label>
                        <input type="number" class="form-control" name="c3" value="<?= $data->c3 ?>" placeholder="Masukkan Penilaian 3" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Penilaian 4</label>
                        <input type="number" class="form-control" name="c4" value="<?= $data->c4 ?>" placeholder="Masukkan Penilaian 4" required>
                    </div>

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

    </section>
</div>