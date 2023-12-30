<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background-color: #3498db;">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Feedback</h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data" action="">
                        <div class="form-group">
                            <label for="name" class="col-sm-1 control-label">Nama </label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hp" class="col-sm-1 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="hp" class="form-control" id="hp" placeholder="Inputkan No Telepon" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-1 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Inputkan Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-1 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Inputkan Alamat Anda" required>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6 text-center">
                                <button type="button" class="btn btn-primary" onclick="toggleSurveyTable()">
                                    <span class="fa fa-eye"></span> Tampilkan/Tutup Tabel
                                </button>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-primary">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                    <div class="row" id="surveyTableContainer" >
                                            <table border="1" class="display table table-striped table-hover table-sm" bordercolor="#9B9B9B" align="center" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td rowspan="2" align="center" bgcolor="#FF9D9D" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4">NO.</font>
                                                        </b>
                                                    </td>
                                                    <td rowspan="2" align="left" bgcolor="#FF9D9D" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4">PERTANYAAN</font>
                                                        </b>
                                                    </td>
                                                    <td align="center" colspan="2" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4">PILIHAN</font>
                                                        </b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4">IYA</font>
                                                        </b>
                                                    </td>
                                                    <td align="center" class="bg-primary">
                                                        <b>
                                                            <font face="Calibri" size="4">TIDAK</font>
                                                        </b>
                                                    </td>
                                                </tr>

                                                <!-- Mulai pertanyaan-pertanyaan -->
                                                <?php
                                                $questions = array(
                                                    "Apakah Anda puas dengan kebersihan dan kenyamanan gedung di PT PLN Krueng Geukueh?",
                                                    "Apakah lahan parkir yang disediakan oleh PT PLN Krueng Geukueh cukup luas?",
                                                    "Apakah ruang tunggu di PT PLN (Persero) ULP Krueng Geukueh dirasa nyaman?",
                                                    "Apakah penampilan luar pegawai PT PLN Krueng Geukueh mencerminkan kebersihan dan kerapihan?",
                                                    "Apakah Anda merasa bahwa PT PLN Krueng Geukueh memiliki tingkat kemampuan yang baik dalam menindak lanjuti keluhan?",
                                                    "Apakah komunikasi dari pegawai PT PLN (perserO) ULP Krueng Geukueh dianggap baik?",
                                                    "Apakah PT PLN Krueng Geukueh memiliki kemampuan yang memuaskan dalam memberikan solusi terhadap keluhan pelanggan?",
                                                    "Apakah pelayanan yang diberikan oleh PT PLN Krueng Geukueh dianggap tidak berbelit-belit?",
                                                    "Apakah sarana informasi di PT PLN (perserO) ULP Krueng Geukueh dianggap cukup lengkap?",
                                                    "Apakah informasi terkait prosedur dan proses pelayanan di PT PLN Krueng Geukueh mudah diakses?",
                                                    "Apakah proses pelayanan di PT PLN Krueng Geukueh dianggap cukup cepat?",
                                                    "Apakah PT PLN (perserO) ULP Krueng Geukueh bersedia melayani pada jam sibuk?",
                                                    "Apakah PT PLN Krueng Geukueh memiliki kemampuan yang baik dalam memperhatikan keluhan pelanggan?",
                                                    "Apakah pemberian pelayanan oleh PT PLN Krueng Geukueh dianggap adil?",
                                                    "Apakah biaya listrik yang diberikan oleh PT PLN Krueng Geukueh sesuai dengan pembacaan meteran?",
                                                    "Apakah PT PLN Krueng Geukueh memiliki kemampuan yang baik dalam memahami kebutuhan dan keinginan pelanggan?",
                                                    "Apakah pegawai PT PLN Krueng Geukueh terlihat ramah saat melayani?",
                                                    "Apakah tingkat perhatian personal yang diberikan kepada pelanggan oleh PT PLN Krueng Geukueh dianggap memadai?",
                                                    "Bagaimana penilaian Anda terhadap kinerja PT PLN Krueng Geukueh dalam memberikan pelayanan prima bagi pelanggan?",
                                                    "Apa yang Anda harapkan dari kinerja PT PLN Krueng Geukueh sebagai pelanggan?"
                                                );

                                                for ($i = 0; $i < count($questions); $i++) {
                                                ?>
                                                    <tr>
                                                        <td align="center"><?= $i + 1; ?></td>
                                                        <td align="left"><?= $questions[$i]; ?></td>
                                                        <td align="center">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="q<?= $i + 1; ?>" value="1" required> Iya
                                                            </label>
                                                        </td>
                                                        <td align="center">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="q<?= $i + 1; ?>" value="0" required> Tidak
                                                            </label>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6 text-center">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Jawaban
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleSurveyTable() {
        var surveyTableContainer = document.getElementById("surveyTableContainer");
        if (surveyTableContainer.style.display === "none" || surveyTableContainer.style.display === "") {
            surveyTableContainer.style.display = "block";
        } else {
            surveyTableContainer.style.display = "none";
        }
    }
</script>

<?php
if ($_POST) {
    //Ambil data dari form
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];
    $q13 = $_POST['q13'];
    $q14 = $_POST['q14'];
    $q15 = $_POST['q15'];
    $q16 = $_POST['q16'];
    $q17 = $_POST['q17'];
    $q18 = $_POST['q18'];
    $q19 = $_POST['q19'];
    $q20 = $_POST['q20'];


    //buat sql
    $sql = "INSERT INTO feedback VALUES (NULL,'$name','$alamat','$hp','$email','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20')";

    // Lakukan query
    $query =  mysqli_query($koneksi, $sql);

    // Cek apakah query berhasil atau tidak
    if ($query) {
        echo '<script>alert("Data berhasil disimpan.");</script>';
        echo "<script>window.location.assign('?page=utamak&actions=tampil');</script>";
    } else {
        // Jika query gagal, log pesan kesalahan
        $errorMessage = mysqli_error($koneksi);
        echo "<script>alert('Simpan Data Gagal: $errorMessage');<script>";

        // Tambahkan logging ke file atau tabel log jika diperlukan
        $logMessage = "Gagal menyimpan data ke database: $errorMessage";
        // Contoh menulis ke file log
        file_put_contents('error_log.txt', $logMessage . PHP_EOL, FILE_APPEND);
    }
}

?>