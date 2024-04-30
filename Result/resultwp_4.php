<?php
include './config.php';

// Query untuk mengambil semua data dari tabel "wp_nilaiis".
$sql = "SELECT * FROM wp_nilaiis";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Alternatif</th><th>Nama Pegawai</th><th>Nilai IS</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_alternatif"] . '</td>';
        echo '<td>' . $row["nama_pegawai"] . '</td>';
        echo '<td>' . $row["nilaiIS"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam tabel wp_nilaiis.";
}

// Tutup koneksi database.
$conn->close();
