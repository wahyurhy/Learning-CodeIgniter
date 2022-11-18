<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan CodeIgniter | WahyuRahayu.com</title>
</head>
<body>
    <center>
        <h1>Membuat CRUD dengan CodeIgniter | WahyuRahayu.com</h1>
    </center>

    <form action="<?php echo base_url().'crud/tambah_aksi'; ?>" method="post">

        <table style="margin: 20px auto;">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>

    </form>
</body>
</html>