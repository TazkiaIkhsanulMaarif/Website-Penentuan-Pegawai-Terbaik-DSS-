<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_kriteria = $_POST["id_kriteria"];
    $nama_kriteria = $_POST["nama_kriteria"];

    // Selanjutnya, lakukan operasi penambahan data ke tabel kriteria (bukan tabel alternatif).
    $sql = "INSERT INTO kriteria (id_kriteria, nama_kriteria) VALUES ('$id_kriteria', '$nama_kriteria')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data berhasil disimpan!"); window.location = "../Form/formkriteria.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '"); window.location = "../Form/formkriteria.php";</script>';
    }
}
