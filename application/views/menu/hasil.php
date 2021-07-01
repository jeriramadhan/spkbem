<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Hasil Perhitungan SAW
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Hasil Perhitungan</a></li>
            <li class="active">View SAW</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h4>Perhitungan Normalisasi</h4>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perhitungan_normalisasi as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v['nama'] . '</td>';
                            foreach ($kriteria_count as $i => $data) {
                                echo '<td style="text-align:center">' . $v[$data->kriteria] . '</td>';
                            }
                            // echo '<td style="text-align:center">' . $v['c1'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c2'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c3'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c4'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c5'] . '</td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h4>Perhitungan Bobot</h4>
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perhitungan_bobot as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v['nama'] . '</td>';
                            foreach ($kriteria_count as $i => $data) {
                                echo '<td style="text-align:center">' . $v[$data->kriteria] . '</td>';
                            }
                            // echo '<td style="text-align:center">' . $v['c1'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c2'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c3'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c4'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c5'] . '</td>';
                            echo '<td style="text-align:center">' . $v['total'] . '</td>';
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