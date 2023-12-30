<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color: blue;">
                    <h3 class="panel-title">Form Tambah Data Tamu</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pengunjung" class="col-sm-3 control-label">Nama </label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengunjung" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengunjung" required>
                            </div>
                        </div>
                     

                        <div class="form-group">
                            <label for="no_telepon" class="col-sm-3 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telepon" class="form-control" id="inputEmail3" placeholder="Inputkan no_telepon" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Inputkan email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keperluan" class="col-sm-3 control-label">Keperluan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keperluan" class="form-control" id="inputEmail3" placeholder="Inputkan Tujuan Kedatangan" required>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-warning">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tamu&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if ($_POST) {
    //Ambil data dari form
    $namapengunjung = $_POST['nama_pengunjung'];
    $keperluan = $_POST['keperluan'];
    $alamat = $_POST['alamat'];
    $tanggalmasuk = $_POST['tgl_masuk'];
    $notelepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    //buat sql
    $sql = "INSERT INTO tamu VALUES (NULL,'$namapengunjung','$keperluan','$alamat','$tanggalmasuk','$notelepon','$email')";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Simpan Tamu Error");
    if ($query) {
        echo "<script>window.location.assign('?page=tamu&actions=tampil');</script>";
    } else {
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
}

?>