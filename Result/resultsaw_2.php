<?php
include './config.php';

// Query untuk mengambil semua data dari view "vnormalisasi".
$sql = "SELECT * FROM vnormalisasi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam bentuk tabel.
    echo '<table border="1">';
    echo '<tr><th>ID Nilai</th><th>ID Alternatif</th><th>Nama Pegawai</th><th>ID Kriteria</th><th>Nama Kriteria</th><th>ID Bobot</th><th>Value</th><th>Nilai</th><th>Nama Skala</th><th>Normalisasi</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id_nilai"] . '</td>';
        echo '<td>' . $row["id_alternatif"] . '</td>';
        echo '<td>' . $row["nama_pegawai"] . '</td>';
        echo '<td>' . $row["id_kriteria"] . '</td>';
        echo '<td>' . $row["nama_kriteria"] . '</td>';
        echo '<td>' . $row["id_bobot"] . '</td>';
        echo '<td>' . $row["value"] . '</td>';
        echo '<td>' . $row["nilai"] . '</td>';
        echo '<td>' . $row["nama_skala"] . '</td>';
        echo '<td>' . $row["normalisasi"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Tidak ada data dalam view vnormalisasi.";
}

// Tutup koneksi database.
$conn->close();
