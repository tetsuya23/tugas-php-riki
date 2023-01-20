<?php
function hitung_bmi($nama, $tinggi, $berat)
{
  $bmi = $berat / ($tinggi * $tinggi);
  echo "Halo, $nama. Nilai BMI anda adalah $bmi. ";

  if ($bmi < 18.5) {
    echo "Anda termasuk kurus.";
  } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    echo "Anda termasuk normal.";
  } elseif ($bmi >= 25 && $bmi <= 29.9) {
    echo "Anda termasuk gemuk.";
  } else {
    echo "Anda termasuk obesitas.";
  }
}

$nama = "pelita";
$tinggi = 1.75;
$berat = 65;
hitung_bmi($nama, $tinggi, $berat);
