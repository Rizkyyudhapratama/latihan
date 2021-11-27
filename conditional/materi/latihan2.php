<?php

$ipk = 3.1;
//jika kondisi bernilai true
if ($ipk > 0 && $ipk <= 2){
    echo "grade E, maaf anda harus mengulang";
} else if ($ipk > 2 && $ipk <= 2.3){
    echo "grade D, maaf anda harus memperbaiki mata kuliah";
} else if ($ipk > 2.3 && $ipk <= 3){
    echo "grade C, mau memperbaiki boleh tidak uga tidak apa-apa";
} else if ($ipk > 3 && $ipk <= 3.5){
    echo "grade B, mata kuliah anda baik";
} else if($ipk > 3.5 && $ipk <= 4){
    echo "grade A, mata kuliah anda super";
}
?>