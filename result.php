<?php
include './config.php';

$metode = isset($_GET['metode']) ? $_GET['metode'] : '';

if ($metode == 'SAW') {
    echo "<html>";
    echo "<head>";
    echo "<title>Hasil Metode SAW</title>";
    echo "<style>";
    echo "body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f4f4f4;}";
    echo "h2 {text-align: center; color: #333;}";
    echo "h3 {color: #3498db;}";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Metode SAW</h2>";

    // Tampilkan hasil result_1
    echo "<h3>Result 1 (Matrix Keputusan)</h3>";
    include './Result/resultsaw_1.php';

    // Tampilkan hasil result_2
    echo "<h3>Result 2 (Normalisasi)</h3>";
    include './Result/resultsaw_2.php';

    // Tampilkan hasil result_3
    echo "<h3>Result 3 (Rangking)</h3>";
    include './Result/resultsaw_3.php';

    echo "</body>";
    echo "</html>";
} elseif ($metode == 'WP') {
    echo "<html>";
    echo "<head>";
    echo "<title>Hasil Metode WP</title>";
    echo "<style>";
    echo "body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f4f4f4;}";
    echo "h2 {text-align: center; color: #333;}";
    echo "h3 {color: #3498db;}";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Metode WP</h2>";

    // Tampilkan hasil result_1
    echo "<h3>Result 1 (Jumlah Bobot)</h3>";
    include './Result/resultwp_1.php';

    // Tampilkan hasil result_2
    echo "<h3>Result 2 (Normalisasi Bobot)</h3>";
    include './Result/resultwp_2.php';

    // Tampilkan hasil result_3
    echo "<h3>Result 3 (Nilai Pangkat Pra Nilai S)</h3>";
    include './Result/resultwp_3.php';

    // Tampilkan hasil result_3
    echo "<h3>Result 4 (Nilai S)</h3>";
    include './Result/resultwp_4.php';

    // Tampilkan hasil result_3
    echo "<h3>Result 5 (Sum Nilai S)</h3>";
    include './Result/resultwp_5.php';

    // Tampilkan hasil result_3
    echo "<h3>Result 6(Nilai V)</h3>";
    include './Result/resultwp_6.php';

    echo "</body>";
    echo "</html>";
} elseif ($metode == 'TOPSIS') {
    echo "<html>";
    echo "<head>";
    echo "<title>Hasil Metode TOPSIS</title>";
    echo "<style>";
    echo "body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f4f4f4;}";
    echo "h2 {text-align: center; color: #333;}";
    echo "h3 {color: #3498db;}";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Metode TOPSIS</h2>";

    // Tampilkan hasil result_1
    echo "<h3>Result 1</h3>";
    include './Result/resulttopsis_1.php';

    // Tampilkan hasil result_2
    echo "<h3>Result 2</h3>";
    include './Result/resulttopsis_2.php';

    // Tampilkan hasil result_3
    echo "<h3>Result 3</h3>";
    include './Result/resulttopsis_3.php';

    // Tampilkan hasil result_4
    echo "<h3>Result 4</h3>";
    include './Result/resulttopsis_4.php';

    // Tampilkan hasil result_5
    echo "<h3>Result 5</h3>";
    include './Result/resulttopsis_5.php';

    // Tampilkan hasil result_6
    echo "<h3>Result 6</h3>";
    include './Result/resulttopsis_6.php';

    echo "</body>";
    echo "</html>";
} elseif ($metode == 'MULTIMOORA') {
    echo "<html>";
    echo "<head>";
    echo "<title>Hasil Metode MULTIMOORA</title>";
    echo "<style>";
    echo "body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f4f4f4;}";
    echo "h2 {text-align: center; color: #333;}";
    echo "h3 {color: #3498db;}";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Metode MULTIMOORA</h2>";

    // Tampilkan hasil result_1 (matriks)
    echo "<h3>Result 1 (Matrix Keputusan)</h3>";
    include './Multimora/matrix_keputusan.php';

    // Tampilkan hasil result_2 (normalisasi)
    echo "<h3>Result 2 (Normalisasi)</h3>";
    include './Multimora/multimora_1.php';
    include './Multimora/multimora_2.php';

    // Tampilkan hasil result_3 (ratio system & min max reference point)
    echo "<h3>Result 3 (Ratio System & Min Max Reference Point)</h3>";
    include './Multimora/multimora_3.php';

    // Tampilkan hasil result_4 (full multiplicative form)
    echo "<h3>Result 4 (Full Multiplicative Form)</h3>";
    include './Multimora/multimora_4.php';

    echo "</body>";
    echo "</html>";
} else {
    // Handle jika metode tidak valid
    echo "<html>";
    echo "<head>";
    echo "<title>Metode tidak valid</title>";
    echo "<style>";
    echo "body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 20px; background-color: #f4f4f4;}";
    echo "h2 {text-align: center; color: #333;}";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Metode tidak valid</h2>";

    echo "</body>";
    echo "</html>";
}
