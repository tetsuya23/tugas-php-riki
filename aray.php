<?php

$data = json_decode(file_get_contents('data.json'), true);

echo "<table border='1'>";
echo "<tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Nilai</th>
      </tr>";

foreach ($data as $row) {
	echo "<tr>";
	echo "<td>" . $row["nama"] . "</td>";
	echo "<td>" . $row["kelas"] . "</td>";
	echo "<td>" . $row["alamat"] . "</td>";
	echo "<td>" . $row["tanggal_lahir"] . "</td>";
	echo "<td>" . $row["nilai"] . "</td>";
	echo "</tr>";
}

echo "</table>";
