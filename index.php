<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Comparison</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .menu {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .menu a {
            margin: 0 20px;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid #3498db;
            color: #3498db;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .menu a:hover {
            background-color: #3498db;
            color: #fff;
        }

        /* Optional: Customize the appearance of the table */
        table.dataTable {
            width: 100%;
            margin-top: 10px;
            clear: both;
            border-collapse: separate;
            border-spacing: 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .dataTables_wrapper {
            padding: 10px;
        }
    </style>
</head>

<body>

    <h1>MULTIMOORA Web App</h1>

    <div class="menu">
        <!-- Link untuk Metode SAW -->
        <a href="result.php?metode=SAW" target="_blank">Metode SAW</a>

        <!-- Link untuk Metode WP -->
        <a href="result.php?metode=WP" target="_blank">Metode WP</a>

        <!-- Link untuk Metode TOPSIS -->
        <a href="result.php?metode=TOPSIS" target="_blank">Metode TOPSIS</a>

        <!-- Link untuk Metode MULTIMOORA -->
        <a href="result.php?metode=MULTIMOORA" target="_blank">Metode MULTIMOORA</a>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JavaScript untuk menampilkan/sembunyikan hasil -->
    <script>
        function toggleResult(resultId) {
            var resultContainer = document.getElementById(resultId);
            if (resultContainer.style.display === "none") {
                resultContainer.style.display = "block";
            } else {
                resultContainer.style.display = "none";
            }
        }
    </script>

</body>

</html>