<?php
// luas.balok.php
// Rumus luas permukaan balok = 2 × (p × l + p × t + l × t)

$p = 12;
$l = 6;
$t = 8;

$luas = 2 * (($p * $l) + ($p * $t) + ($l * $t));

echo "Panjang: $p, Lebar: $l, Tinggi: $t <br>";
echo "Luas Permukaan Balok = $luas";
?>
