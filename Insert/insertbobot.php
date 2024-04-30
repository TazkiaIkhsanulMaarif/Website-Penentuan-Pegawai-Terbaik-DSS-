<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_bobot = $_POST["id_bobot"];
    $id_kriteria = $_POST["id_kriteria"];
    $value = $_POST["value"];

    // Selanjutnya, lakukan operasi penambahan data ke tabel kepentingan.
    $sql = "INSERT INTO kepentingan (id_bobot, id_kriteria, value) VALUES ('$id_bobot', '$id_kriteria', '$value')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data berhasil disimpan!"); window.location = "../Form/formbobot.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '"); window.location = "../Form/formbobot.php";</script>';
    }
}
