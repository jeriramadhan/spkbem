<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Input Data Staf
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Input Data Staf</a></li>
            <li class="active">Update</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Data <?= $data->nama ?></h3>
            </div>

            <form role="form" action="<?= site_url('menu/updatePendaftar/' . $data->id) ?>" method="post" style="padding: 10px 20px">
                <input type="hidden" name="id" value="<?= $data->id ?>" />
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Departemen</label>
                            <input type="text" class="form-control" name="departemen" value="<?= $data->departemen ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="<?= $data->jenis_kelamin ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>No Pengurus</label>
                            <input type="text" class="form-control" name="no_pengurus" value="<?= $data->no_pengurus ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Angkatan</label>
                            <input type="text" class="form-control" name="angkatan" value="<?= $data->angkatan ?>" required>
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

    </section>
</div>