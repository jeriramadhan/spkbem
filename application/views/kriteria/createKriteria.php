<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Input Kriteria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Input Kriteria</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Buat Baru</h3>
            </div>

            <form role="form" action="<?= site_url('kriteria/createKriteria') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Kriteria</label>
                            <input type="text" class="form-control" name="kriteria" placeholder="Masukkan kriteria" required>
                        </div>
                        <!-- ganti sesuai kolom -->
                        <div class="form-group col-md-4">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tipe</label>
                            <input type="text" class="form-control" name="tipe" placeholder="Masukkan tipe" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Bobot</label>
                            <input type="text" class="form-control" name="bobot" placeholder="Masukkan bobot" required>
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