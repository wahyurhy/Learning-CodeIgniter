<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat form validation dengan CodeIgniter | WahyuRahayu.com</title>
</head>
<body>
    <h1>Membuat Form Validation dengan CodeIgniter | Wahyu Rahayu</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/aksi'); ?>
        <label>Nama</label><br>
        <input type="text" name="nama"><br/>
        <?php echo form_error('nama'); ?>
        <label>Email</label><br>
        <input type="text" name="email"><br/>
        <?php echo form_error('email'); ?>
        <label>Konfirmasi Email</label><br>
        <input type="text" name="konfir_email"><br/>
        <?php echo form_error('konfir_email'); ?>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>