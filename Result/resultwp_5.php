<?php
include './config.php';

// Query untuk mengambil semua data dari tabel "wp_nilaiis".
$sql = "SELECT * FROM wp_sums";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>Jum</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["jum"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam tabel wp_nilaiis.";
}

// Tutup koneksi database.
$conn->close();
