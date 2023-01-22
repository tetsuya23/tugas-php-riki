<?php
$conn = mysqli_connect("localhost", "root", "", "perpus");
$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);


while ($row = mysqli_fetch_assoc($result)) {
  echo "Judul Buku: " . $row['judul'] . "<br>";
  echo "ISBN: " . $row['isbn'] . "<br>";
  echo "Pengarang: " . $row['id_pengarang'] . "<br>";
  echo "Penerbit: " . $row['id_penerbit'] . "<br>";
  echo "Tahun : " . $row['tahun'] . "<br>";
}
