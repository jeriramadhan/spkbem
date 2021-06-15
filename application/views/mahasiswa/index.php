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
                            <th width="100" style="text-align:center">Action</th>
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
                            foreach ($kriteria_count as $i => $data){
                                $hasil = $data->kriteria;
                                echo '<td style="text-align:center">' . $v->$hasil . '</td>';
                            }
                            // echo '<td style="text-align:center">' . $v->c5 . '</td>';
                            echo '<td style="text-align:center">
                            <a href="' . site_url('mahasiswa/update/' . $v->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Update"><i class="fa fa-pencil"></i></a>&nbsp;
                            <a href="' . site_url('mahasiswa/delete/' . $v->id) . '" style="text-decoration:none;color:black" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>