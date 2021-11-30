<?php
$siswa = [
    "rizky,laki-laki,17 th",
    "rizal,laki-laki,17 th",
    "roby,laki-laki,17 th",
    "rohesa,laki-laki,16 th",
    "wildan,laki-laki,16 th",
];

echo "<h5>Biodata:</h5>";
echo "<ul>";
foreach($siswa as $data){
    echo "<li>$data</li>";
    echo "<hr>";
}
echo "</ul>";

?>