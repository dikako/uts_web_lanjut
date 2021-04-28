<?php 
    include "koneksi.php";
    $query = mysqli_query($koneksi, "select * from buku");
?>
<table border="1">
    <tr>
        <th>Kode Buku</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Jenis Buku</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr> 
    <?php
        while($data=mysqli_fetch_array($query)){
    ?>

    <tr>
        <td><?php echo $data['kdbuku'];?></td>
        <td><?php echo $data['judul'];?></td>
        <td><?php echo $data['pengarang'];?></td>
        <td><?php echo $data['penerbit'];?></td>
        <td><?php echo $data['jenis_buku'];?></td>
        <td><?php echo $data['thn_terbit'];?></td>
        <td>
        <a href="delete.php?kdbuku=<?php echo $data['kdbuku']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
        <a href="update.php?kdbuku=<?php echo $data['kdbuku']; ?>">Update</a>
        </td>
<?php
        }
?>
</table><br/>
<a href="form.php">Input Data Buku</a>
    