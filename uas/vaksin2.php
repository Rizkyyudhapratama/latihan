<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <center><h1>SYARAT MASUK MIKO MALL</h1></center>
    <center><?php
//penampungan data
if(isset($_POST['simpan'])){
//textfield
$nama = $_POST['nama'];


//select
$vaksin = $_POST['vaksin'];

echo "Nama anda :$nama<br>";
echo "Status vaksin :$vaksin<br>";

//daftar
if ($vaksin == "sudah vaksin"){
    echo "di izinkan";
} elseif ($vaksin == "belum vaksin"){
    echo "tidak di izinkan";
    echo '<a href="https://www.pedulilindungi.id/*">silahkan daftar vaksin</a>';
}
}
?></center>
    </fieldset>
</body>
</html>