<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Penilaian Staf
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Penilaian Staf</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <!-- <a href="<?= site_url('mahasiswa/view_saw') ?>" class="btn btn-primary">Perangkingan</a> -->
                <a href="<?= site_url('mahasiswa/create') ?>" class="btn btn-success">Tambah</a>
            </div>


            <div class="box-body">
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <?php foreach ($kriteria_count as $i => $v) { ?>
                                <th style="text-align:center"><?php echo $v->kriteria; ?> </th>
                            <?php } ?>
                            <!-- <th style="text-align:center">C5</th> -->
                            <th width="100" style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v->nama . '</td>';
                            // echo '<td style="text-align:center">' . $v->c1 . '</td>';
                            // echo '<td style="text-align:center">' . $v->c2 . '</td>';
                            // echo '<td style="text-align:center">' . $v->c3 . '</td>';
                            // echo '<td style="text-align:center">' . $v->c4 . '</td>';
                            foreach ($kriteria_count as $i => $data) {
                                $hasil = $data->kriteria;
                                echo '<td style="text-align:center">' . $v->$hasil . '</td>';
                            }
                            // echo '<td style="text-align:center">' . $v->c5 . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('mahasiswa/update/' . $v->id) .
                                '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a data-toggle="modal" data-target="#delete' . $v->id . '" title="Delete"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php foreach ($data2 as $k => $v) {?>
            <div id="delete<?php echo $v->id ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Anda Yakin Akan Menghapus Data <p class="text-danger"><?php echo $v->nama; ?> ?</p>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="clearfix">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Batal</button>
                                <a class="btn btn-danger" href="<?= site_url('mahasiswa/delete/' . $v->id) ?>" role="button">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <ul>
            <strong><i><u>Keterangan</u></i></strong>
            <br>
            <?php foreach ($kriteria_count as $i => $v) { ?>
                <li><?php echo $v->kriteria . " adalah " . $v->keterangan; ?> </li>
            <?php } ?>
        </ul>
    </section>
</div>