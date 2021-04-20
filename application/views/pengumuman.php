<div class="content-wrapper">
    <section class="content-header">
        <h1 style="text-align:center">
            Pengumuman <br>Staff Terbaik BEMP PTIK UNJ
        </h1>
        <img src="<?= "https://yt3.ggpht.com/ytc/AAUvwnhFbgDmIOMUDgw1arSeUWk3t-Lkyou6WluvrmRRtA=s900-c-k-c0x00ffffff-no-rj" ?>"  class="center">
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
            <marquee>Pengumuman Staff Terbaik BEMP PTIK UNJ</marquee>
                <!-- <h4>Pengumuman Staff Terbaik</h4> -->
            </div>

            <div class="box-body">
                <table id="table2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="50" style="text-align:center">No</th>
                            <th width="250" style="text-align:center">Nama</th>
                            <th style="text-align:center">Pengetahuan</th>
                            <th style="text-align:center">Keterampilan</th>
                            <!-- <th style="text-align:center">C3</th>
                            <th style="text-align:center">C4</th>
                            <th style="text-align:center">C5</th> -->
                            <th style="text-align:center">Total</th>
                            <th style="text-align:center">Ranking</th>
                            <th style="text-align:center">Penilaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($perhitungan_bobot as $k => $v) {
                            echo '<tr>';
                            echo '<td style="text-align:center">' . ($k + 1) . '</td>';
                            echo '<td>' . $v['nama'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c1'] . '</td>';
                            echo '<td style="text-align:center">' . $v['c2'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c3'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c4'] . '</td>';
                            // echo '<td style="text-align:center">' . $v['c5'] . '</td>';
                            echo '<td style="text-align:center">' . $v['total'] . '</td>';
                            echo '<td style="text-align:center">' . $v['rank'] . '</td>';
                            foreach ($data as $d){
                              $datanilaibatas = $d->nilai_batas;
                            }
                            if($v['total'] >= $datanilaibatas){
                              echo '<td style="text-align:center">Staff Kategori Baik</td>';
                            } else{
                              echo '<td style="text-align:center">Staff Dibawah Standar</td>';
                            }
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        <!-- <h3>Keterangan</h3>
        <li>C adalah indikator penilaian</li>
        <li>Total adalah akumulasi nilai dari tiap indikator</li>
        <li>Ranking adalah hasil urutan penilaian</li> -->
<br><br>
        <!-- <li>Ini Coba Push</li> -->

    </section>
     <?php    } else { ?>
      <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <!-- <h3 class="box-title">Selamat Datang Calon Anggota Baru</h3> -->
                <div class="content">
                    <h1 style="text-align:center">SISTEM PENDUKUNG KEPUTUSAN</h1>
                    <h1 style="text-align:center">PENERIMAAN ANGGOTA BARU  BEMP PTIK UNJ</h1>
                    <br><br>
                    <h2 style="text-align:center"> HARAP MENUNGGU PENGUMUMAN</h2>
                    <br><br>
                    <h3 style="text-align:center">- PSDM BEMP PTIK UNJ -</h3>
            </div>

        </div>

    </section>
     <?php } ?>


</div>