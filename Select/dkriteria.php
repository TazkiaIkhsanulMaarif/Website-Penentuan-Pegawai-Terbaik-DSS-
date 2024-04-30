<?php
include '../config.php';

// Query untuk mengambil semua data dari tabel kriteria.
$sql = "SELECT * FROM kriteria";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Kriteria</th><th>Nama Kriteria</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_kriteria"] . '</td>';
        echo '<td>' . $row["nama_kriteria"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam tabel kriteria.";
}

// Tutup koneksi database.
$conn->close();
