<?php
session_start();
require "connection/db_conn.php";
$id = ($_GET['id']);
$query = mysqli_query($conn, "SELECT * FROM end WHERE id_final='$id'");

$data = mysqli_fetch_array($query);

if (!isset($_SESSION["register"])) {
    header("Location: 1-mulai.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulai Game</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MDB icon -->
    <link rel="icon" href="assets/logo.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
    <div class="d-flex justify-content-center " style="background-image: url('assets/image/background-2.jpg'); height: 100vh;">
        <div class="container-fluid">
            <nav class="navbar shadow-0 mb-3 d-md-none d-sm-block">
                <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="#">
                        <img src="assets/image/logo.svg" alt="Bootstrap" height="100">
                    </a>
                </div>
            </nav>

            <nav class="navbar shadow-0 mb-3 d-sm-none d-none  d-md-block">
                <div class="container d-flex">
                    <a class="navbar-brand" href="#">
                        <img src="assets/image/logo.svg" alt="Bootstrap" height="100">
                    </a>
                </div>
            </nav>
            <div class="d-flex justify-content-center">
                <div class="card border">
                    <div class=" card-body">
                        <div class="container ">
                            <div class="d-flex flex-column  justify-content-center">
                                <div class="col text-center">
                                    <h3><?php echo ($data['judul']); ?></h3>
                                </div>
                                <div class="col">
                                    <p><?php echo ($data['narasi_final']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>