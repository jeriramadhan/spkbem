<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Input Data Staf
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Input Data Staf</a></li>
            <li class="active">Index</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="<?= site_url('menu/createPendaftar') ?>" class="btn btn-success">Tambah</a>
            </div>

            <div class="box-body">
                <table id="table2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <!-- bikin paramater pendaftar yang lu mau masukkin -->
                            <th width="15" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <th width="200" style="text-align:center">NIM</th>
                            <th width="150" style="text-align:center">Departemen</th>
                            <th width="100" style="text-align:center">Jenis Kelamin</th>
                            <th width="100" style="text-align:center">No Pengurus</th>
                            <th width="150" style="text-align:center">Angkatan</th>
                            <th width="50" style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $k => $resdata) {
                            echo '<tr>';
                            echo '<td style="text-align:center"></td>';
                            echo '<td>' . $resdata->nama . '</td>';
                            echo '<td style="text-align:center">' . $resdata->nim . '</td>';
                            echo '<td style="text-align:center">' . $resdata->departemen . '</td>';
                            echo '<td style="text-align:center">' . $resdata->jenis_kelamin . '</td>';
                            echo '<td style="text-align:center">' . $resdata->no_pengurus . '</td>';
                            echo '<td style="text-align:center">' . $resdata->angkatan . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('menu/updatePendaftar/' . $resdata->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a data-toggle="modal" data-target="#delete' . $resdata->id . '" title="Hapus"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php foreach ($data as $k => $resdata) { ?>
            <div id="delete<?php echo $resdata->id ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Anda Yakin Akan Menghapus Data <p class="text-danger"><?php echo $resdata->nama; ?> ?</p>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="clearfix">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Batal</button>
                                <a class="btn btn-danger" href="<?= site_url('menu/deletePendaftar/' . $resdata->id) ?>" role="button">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {})
</script>