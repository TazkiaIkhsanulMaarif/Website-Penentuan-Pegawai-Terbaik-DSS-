<?php
include './config.php';

// Query untuk mengambil semua data dari view "topsis_pembagi".
$sql = "SELECT * FROM topsis_pembagi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Kriteria</th><th>Nama Kriteria</th><th>Bagi</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_kriteria"] . '</td>';
        echo '<td>' . $row["nama_kriteria"] . '</td>';
        echo '<td>' . $row["bagi"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam view topsis_pembagi.";
}

// Tutup koneksi database.
$conn->close();
