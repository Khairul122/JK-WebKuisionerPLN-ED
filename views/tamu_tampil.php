<?php
if (!isset($_SESSION['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color: #3498db;">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Tamu</h3>
                </div>
                <div class="panel-body">
                    <div style="overflow-x: auto;">
                        <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Hari/Tanggal</th>
                                    <th>Nama Tamu</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Alamat Tamu</th>
                                    <th>Keperluan</th>
                                    <th>Perihal</th>
                                    <th>Pengambilan Barang</th>
                                    <th>Keterangan Kendaraan</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM tamu";
                                $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                                $nomor = 0;

                                while ($data = mysqli_fetch_array($query)) {
                                    $nomor++;
                                ?>
                                    <tr class="text-center">
                                        <td><?= $nomor ?></td>
                                        <td><?= $data['tgl_masuk'] ?></td>
                                        <td><?= $data['nama_pengunjung'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['hp'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['keperluan'] ?></td>
                                        <td><?= $data['perihal'] ?></td>
                                        <td><?= $data['pengambilan'] ?></td>
                                        <td><?= $data['kendaraan'] ?></td>
                                        <td>
                                            <a href="?page=tamu&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a href="?page=tamu&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="?page=tamu&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                                <span class="fa fa-remove"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <a href="?page=tamu&actions=tambah" class="btn btn-info btn-sm">
                                            Tambah Data Tamu
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
</div>