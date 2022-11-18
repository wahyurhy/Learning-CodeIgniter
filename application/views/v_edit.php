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
        <h3>Edit Data</h3>
    </center>

    <?php foreach ($user as $u) { ?>

        <form action="<?php echo base_url().'crud/update';?>" method="post">
    
            <table style="margin: 20px auto;">
        
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <input type="text" name="nama" value="<?php echo $u->nama ?>">
                </td>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $u->alamat ?>">
                </td>
                <td>Pekerjaan</td>
                <td>
                    <input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>">
                </td>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
            
            </table>
    
        </form>

    <?php } ?>
</body>
</html>