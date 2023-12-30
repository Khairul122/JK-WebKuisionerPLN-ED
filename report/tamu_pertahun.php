<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Arsip Pertahun</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body onload="print()">
    <!--Menampilkan data detail arsip-->
    <?php
    include '../config/koneksi.php';
    $ambilthn = $_POST['tahun'];

    ?>

    <div class="container">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel--->
                <div class="text-center">
                    <h2>Analisis Kualitas layanan terhadap kepuasan pelanggan</h2>
                    <h4>Jl. Medan-Banda Aceh <br> Krueng Geukueh, Kabupaten Aceh Utara, Aceh</h4>
                    <hr>
                    <h3>DATA TAMU TAHUN <? echo "$ambilthn"; ?></h3>
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Hari/Tanggal</th>
                                    <th>Nama Tamu</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat Tamu</th>
                                    <th>Keperluan</th>
                                   
                                </tr>
                            </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tamu WHERE substr(tgl_masuk,1,4)='$ambilthn'";
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
                                    <td><?= $data['no_telepon'] ?></td>
                                    <td><?= $data['email'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['keperluan'] ?></td>
                                    
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="8" class="text-right">
                                    Lhokseumawe <?= date("d-m-Y") ?>
                                    <br><br><br><br>
                                    <u>Manajer PT PLN<strong></u><br>
                                    SERTINO ANGGARA PUTRA
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>