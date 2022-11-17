<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghubungkan codeigniter dengan database mysql | Wahyu Rahayu</title>
</head>
<body>
    <h1>Mengenal Model Pada CodeIgniter | WahyuRahayu.com</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <?php foreach($user as $u) { ?>
            <tr>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->pekerjaan ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>