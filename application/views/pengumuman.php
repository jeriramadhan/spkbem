<div class="content-wrapper">
    <section class="content-header">
        <h1 style="text-align:center">
            Pengumuman <br>Staf Terbaik BEMP PTIK UNJ
        </h1>
        <!-- <img src="<?= base_url("assets/ptik.png"); ?>"  class="center"> -->
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 10%;
            }
        </style>
        <!-- <ol class="breadcrumb">
            <li><a href="#">Menu</a></li>
            <li class="active">Ranking</li>
        </ol> -->
    </section>

    <?php foreach ($datapengumuman as $d) {
        $pengumuman = $d->status_pengumuman;
    }
    if ($pengumuman != 1) { ?>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <marquee>Pengumuman Staf Terbaik BEMP PTIK UNJ</marquee>
                    <!-- <h4>Pengumuman Staf Terbaik</h4> -->
                </div>

                <div class="box-body">
                    <!-- <p class="text-right">
                        <input type="text" id="mySearchText" placeholder="Pencarian...">
                        <button class="btn btn-primary" id="mySearchButton">Cari</button>
                    </p> -->
                    <table id="table2" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="50" style="text-align:center">No</th>
                                <th width="250" style="text-align:center">Nama</th>
                                <?php foreach ($kriteria_count as $i => $v) { ?>
                                    <th style="text-align:center"><?php echo $v->kriteria; ?> </th>
                                <?php } ?>
                                <th style="text-align:center">Total</th>
                                <th style="text-align:center">Ranking</th>
                                <th style="text-align:center">Departemen</th>
                                <th style="text-align:center">Penilaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            // $no = 0;
                             foreach ($perhitungan_bobot as $k => $v) {
                                //  $no++;
                                echo '<tr>';
                                echo '<td style="text-align:center"></td>';
                                echo '<td>' . $v['nama'] . '</td>';
                                foreach ($kriteria_count as $i => $data2) {
                                    echo '<td style="text-align:center">' . $v[$data2->kriteria]*100 . '</td>';
                                }
                                echo '<td style="text-align:center">' . $v['total']*100 . '</td>';
                                echo '<td style="text-align:center">' . $v['rank'] . '</td>';
                                echo '<td style="text-align:center">' . $v['departemen'] . '</td>';
                                foreach ($data as $d) {
                                    $datanilaibatas = $d->nilai_batas;
                                }
                                if ($v['total'] >= 0.70 && $v['total'] < 0.81) {
                                    echo '<td style="text-align:center">B</td>';
                                } else if ($v['total'] < 0.66 && $v['total'] >= 0.50) {
                                    echo '<td style="text-align:center">C</td>';
                                } else if ($v['total'] < 0.50) {
                                    echo '<td style="text-align:center">D</td>';
                                } else {
                                    echo '<td style="text-align:center">A</td>';
                                }
                                echo '</tr>';
                            } ?>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <div class="col-md-12">
                    <br><br>
                    <h3>Keterangan</h3>
                    <div class="col-md-6">
                        <ul>
                            <li>C adalah indikator penilaian</li>
                            <li>Total adalah akumulasi nilai dari tiap indikator</li>
                            <li>Ranking adalah hasil urutan penilaian</li>
                            <br><br>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>Detail Penilaian
                            <?php foreach ($kriteria_count as $i => $v) { ?>
                                <li><?php echo $v->kriteria . " adalah " . $v->keterangan; ?> </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <br><br>
                </div>
            </div>

        </section>

    <?php    } else { ?>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!-- <h3 class="box-title">Selamat Datang Calon Anggota Baru</h3> -->
                    <div class="content">
                        <h1 style="text-align:center">Sistem Penentuan Staf Terbaik</h1>
                        <h1 style="text-align:center">BEMP PTIK UNJ</h1>
                        <br><br>
                        <h2 style="text-align:center"> HARAP MENUNGGU PENGUMUMAN</h2>
                        <br><br>
                        <h3 style="text-align:center">- BPH BEMP PTIK UNJ -</h3>
                    </div>

                </div>

        </section>
    <?php } ?>


</div>