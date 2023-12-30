<style>
    .scrollable-table {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    /* Optional: Style the scrollbar */
    ::webkit-scrollbar {
        height: 12px;
        background-color: #f5f5f5;
    }

    ::webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #dcdcdc;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-400">
                <div class="panel panel-warning">
                    <div class="panel-heading" style="background-color: #3498db;">
                        <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Feedback</h3>
                    </div>
                    <div class="panel-body scrollable-table">
                        <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama </th>
                                    <th>Telepon </th>
                                    <th>Email </th>
                                    <th>Alamat</th>
                                    <th> 1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th> 4</th>
                                    <th> 5</th>

                                    <th>6</th>

                                    <th>7</th>

                                    <th>8</th>

                                    <th>9</th>

                                    <th>10</th>

                                    <th> 11</th>

                                    <th>12</th>

                                    <th>13</th>

                                    <th>14</th>

                                    <th>15</th>

                                    <th>16</th>

                                    <th>17</th>

                                    <th>18</th>

                                    <th> 19</th>

                                    <th> 20</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--ambil data dari database, dan tampilkan kedalam tabel-->
                                <?php
                                //buat sql untuk tampilan data, gunakan kata kunci select
                                $sql = "SELECT * FROM feedback";
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
                                        <td><?= $data['name'] ?></td>
                                        <td><?= $data['hp'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['q1'] ?></td>

                                        <td><?= $data['q2'] ?></td>

                                        <td><?= $data['q3'] ?></td>

                                        <td><?= $data['q4'] ?></td>

                                        <td><?= $data['q5'] ?></td>

                                        <td><?= $data['q6'] ?></td>

                                        <td><?= $data['q7'] ?></td>

                                        <td><?= $data['q8'] ?></td>

                                        <td><?= $data['q9'] ?></td>

                                        <td><?= $data['q10'] ?></td>

                                        <td><?= $data['q11'] ?></td>

                                        <td><?= $data['q12'] ?></td>

                                        <td><?= $data['q13'] ?></td>

                                        <td><?= $data['q14'] ?></td>

                                        <td><?= $data['q15'] ?></td>

                                        <td><?= $data['q16'] ?></td>

                                        <td><?= $data['q17'] ?></td>

                                        <td><?= $data['q18'] ?></td>

                                        <td><?= $data['q19'] ?></td>

                                        <td><?= $data['q20'] ?></td>

                                        <td>
                                            <a href="?page=feedback&actions=detail&Id=<?= $data['Id'] ?>" class="btn btn-info btn-xs">
                                                <span class="fa fa-eye"></span>
                                            </a>

                                            <a href="?page=feedback&actions=delete&Id=<?= $data['Id'] ?>" class="btn btn-danger btn-xs">
                                                <span class="fa fa-remove"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <!--Tutup Perulangan data-->
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>