<?php
include './config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Metode SAW</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        h3 {
            color: #3498db;
        }
    </style>
</head>

<body>

    <h2>Metode SAW</h2>

    <!-- Menu -->
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#result1Modal">
                    Result 1 (Matrix Keputusan)
                </button>
            </div>
            <!-- Add other result buttons here -->
        </div>
    </div>

    <!-- Result 1 (Matrix Keputusan) Modal -->
    <div class="modal fade" id="result1Modal" tabindex="-1" role="dialog" aria-labelledby="result1ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="result1ModalLabel">Result 1 (Matrix Keputusan)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php include './Result/resultsaw_1.php'; ?>
                    <!-- Include the table content here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Tambah Data</button>
                    <!-- Add other action buttons here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Add other result modals here -->

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>