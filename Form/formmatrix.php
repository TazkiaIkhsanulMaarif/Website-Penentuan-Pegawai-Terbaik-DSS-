<?php
// Ambil data dari tabel kepentingan dan isi dropdown.
include '../config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Tabel Matrix</title>
</head>

<body>

    <h2>Form Tabel Matrix</h2>

    <form action="../Insert/insertmatrix.php" method="POST">
        <label for="id_nilai">ID Nilai:</label>
        <input type="text" name="id_nilai" required><br>

        <label for="id_bobot">ID Bobot (Kepentingan):</label>
        <select name="id_bobot" required>
            <?php

            $sql = "SELECT id_bobot FROM kepentingan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id_bobot"] . '">' . $row["id_bobot"] . '</option>';
                }
            }
            ?>
        </select><br>

        <label for="id_alternatif">ID Alternatif:</label>
        <select name="id_alternatif" required>
            <?php
            // Ambil data dari tabel alternatif dan isi dropdown.
            $sql = "SELECT * FROM alternatif";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id_alternatif"] . '">' . $row["nama_pegawai"] . '</option>';
                }
            }
            ?>
        </select><br>

        <label for="id_skala">ID Skala:</label>
        <select name="id_skala" required>
            <?php
            // Ambil data dari tabel skala dan isi dropdown.
            $sql = "SELECT * FROM skala";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id_skala"] . '">' . $row["nama_skala"] . '</option>';
                }
            }
            ?>
        </select><br>

        <input type="submit" value="Simpan">
    </form>

</body>

</html>