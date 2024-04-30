<?php
include './config.php';

// Query untuk mengambil semua data dari view "topsis_sipsin".
$sql = "SELECT * FROM topsis_nilaiv";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Alternatif</th><th>Di Plus</th><th>D Min</th><th>Nilai V</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_alternatif"] . '</td>';
        echo '<td>' . $row["diplus"] . '</td>';
        echo '<td>' . $row["dmin"] . '</td>';
        echo '<td>' . $row["nilaiv"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam view topsis_sipsin.";
}

// Tutup koneksi database.
$conn->close();
