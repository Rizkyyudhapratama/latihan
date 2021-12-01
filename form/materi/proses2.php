<?php
//penampungan data
if(isset($_POST['simpan'])){
    //textfield
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    //radio
    $jk = $_POST['jk'];

    //select
    $agama = $_POST['agama'];

    //number
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    //checkbox
    if (isset($_POST['sSehat'])) {
        $sSehat = "ada";
    } else {
        $sSehat = "Tidak ada";
    }
    if (isset($_POST['kk'])) {
        $kk = "ada";
    } else {
        $kk = "Tidak ada";
    }
    if (isset($_POST['skl'])) {
        $skl = "ada";
    } else {
        $skl = "Tidak ada";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>PENDAFTARAN PESERTA DIDIK BARU</h1></center>
    Nama lengkap : <b><?php echo $nama; ?></b><br>
    Email : <b><?php echo $email; ?></b><br>
    Jenis kelamin : <b><?php echo $jk; ?></b><br>
    Agama : <b><?php echo $agama; ?></b><br>
    Tinggi badan : <b><?php echo $tb; ?></b><br>
    Berat badan : <b><?php echo $nama; ?></b><br>
    kelengkapan persyaratan:
    <li>Surat sehat : <b><?php echo $sSehat; ?></b></li><br>
    <li>Kartu keluarga : <b><?php echo $kk; ?></b></li><br>
    <li>Surat keterangan lulus : <b><?php echo $skl; ?></b></li><br>
    Nomor telepon : <b><?php echo $nomor; ?></b>
</body>
</html>
<?php }?>