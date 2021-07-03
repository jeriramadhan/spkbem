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
                            <a href="' . site_url('kriteria/deleteKriteria/' . $v->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <strong><u>Keterangan</u></strong>
        <ul>
            <li>Jumlah nilai bobot<strong> HARUS </strong>berjumlah total bobot 1.</li>
        </ul>
    </section>
</div>