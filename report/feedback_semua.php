<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color: #3498db;">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Tamu</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Hari/Tanggal</th>
                                <th>Nama Tamu</th>
                                <th>Alamat Tamu</th>
                                <th>Keperluan</th>
                                <th>Perihal</th>
                                <th>Pengambilan Barang</th>
                                <th>Keterangan Kendaraan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tamu";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['nama_pengunjung'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['keperluan'] ?></td>
                                    <td><?= $data['perihal'] ?></td>
                                    <td><?= $data['pengambilan'] ?></td>
                                    <td><?= $data['kendaraan'] ?></td>

                                    <td>
                                        <a href="report/tamu_satu.php?id=<?= $data['id'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>

                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <a href="report/tamu_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Data Tamu

                                    </a>
                                    <a href="#cetak_perbulan" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Perbulan

                                    </a>
                                    <a href="#cetak_pertahun" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Pertahun

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="cetak_perbulan" class="modalDialog">
    <div>
        <a href="" title="Close" class="close">X</a>

        <form target="_blank" action="report/tamu_perbulan.php" method="post">
            <h4>Pilih bulan </h4>
            <select name="bulan" class="form-control">
                <option value="12"> Desember </option>
                <option value="11"> November </option>
                <option value="10"> Oktober </option>
                <option value="09"> September </option>
                <option value="08"> Agustus </option>
                <option value="07"> Juli </option>
                <option value="06"> Juni </option>
                <option value="05"> Mei </option>
                <option value="04"> April </option>
                <option value="03"> Maret </option>
                <option value="02"> Februari </option>
                <option value="01"> Januari </option>
            </select>
            <h4>Pilih tahun</h4>
            <select name="tahun" class="form-control">
                <?php
                for ($i = substr(date("d-m-Y"), 6, 4); $i > substr(date("d-m-Y"), 6, 4) - 5; $i--) { ?>
                    <option value="<?= $i ?>"> <?= $i ?> </option>
                <?php  }
                ?>
            </select>

            <button type="submit">OK</button>
        </form>
    </div>
</div>

<div id="cetak_pertahun" class="modalDialog">
    <div>
        <a href="" title="Close" class="close">X</a>

        <form target="_blank" action="report/tamu_pertahun.php" method="post">
            <h4>Pilih tahun</h4>
            <select name="tahun" class="form-control">
                <?php
                for ($i = substr(date("d-m-Y"), 6, 4); $i > substr(date("d-m-Y"), 6, 4) - 5; $i--) { ?>
                    <option value="<?= $i ?>"> <?= $i ?> </option>
                <?php  }
                ?>
            </select>

            <button type="submit">OK</button>
        </form>
    </div>
</div>