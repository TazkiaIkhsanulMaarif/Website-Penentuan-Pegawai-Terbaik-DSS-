<?php
include './config.php';

// Query untuk mengambil semua data dari view "wp_normalisasiterbobot".
$sql = "SELECT * FROM wp_normalisasiterbobot";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Bobot</th><th>ID Kriteria</th><th>Value</th><th>Jumlah</th><th>Normalisasi W</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_bobot"] . '</td>';
        echo '<td>' . $row["id_kriteria"] . '</td>';
        echo '<td>' . $row["value"] . '</td>';
        echo '<td>' . $row["jumlah"] . '</td>';
        echo '<td>' . $row["normalisasi_w"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam view wp_normalisasiterbobot.";
}

// Tutup koneksi database.
$conn->close();
