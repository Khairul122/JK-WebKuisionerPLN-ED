<?php
$id = $_GET['id'];
$ambil =  mysqli_query($koneksi, "SELECT * FROM tamu WHERE id ='$id'") or die("SQL Edit error");
$data = mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color: blue;">
                    <h3 class="panel-title">Form Update Data Tamu</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for ($i = 2020; $i > 2000; $i--) { ?>
                                        <option value="<?= $i ?>"> <?= $i ?> </option>
                                    <?php } ?>

                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php
                                    $bulan =  array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                    for ($j = 12; $j > 0; $j--) { ?>
                                        <option value="<?= $j ?>"> <?= $bulan[$j] ?> </option>
                                    <?php } ?>

                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for ($k = 31; $k > 0; $k--) { ?>
                                        <option value="<?= $k ?>"> <?= $k ?> </option>
                                    <?php } ?>

                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->
                        <div class="form-group">
                            <label for="nama_pengunjung" class="col-sm-3 control-label">Nama Tamu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengunjung" value="<?= $data['nama_pengunjung'] ?>" class="form-control" id="inputEmail3" placeholder="Nama Pengunjung">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telepon" class="col-sm-3 control-label">No Telpon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telepon" value="<?= $data['no_teleponl'] ?>" class="form-control" id="inputPassword3" placeholder="Inputkan no_telepon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?= $data['email'] ?>" class="form-control" id="inputPassword3" placeholder="Inputkan email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat Tamu</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keperluan" class="col-sm-3 control-label">Keperluan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keperluan" value="<?= $data['keperluan'] ?>" class="form-control" id="inputEmail3" placeholder="Tujuan Kedatangan">
                            </div>
                        </div>


                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Tamu</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tamu&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Tamu
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
    $keperluan = $_POST['keperluan'];
    $alamat = $_POST['alamat'];
    $no_telepon= $_POST['no_telepon'];
    $email = $_POST['email'];
    $tglmasuk = $_POST['tahun'] . "_" . $_POST['bulan'] . "_" . $_POST['tanggal'];
    
    //buat sql
    $sql = "UPDATE tamu SET nama_pengunjung   ='$nama_pengunjung',
                           keperluan ='$keperluan',
                           alamat            ='$alamat',
                           tgl_masuk         ='$tglmasuk',
                           no_telepon           ='$no_telepon',
                           email         ='$email',                       
                     WHERE id                ='$id'";
    $query =  mysqli_query($koneksi, $sql) or die("SQL Edit MHS Error");
    if ($query) {
        echo "<script>window.location.assign('?page=tamu&actions=tampil');</script>";
    } else {
        echo "<script>alert('Edit Data Gagal');<script>";
    }
}

?>