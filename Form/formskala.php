<!DOCTYPE html>
<html>

<head>
    <title>Form Tabel Skala</title>
</head>

<body>

    <h2>Form Tabel Skala</h2>

    <form action="../Insert/insertskala.php" method="POST">
        <label for="id_skala">ID Skala:</label>
        <input type="text" name="id_skala" required><br>

        <label for="nama_skala">Nama Skala:</label>
        <input type="text" name="nama_skala" required><br>

        <label for="value">Value:</label>
        <input type="number" step="0.01" name="value" required><br>
        <!-- step="0.01" memungkinkan input dengan dua desimal -->

        <input type="submit" value="Simpan">
    </form>

</body>

</html>