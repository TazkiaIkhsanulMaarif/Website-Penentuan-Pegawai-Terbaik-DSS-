<html>

<head>
    <title>Form Tabel Kepentingan</title>
</head>

<body>

    <h2>Form Tabel Kepentingan</h2>

    <form action="../Insert/insertbobot.php" method="POST">
        <label for="id_bobot">ID Bobot:</label>
        <input type="number" name="id_bobot" required><br>

        <label for="id_kriteria">ID Kriteria:</label>
        <select name="id_kriteria" required>
            <?php
            include '../config.php';
            $sql = "SELECT id_kriteria, nama_kriteria FROM kriteria";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id_kriteria"] . '">' . $row["nama_kriteria"] . '</option>';
                }
            }
            $conn->close();
            ?>
        </select><br>

        <label for="value">Value:</label>
        <input type="number" step="0.01" name="value" required><br>

        <input type="submit" value="Simpan">
    </form>

</body>

</html>