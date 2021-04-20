<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pendaftaran Mahasiswa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Pendaftar</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New</h3>
            </div>

            <form role="form" action="<?= site_url('menu/createPendaftar') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Prodi</label>
                            <input type="text" class="form-control" name="prodi" placeholder="Masukkan Prodi" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Fakultas</label>
                            <input type="text" class="form-control" name="fakultas" placeholder="Masukkan Fakultas" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No Telp" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukkan Email" required>
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