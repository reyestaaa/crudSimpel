<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
</head>
<body>
    <h1>Halaman Tambah Mahasiswa</h1>
    <form action="<?php echo base_url('home/fungsiTambah')?>" method="post">
    <table>
        <tr>
            <td>NIM :</td>
            <td></td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama :</td>
            <td></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jurusan :</td>
            <td></td>
            <td><input type="text" name="jurusan"></td>
        </tr>
        <tr>
            <td><button type="submit">Tambah</button></td>
        </tr>
    </table>
    </form>
</body>
</html>