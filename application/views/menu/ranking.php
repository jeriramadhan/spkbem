<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Hasil Ranking
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Menu</a></li>
            <li class="active">Ranking</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4>Perhitungan Hasil Ranking</h4>
            </div>
            <div class="box-body">
                <table id="table2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <?php foreach ($kriteria_count as $i => $v) { ?>
                                <th style="text-align:center"><?php echo $v->kriteria; ?> </th>
                            <?php } ?>
                            <th style="text-align:center">Total</th>
                            <th style="text-align:center">Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perhitungan_bobot as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v['nama'] . '</td>';
                            foreach ($kriteria_count as $i => $data) {
                                echo '<td style="text-align:center">' . $v[$data->kriteria]*100 . '</td>';
                            }
                            echo '<td style="text-align:center">' . $v['total']*100 . '</td>';
                            echo '<td style="text-align:center">' . $v['rank'] . '</td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <ul>
            <strong><i><u>Keterangan</u></i></strong>
            <br>
            <?php foreach ($kriteria_count as $i => $v) { ?>
                <li><?php echo $v->kriteria . " adalah " . $v->keterangan; ?> </li>
            <?php } ?>
        </ul>
    </section>
</div>