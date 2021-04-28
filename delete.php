<?php
	include "koneksi.php";
	$kdbuku = $_GET['kdbuku'];
	$query = mysqli_query($koneksi, "delete from buku where kdbuku='$kdbuku'");
	if($query){
        ?><script language="javascript">document.location.href="tabel.php";</script><?php
	}else{
	    echo "gagal hapus data";
	}
?> 