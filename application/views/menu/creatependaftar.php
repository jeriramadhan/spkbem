<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Input Data Staf
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Input Data Staf</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Buat Baru</h3>
            </div>

            <form role="form" action="<?= site_url('menu/createPendaftar') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Departemen</label>
                            <input type="text" class="form-control" name="departemen" placeholder="Masukkan Departemen" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>No Pengurus</label>
                            <input type="text" class="form-control" name="no_pengurus" placeholder="Masukkan Pengurus" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Angkatan</label>
                            <input type="text" class="form-control" name="angkatan" placeholder="Masukkan angkatan" required>
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