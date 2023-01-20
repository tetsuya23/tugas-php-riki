<?php
function luas_persegi($sisi)
{
    return $sisi * $sisi;
}
$sisi = 5;
echo "Luas persegi dengan sisi $sisi adalah: " . luas_persegi($sisi) . "<br>";
?>
<?php
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
<?php
function luas_lingkaran($jari_jari)
{
    return 3.14 * ($jari_jari * $jari_jari);
}

$jari_jari = 7;
echo "Luas lingkaran dengan jari-jari $jari_jari adalah: " . luas_lingkaran($jari_jari) . "<br>";
?>
<?php
function luas_trapesium($sisi_atas, $sisi_bawah, $tinggi)
{
    return 0.5 * ($sisi_atas + $sisi_bawah) * $tinggi;
}

$sisi_atas = 5;
$sisi_bawah = 10;
$tinggi = 7;
echo "Luas trapesium dengan sisi atas $sisi_atas, sisi bawah $sisi_bawah dan tinggi $tinggi adalah: " . luas_trapesium($sisi_atas, $sisi_bawah, $tinggi) . "<br>";
?>

