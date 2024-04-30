<html>

<head>
    <title>Form Tabel Kriteria</title>
</head>

<body>

    <h2>Form Tabel Kriteria</h2>

    <form action="../Insert/insertkriteria.php" method="POST">
        <label for="id_kriteria">ID Kriteria:</label>
        <input type="number" name="id_kriteria" required><br>

        <label for="nama_kriteria">Nama Kriteria:</label>
        <input type="text" name="nama_kriteria" required><br>

        <input type="submit" value="Simpan">
    </form>

</body>

</html>