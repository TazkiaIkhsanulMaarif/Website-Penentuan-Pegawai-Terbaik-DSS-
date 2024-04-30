<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>

<body>

    <h2>Normalisasi</h2>

    <?php
    include './config.php';

    // Query untuk mengambil semua data dari view "vpenilaian".
    $sql = "SELECT * FROM multimoora_1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tampilkan data dalam bentuk tabel.
        echo '<table>';
        echo '<tr><th>ID Nilai</th><th>ID Alternatif</th><th>Nama Pegawai</th><th>ID Kriteria</th><th>Nama Kriteria</th><th>ID Bobot</th><th>Value</th><th>Nilai</th><th>Nama Skala</th><th>Nilai tiap Matriks</th></tr>';
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
            echo '<td>' . $row["pra"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "Tidak ada data dalam view vpenilaian.";
    }

    // Tutup koneksi database.
    $conn->close();
    ?>

</body>

</html>