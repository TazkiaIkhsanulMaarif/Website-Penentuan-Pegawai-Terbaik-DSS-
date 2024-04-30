<?php
include '../config.php';

// Query untuk mengambil semua data dari tabel kepentingan.
$sql = "SELECT * FROM kepentingan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Bobot</th><th>ID Kriteria</th><th>Nilai Kepentingan</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_bobot"] . '</td>';
        echo '<td>' . $row["id_kriteria"] . '</td>';
        echo '<td>' . $row["value"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam tabel kepentingan.";
}

// Tutup koneksi database.
$conn->close();
