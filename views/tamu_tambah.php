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
                            <label for="nama_pengunjung" class="col-sm-3 control-label">Nama Tamu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengunjung" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengunjung" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Inputkan Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hp" class="col-sm-3 control-label">No Telp</label>
                            <div class="col-sm-9">
                                <input type="text" name="hp" class="form-control" id="inputEmail3" placeholder="Inputkan No Telp" required>
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
                            <label for="perihal" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" class="form-control" id="inputEmail3" placeholder="Inputkan Perihal" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="pengambilan" class="col-sm-3 control-label">Pengambilan Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengambilan" class="form-control" id="inputEmail3" placeholder="Inputkan pengambilan barang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kendaraan" class="col-sm-3 control-label">Keterangan Kendaraan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kendaraan" class="form-control" id="inputEmail3" placeholder="Inputkan kendaraan" required>
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
    $nama_pengunjung = $_POST['nama_pengunjung'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $keperluan = $_POST['keperluan'];
    $alamat = $_POST['alamat'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $perihal = $_POST['perihal'];
    $pengambilan = $_POST['pengambilan'];
    $kendaraan = $_POST['kendaraan'];

    //buat sql
    $sql = "INSERT INTO tamu (nama_pengunjung,email,hp,keperluan,alamat, tgl_masuk, perihal, pengambilan, kendaraan) 
            VALUES ('$nama_pengunjung','$email','$hp','$keperluan','$alamat', '$tgl_masuk', '$perihal', '$pengambilan', '$kendaraan')";

    $query =  mysqli_query($koneksi, $sql) or die("SQL Simpan Tamu Error");

    if ($query) {
        echo "<script>alert('Simpan Data Berhasil'); window.location.assign('?page=tamu&actions=tampil');</script>";
    } else {
        echo "<script>alert('Simpan Data Gagal');</script>";
    }
}
?>