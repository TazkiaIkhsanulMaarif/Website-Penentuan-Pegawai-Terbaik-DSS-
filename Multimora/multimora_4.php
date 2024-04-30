<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Multiplicative Form</title>
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

    <h2>Full Multiplicative Form</h2>

    <?php
    include './config.php';

    // Query untuk mengambil semua data dari tabel "multimoora_4".
    $sql = "SELECT * FROM multimoora_4";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tampilkan data dalam bentuk tabel.
        echo '<table>';
        echo '<tr><th>ID Alternatif</th><th>Hasil</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["id_alternatif"] . '</td>';
            echo '<td>' . $row["hasil"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "Tidak ada data dalam tabel multimoora_4.";
    }

    // Tutup koneksi database.
    $conn->close();
    ?>

</body>

</html>