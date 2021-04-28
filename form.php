<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Buku</title>
</head>
<body>
    <form id="form_input" action="proses.php" method="post">
        <table>
            <h1>Form Input Data Buku</h1>
            <br/>

            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" size="30"></td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" size="30"></td>
            </tr>

            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" size="30"></td>
            </tr>

            <tr>
                <td>Jenis Buku</td>
                <td><input type="text" name="jenis_buku" size="30"></td>
            </tr>

            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="thn_terbit" size="30"></td>
            </tr>

            <tr>
                <td><input type="submit" name="proses" value="Proses"></td>
                <td><input type="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
</body>
</html>