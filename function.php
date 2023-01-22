<?php
function luas_kubus($sisi)
{
  return $sisi * $sisi * $sisi;
}

$sisi = 5;
echo "luas kubus dengan sisi $sisi adalah: " . luas_kubus($sisi) . "<br>";
?>
<?php
function volume_balok($panjang, $lebar, $tinggi)
{
  return $panjang * $lebar * $tinggi;
}

$panjang = 10;
$lebar = 5;
$tinggi = 7;
echo "Volume balok dengan panjang $panjang, lebar $lebar dan tinggi $tinggi adalah: " . volume_balok($panjang, $lebar, $tinggi) . "<br>";
?>
<?php
function volume_bola($jari_jari)
{
  return 4 / 3 * 3.14 * ($jari_jari * $jari_jari * $jari_jari);
}

$jari_jari = 7;
echo "Volume bola dengan jari-jari $jari_jari adalah: " . volume_bola($jari_jari) . "<br>";
function luas_persegi_panjang($panjang, $lebar)
{
  return $panjang * $lebar;
}

$panjang = 10;
$lebar = 5;
echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: " . luas_persegi_panjang($panjang, $lebar) . "<br>";
?>
<?php
function luas_segitiga($alas, $tinggi)
{
  return 0.5 * $alas * $tinggi;
}

$alas = 10;
$tinggi = 5;
echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: " . luas_segitiga($alas, $tinggi) . "<br>";
?>
