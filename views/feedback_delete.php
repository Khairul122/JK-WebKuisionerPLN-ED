<?php
//membuat query untuk hapus data
$sql="DELETE FROM feedback WHERE Id ='".$_GET['Id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=feedback&actions=report');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=feedback&actions=report');</scripr>";
}

