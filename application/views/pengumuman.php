<div class="content-wrapper">
    <section class="content-header">
        <h1 style="text-align:center">
            Pengumuman <br>Staf Terbaik BEMP PTIK UNJ
        </h1>
        <img src="<?= base_url("assets/unnamed1.jpg"); ?>"  class="center">
        <style>
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 10%;
}</style>
        <!-- <ol class="breadcrumb">
            <li><a href="#">Menu</a></li>
            <li class="active">Ranking</li>
        </ol> -->
    </section>

    <?php foreach ($datapengumuman as $d){
          $pengumuman = $d->status_pengumuman;
        }
        if($pengumuman != 1){ ?>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
            <marquee>Pengumuman Staf Terbaik BEMP PTIK UNJ</marquee>
                <!-- <h4>Pengumuman Staf Terbaik</h4> -->
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
                            <th style="text-align:center">Departemen</th>
                            <th style="text-align:center">Penilaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perhitungan_bobot as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v['nama'] . '</td>';
                            foreach ($kriteria_count as $i => $data2){
                                echo '<td style="text-align:center">' . $v[$data2->kriteria] . '</td>';
                            }
                            echo '<td style="text-align:center">' . $v['total'] . '</td>';
                            echo '<td style="text-align:center">' . $v['rank'] . '</td>';
                            echo '<td style="text-align:center">' . $v['departemen'] . '</td>';
                            foreach ($data as $d){
                              $datanilaibatas = $d->nilai_batas;
                            }
                            if($v['total'] >= 2.66 && $v['total'] < 3.66){
                              echo '<td style="text-align:center">A</td>';
                            } else if($v['total'] < 2.66 && $v['total'] >=1.66){
                              echo '<td style="text-align:center">C</td>';
                            } else if($v['total'] < 1.66){
                                echo '<td style="text-align:center">D</td>';
                            }else{
                                echo '<td style="text-align:center">A</td>';
                            }
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        <h3>Keterangan</h3>
        <li>C adalah indikator penilaian</li>
        <li>Total adalah akumulasi nilai dari tiap indikator</li>
        <li>Ranking adalah hasil urutan penilaian</li>
        <br><br>
        <li>Detail Penilaian</li>
        <?php foreach ($kriteria_count as $i => $v) { ?>
                            <ul><?php echo $v->kriteria." adalah ".$v->keterangan; ?> </ul>
                            <?php } ?>
<br><br>
        <!-- <li>Ini Coba Push</li> -->

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