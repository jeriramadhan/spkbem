<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Perhitungan SAW
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Mahasiswa</a></li>
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
                            <th style="text-align:center">C1</th>
                            <th style="text-align:center">C2</th>
                            <th style="text-align:center">C3</th>
                            <th style="text-align:center">C4</th>
                            <th style="text-align:center">C5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perhitungan_normalisasi as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v['nama'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c1'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c2'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c3'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c4'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c5'] . '</td>';
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
                            <th style="text-align:center">C1</th>
                            <th style="text-align:center">C2</th>
                            <th style="text-align:center">C3</th>
                            <th style="text-align:center">C4</th>
                            <th style="text-align:center">C5</th>
                            <th style="text-align:center">Total</th>
                            <th style="text-align:center">Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perhitungan_bobot as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v['nama'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c1'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c2'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c3'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c4'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c5'] . '</td>';
                            echo '<td style="text-align:center">' . $v['total'] . '</td>';
                            echo '<td style="text-align:center">' . $v['rank'] . '</td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>