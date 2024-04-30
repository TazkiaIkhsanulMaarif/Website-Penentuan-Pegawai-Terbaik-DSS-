<?php
include '../config.php';

// Query untuk mengambil semua data dari tabel skala.
$sql = "SELECT * FROM skala";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Skala</th><th>Nama Skala</th><th>Value</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_skala"] . '</td>';
        echo '<td>' . $row["nama_skala"] . '</td>';
        echo '<td>' . $row["value"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam tabel skala.";
}

// Tutup koneksi database.
$conn->close();
