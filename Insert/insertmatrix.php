<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_nilai = $_POST["id_nilai"];
    $id_bobot = $_POST["id_bobot"];
    $id_alternatif = $_POST["id_alternatif"];
    $id_skala = $_POST["id_skala"];

    // Selanjutnya, lakukan operasi penambahan data ke tabel nilai.
    $sql = "INSERT INTO nilai (id_nilai, id_bobot, id_alternatif, id_skala) VALUES ('$id_nilai', '$id_bobot', '$id_alternatif', '$id_skala')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data berhasil disimpan!"); window.location = "../Form/formmatrix.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '"); window.location = "../Form/formmatrix.php";</script>';
    }
}

// Tutup koneksi database jika sudah selesai.
$conn->close();
