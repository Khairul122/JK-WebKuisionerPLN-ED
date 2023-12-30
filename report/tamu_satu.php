<!DOCTYPE html>
<html>

<head>
    <title>Cetak Data Pelanggan</title>
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body onload="print()">
    <!--Menampilkan data detail arsip-->
    <?php
    include '../config/koneksi.php';
    $sql = "SELECT * FROM tamu WHERE id='" . $_GET['id'] . "'";
    //proses query ke database
    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
    //Merubaha data hasil query kedalam bentuk array
    $data = mysqli_fetch_array($query);
    ?>

    <div class="container">
        <div class='row'>
            <div class="col-sm-12">
                <!--dalam tabel--->
                <div class="text-center">
                    <h2>Analisis Kualitas layanan terhadap kepuasan pelanggan</h2>
                    <h4>Jl. Medan-Banda Aceh <br> Krueng Geukueh, Kabupaten Aceh Utara, Aceh</h4>
                    <hr>
                    <h3>Data Pelanggan</h3>
                    <table class="table table-bordered table-striped table-hover">
                        <tbody>
                            <tr>
                                <td>Nama Tamu</td>
                                <td><?= $data['nama_pengunjung'] ?></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td><?= $data['no_telepon'] ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?= $data['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?= $data['alamat'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td><?= $data['tgl_masuk'] ?></td>
                            </tr>
                            
                            <tr>
                                <td>Keperluan</td>
                                <td><?= $data['keperluan'] ?></td>
                            </tr>
                           

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" class="text-right">
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