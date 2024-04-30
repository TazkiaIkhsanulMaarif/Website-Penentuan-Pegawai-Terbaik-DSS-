<?php
include './config.php';

// Query untuk mengambil semua data dari view "topsis_maxmin".
$sql = "SELECT * FROM topsis_maxmin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Nilai</th><th>ID Kriteria</th><th>Nama Kriteria</th><th>Maksimum</th><th>Minimum</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_nilai"] . '</td>';
        echo '<td>' . $row["id_kriteria"] . '</td>';
        echo '<td>' . $row["nama_kriteria"] . '</td>';
        echo '<td>' . $row["maxsimum"] . '</td>';
        echo '<td>' . $row["minimum"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam view topsis_maxmin.";
}

// Tutup koneksi database.
$conn->close();
