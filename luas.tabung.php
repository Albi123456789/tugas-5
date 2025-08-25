<?php
// luas.tabung.php
// Rumus luas permukaan tabung = 2 × π × r × (r + t)

$r = 7;
$t = 14;

$luas = 2 * pi() * $r * ($r + $t);

echo "Jari-jari: $r, Tinggi: $t <br>";
echo "Luas Permukaan Tabung = $luas";
?>
