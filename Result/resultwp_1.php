<?php
include './config.php';

// Query untuk mengambil semua data dari view "wp_jumbobot".
$sql = "SELECT * FROM wp_jumbobot";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>Jumlah</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["jumlah"] . '</td>'; // Ganti dengan field yang sesuai
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam view wp_jumbobot.";
}

// Tutup koneksi database.
$conn->close();
