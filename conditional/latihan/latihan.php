<?php

$nama = "Budi";
$status = "manager";
$keluarga = 5;
$transport = 50000;


echo "nama pekerja : " . $nama . "<br>";
echo "ststus : " . $status . "<br>";

if($status == "manager"){
    $gaji = 4500000;
    echo "gaji pokok :".$gaji;
    $lembur = 50000;
    $jam = 45;
}
elseif($status == "sekertaris"){
    $gaji = 3500000;
    echo "gaji pokok :".$gaji;
    $lembur = 45000;
    $jam = 35;
}
elseif($status == "staff"){
    $gaji = 3000000;
    echo "gaji pokok :".$gaji;
    $lembur = 30000;
    $jam = 25;
}
elseif($status == "karyawan"){
    $gaji = 2800000;
    echo "gaji pokok :".$gaji;
    $lembur = 25000;
    $jam = 20;
}
else{
    echo "tidak ada gaji !!";
}
echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : ".$bpjs."<br>";

$pajak = 0.025 * $gaji;
echo "PAJAK : ".$pajak."<br>"; 
echo "<hr>";

$bpjs + $pajak;
echo "TOTAL POTONGAN : ".$bpjs."<br>"; 
echo "<hr>";

$perjam = 24 * $transport;
echo "TRANSPORTASI : ".$perjam."<br>"; 

$tunjangan = 0.1 * $gaji;
echo "TUNJANGAN : ".$tunjangan."<br>";

$lembur = $perjam * $jam;
echo "LEMBUR : ".$lembur."<br>";

echo "<hr>";

$bonus = $tunjangan + $transport + $lembur;
echo "BONUS : ".$bonus."<br>"; 
echo "<hr>";

$bersih = $gaji - $bpjs + $bonus;
echo "GAJI BERSIH : ".$bersih."<br>"; 