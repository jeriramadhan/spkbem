<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Penilaian Staf
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Penilaian Staf</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create New</h3>
            </div>

            <form role="form" action="<?= site_url('mahasiswa/create') ?>" method="post" style="padding: 10px 20px">
                <div class="box-body row">
                    <div class="col-md-12 row">
                        <div class="form-group col-md-4">
                            <label>Nama</label>
                              <select class="form-control" id="nama" name="nama">
                                  <?php foreach ($getUser as $row) {
                                echo '<option  value="' . $row->nama . '">' . $row->nama . '</option>';
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <hr />
                        <small>Penilaian</small>
                    </div>
                    <div class="box-body row">
                    <?php foreach ($getKriteria as $i => $d) { ?>
                        <div class="form-group col-md-4">
                            <label>Kriteria <?= $i + 1?>: <?= $d->keterangan?></label>
                            <input type="text" class="form-control" name="c<?= $i + 1 ?>" placeholder="Enter Nilai <?= $i + 1 ?>" required>
                        </div>
                    <?php } ?>
                </div>

                    <!-- <div class="form-group col-md-12">
                        <hr />
                        <small>Penilaian</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Penilaian 1</label>
                        <input type="number" class="form-control" name="c1" placeholder="Masukkan Penilaian" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Penilaian 2</label>
                        <input type="number" class="form-control" name="c2" placeholder="Masukkan Penilaian" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Penilaian 3</label>
                        <input type="number" class="form-control" name="c3" placeholder="Masukkan Penilaian" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Penilaian 4</label>
                        <input type="number" class="form-control" name="c4" placeholder="Masukkan Penilaian" required>
                    </div> -->

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

    </section>
</div>