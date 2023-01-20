<?php
function volume_kubus($sisi)
{
  return $sisi * $sisi * $sisi;
}

$sisi = 5;
echo "Volume kubus dengan sisi $sisi adalah: " . volume_kubus($sisi) . "<br>";
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
?>
