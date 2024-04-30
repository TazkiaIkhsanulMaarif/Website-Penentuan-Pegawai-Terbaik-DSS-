<?php
$host = "localhost:3306";
$username = "root";
$password = "";
$database = "dss_pegawaiterbaik";

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
} else {
    // echo "Koneksi database berhasil!";
    // Di sini Anda dapat melakukan operasi database seperti pengambilan data, pembaruan, penyisipan, dan lainnya.
    // Misalnya:
    // $sql = "SELECT * FROM nama_tabel";
    // $result = $conn->query($sql);

    // Setelah selesai, jangan lupa untuk menutup koneksi:
    // $conn->close();
}
