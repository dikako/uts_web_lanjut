<h1>Edit Data Buku</h1>
<form action="proses_update.php" method="post">
    <?php
        include "koneksi.php";
        $kdbuku = $_GET['kdbuku'];
        $query = mysqli_query($koneksi, "select * from buku where kdbuku='$kdbuku'"); 
        $data = mysqli_fetch_array($query);
    ?>

        <table border="1">

        <input type="hidden" name="kdbuku" value="<?php echo $data['kdbuku']?>"/>
            <tr>
                <td>Judul Buku</td>
                <td>
                    <input type="text" name="judul" value=" <?php echo $data['judul'] ?>">
                </td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td>
                    <input type="text" name="pengarang" value=" <?php echo $data['pengarang'] ?>">
                </td>
            </tr>

            <tr>
                <td>Penerbit</td>
                <td>
                    <input type="text" name="penerbit" value=" <?php echo $data['penerbit'] ?>">
                </td>
            </tr>

            <tr>
                <td>Jenis Buku</td>
                <td>
                    <input type="text" name="jenis_buku" value=" <?php echo $data['jenis_buku'] ?>">
                </td>
            </tr>

            <tr>
                <td>Tahun Terbit</td>
                <td>
                    <input type="text" name="thn_terbit" value=" <?php echo $data['thn_terbit'] ?>">
                </td>
            </tr>

            </tr>	
				<td>Aksi</td>
				<td><button type="submit">Simpan</button></td>				
			</tr>	
        </table>
</form>