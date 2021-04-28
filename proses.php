<?php
    include "koneksi.php";
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $jenis_buku = $_POST['jenis_buku'];
    $thn_terbit = isset($_POST['thn_terbit']) ? (int)$_POST['thn_terbit'] : 0;
    $query = mysqli_query($koneksi, "insert into buku(judul, pengarang, penerbit, jenis_buku, thn_terbit) values('$judul', '$pengarang', '$penerbit', '$jenis_buku', '$thn_terbit')");
    if($query) {
        echo "Berhasil input data ke database ";
        ?><a href="tabel.php">Lihat data di Tabel</a><?php  
    } else {
        echo "Gagal input data";
        echo mysql_error();
    }
?>