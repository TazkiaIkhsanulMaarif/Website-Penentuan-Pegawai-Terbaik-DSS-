<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_skala = $_POST["id_skala"];
    $nama_skala = $_POST["nama_skala"];
    $value = $_POST["value"];

    // Selanjutnya, lakukan operasi penambahan data ke tabel skala.
    $sql = "INSERT INTO skala (id_skala, nama_skala, value) VALUES ('$id_skala', '$nama_skala', $value)";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data berhasil disimpan!"); window.location = "../Form/formskala.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '"); window.location = "../Form/formskala.php";</script>';
    }
}

// Tutup koneksi database jika sudah selesai.
$conn->close();
