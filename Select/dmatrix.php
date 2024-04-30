<?php
include '../config.php';

// Query untuk mengambil semua data dari tabel nilai.
$sql = "SELECT * FROM nilai";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Nilai</th><th>ID Bobot (Kepentingan)</th><th>ID Alternatif</th><th>ID Skala</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_nilai"] . '</td>';
        echo '<td>' . $row["id_bobot"] . '</td>';
        echo '<td>' . $row["id_alternatif"] . '</td>';
        echo '<td>' . $row["id_skala"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam tabel nilai.";
}

// Tutup koneksi database.
$conn->close();
