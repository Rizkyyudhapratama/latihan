<?php
//penampungan data
if(isset($_POST['simpan'])){
    //textfield
    $nama = $_POST['nama'];

    //number
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    //radio
    $jk = $_POST['jk'];

    if($jk = "Laki-Laki"){
        if($ket < 90 ){
            echo "Diterima";
        }
        else if($ket > 170){
            echo "Diterima";
        }
        else{
            echo "Tidak Di Terima";
        }
    }

    if($jk = "Perempuan"){
        if($ket < 75 ){
            echo "Diterima";
        }
        else if($ket > 160){
            echo "Diterima";
        }
        else{
            echo "Tidak Di Terima";
        }
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
    <center><h1>MASUK TNI/POLRI</h1></center>
    Nama lengkap : <b><?php echo $nama; ?></b><br>
    Jenis kelamin : <b><?php echo $jk; ?></b><br>
    Tinggi badan : <b><?php echo $tb; ?></b><br>
    Berat badan : <b><?php echo $bb; ?></b><br>
    Keterangan : <b><?php echo $ket; ?></b>
    
</body>
</html>
<?php }?>