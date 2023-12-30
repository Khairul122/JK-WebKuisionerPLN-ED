<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: blue;">
                    <h3 class="panel-title" style="color: white;">Informasi Detail Tamu</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tamu WHERE id ='" . $_GET['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">

                        <tr>
                            <td>Nama</td>
                            <td><?= $data['nama_pengunjung'] ?></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td><?= $data['keperluan'] ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><?= $data['no_telepon'] ?></td>
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
                            <td>Email</td>
                            <td><?= $data['email'] ?></td>
                        </tr>
                   
                    </table>

                </div> <!--end panel-body-->
                <!--panel footer-->
                <div class="panel-footer">
                    <a href="?page=tamu&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Tamu </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>