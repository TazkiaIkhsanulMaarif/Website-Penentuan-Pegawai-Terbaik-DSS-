<?php
include '../config.php';

// Query untuk mengambil semua data dari tabel alternatif.
$sql = "SELECT * FROM alternatif";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Alternatif</th><th>Nama Pegawai</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_alternatif"] . '</td>';
        echo '<td>' . $row["nama_pegawai"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam tabel alternatif.";
}

// Tutup koneksi database.
$conn->close();
