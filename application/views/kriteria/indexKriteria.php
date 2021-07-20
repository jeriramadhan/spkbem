<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Kriteria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Data Kriteria</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <!-- <a href="<?= site_url('mahasiswa/view_saw') ?>" class="btn btn-primary">Perangkingan</a> -->
                <a href="<?= site_url('kriteria/createKriteria') ?>" class="btn btn-success">Tambah</a>
            </div>

            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50" style="text-align:center">No</th>
                            <th width="200" style="text-align:center">Kriteria</th>
                            <th width="350" style="text-align:center">Keterangan</th>
                            <th style="text-align:center">Nilai Atribut</th>
                            <th width="100" style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td style="text-align:center">' . $v->kriteria . '</td>';
                            echo '<td style="text-align:center">' . $v->keterangan . '</td>';
                            echo '<td style="text-align:center">' . $v->bobot . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('kriteria/updateKriteria/' . $v->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a data-toggle="modal" data-target="#delete' . $v->id . '" title="Hapus"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php foreach ($data as $k => $v) { ?>
        <div id="delete<?php echo $v->id ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Anda Yakin Akan Menghapus Data <p class="text-danger"><?php echo $v->keterangan; ?> ?</p>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="clearfix">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Batal</button>
                            <a class="btn btn-danger" href="<?= site_url('kriteria/deleteKriteria/' . $v->id) ?>" role="button">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <strong><u>Keterangan</u></strong>
        <ul>
            <li>Jumlah nilai bobot<strong> HARUS </strong>berjumlah total bobot 1.</li>
        </ul>
    </section>
</div>