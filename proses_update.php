<?php 
    include 'koneksi.php';
    $kdbuku = $_POST['kdbuku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $jenis_buku = $_POST['jenis_buku'];
    $thn_terbit = isset($_POST['thn_terbit']) ? (int)$_POST['thn_terbit'] : 0;

    $query = mysqli_query($koneksi, "update buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', jenis_buku='$jenis_buku', thn_terbit='$thn_terbit' where kdbuku='$kdbuku'") or die(mysqli_error($koneksi));
    if($query) {
        echo "<script>alert('Data berhasil diedit!'); window.location='tabel.php';</script>";
    } else {
        echo "<script>alert('Data gagal diedit');</script>";
    }
?>