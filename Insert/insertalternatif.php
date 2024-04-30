<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_alternatif = $_POST["id_alternatif"];
    $nama_pegawai = $_POST["nama_pegawai"];

    // Selanjutnya, lakukan operasi penambahan data ke tabel alternatif.
    $sql = "INSERT INTO alternatif (id_alternatif, nama_pegawai) VALUES ('$id_alternatif', '$nama_pegawai')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data berhasil disimpan!"); window.location = "../Form/formalternatif.php";</script>';
    } else {
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '"); window.location = "../Form/formalternatif.php";</script>';
    }
}
