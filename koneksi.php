<?php 
$koneksi = mysqli_connect("localhost", "root", "", "uts_fransiskus");
if($koneksi){
    // echo "berhasil koneksi";
   }else{
    echo "gagal koneksi";
   }
?>