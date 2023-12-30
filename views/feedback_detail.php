<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: blue;">
                    <h3 class="panel-title" style="color: white;">Informasi Detail Feedback</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM feedback WHERE Id ='" . $_GET['Id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover">

                        <tr>
                            <td>Nama</td>
                            <td><?= $data['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Opini 1</td>
                            <td><?= $data['q1'] ?></td>
                        </tr>
                     
                            <td>Opini 2</td>
                            <td><?= $data['q2'] ?></td>
                        </tr>
                     
                        <tr>
                            <td>Opini 3</td>
                            <td><?= $data['q3'] ?></td>
                        </tr>
                     
                        <tr>
                            <td>Opini 4</td>
                            <td><?= $data['q4'] ?></td>
                        </tr>
                      
                        <tr>
                            <td>Opini 5</td>
                            <td><?= $data['q5'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 6</td>
                            <td><?= $data['q6'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 7</td>
                            <td><?= $data['q7'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 8</td>
                            <td><?= $data['q8'] ?></td>
                        </tr>
                      
                        <tr>
                            <td>Opini 9</td>
                            <td><?= $data['q9'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 10</td>
                            <td><?= $data['q10'] ?></td>
                        </tr>
                       

                        <tr>
                            <td>Opini 11</td>
                            <td><?= $data['q11'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 12</td>
                            <td><?= $data['q12'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 13</td>
                            <td><?= $data['q13'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 14</td>
                            <td><?= $data['q14'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 15</td>
                            <td><?= $data['q15'] ?></td>
                        </tr>
                     
                        <tr>
                            <td>Opini 16</td>
                            <td><?= $data['q16'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 17</td>
                            <td><?= $data['q17'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 18</td>
                            <td><?= $data['q18'] ?></td>
                        </tr>
                       
                        <tr>
                            <td>Opini 19</td>
                            <td><?= $data['q19'] ?></td>
                        </tr>
                        
                        <tr>
                            <td>Opini 20</td>
                            <td><?= $data['q20'] ?></td>
                        </tr>
                      



                    </table>

                </div> <!--end panel-body-->
                <!--panel footer-->
                <div class="panel-footer">
                    <a href="?page=feedback&actions=report" class="btn btn-success btn-sm">
                        Kembali </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>





