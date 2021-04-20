<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pendaftar
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Pendaftar</a></li>
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
                <table id="table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <!-- bikin paramater pendaftar yang lu mau masukkin -->
                            <th width="15" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <th width="150" style="text-align:center">Departemen</th>
                            <th width="100" style="text-align:center">Jenis Kelamin</th>
                            <th width="100" style="text-align:center">No Pengurus</th>
                            <th width="150" style="text-align:center">Email</th>
                            <th width="50" style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $k => $resdata) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $resdata->nama . '</td>';
                            echo '<td style="text-align:center">' . $resdata->departemen . '</td>';
                            echo '<td style="text-align:center">' . $resdata->jenis_kelamin . '</td>';
                            echo '<td style="text-align:center">' . $resdata->no_pengurus . '</td>';
                            echo '<td style="text-align:center">' . $resdata->email . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('menu/updatePendaftar/' . $resdata->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a href="' . site_url('menu/deletePendaftar/' . $resdata->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
    })
</script>