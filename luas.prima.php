<?php
// luas.prisma.php
// Rumus luas permukaan prisma segitiga = (2 × luas alas) + (keliling alas × tinggi prisma)

$alas = 5;
$tinggiSegitiga = 8;
$tinggiPrisma = 10;

$luasAlas = 0.5 * $alas * $tinggiSegitiga;
$kelilingAlas = $alas + $tinggiSegitiga + sqrt(pow($alas,2) + pow($tinggiSegitiga,2));

$luasPrisma = (2 * $luasAlas) + ($kelilingAlas * $tinggiPrisma);

echo "Luas Permukaan Prisma Segitiga = $luasPrisma";
?>
