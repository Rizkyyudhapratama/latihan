<?php

$jurusan = "RPL";
$kelas = "11 RPL";

if ($jurusan == "TKRO"){
    if($kelas == "10 TKRO"){
        echo "ini kelas 10 TKRO";
    }
    elseif($kelas == "11 TKRO"){
        echo "ini kelas 11 TKRO";
    }
    elseif($kelas == "12 TKRO"){
        echo "ini kelas 12 TKRO";
    }
    else{
        echo "tidak ada kelas !";
    }
}
elseif ($jurusan == "TBSM"){
    if($kelas == "10 TBSM"){
        echo "ini kelas 10 TBSM";
    }
    elseif($kelas == "11 TBSM"){
        echo "ini kelas 11 TBSM";
    }
    elseif($kelas == "12 TBSM"){
        echo "ini kelas 12 TBSM";
    }
    else{
        echo "tidak ada kelas !";
    }
}
elseif ($jurusan == "RPL"){
    if($kelas == "10 RPL"){
        echo "ini kelas 10 RPL";
    }
    elseif($kelas == "11 RPL"){
        echo "ini kelas 11 RPL";
    }
    elseif($kelas == "12 RPL"){
        echo "ini kelas 12 RPL";
    }
    else{
        echo "tidak ada kelas !";
    }
}
else {
    echo "kelas yang anda cari tidak ada !!";
}