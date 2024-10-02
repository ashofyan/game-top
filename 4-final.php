<?php
session_start();
require "connection/db_conn.php";
$id = ($_GET['id']);
$query = mysqli_query($conn, "SELECT * FROM end WHERE id_final='$id'");
$queryForm = mysqli_query($conn, "SELECT * FROM form");

$data = mysqli_fetch_array($query);
$dataForm = mysqli_fetch_array($queryForm);
if (!isset($_SESSION["register"])) {
    header("Location: 1-mulai.php");
    exit;
}
$setid = MYSQLI_INSERT_ID($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game TOP</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MDB icon -->
    <link rel="icon" href="assets/logo.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
        @media print {
            .btn-selesai {
                display: none;
            }

            .btn-pdf {
                display: none;
            }

            .btn-wa {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="d-flex justify-content-center " style="background-image: url('assets/image/background-2.jpg') ;  height: 100vh;">
        <div class="container-fluid">
            <nav class="navbar shadow-0 mb-3 d-md-none d-sm-block">
                <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="#">
                        <img src="assets/image/logo.svg" alt="Bootstrap" height="100">
                    </a>
                </div>
            </nav>

            <nav class="navbar shadow-0 mb-3 d-sm-none d-none d-md-block">
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
                                    <p class="card-subtitle mb-2 text-muted ">Oleh: <?php echo ($data['nama']); ?></p>
                                </div>
                                <div class="col">
                                    <p><?php echo ($data['narasi_final']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-center justify-content-md-center d-flex mt-4">
                <div class="row">
                    <div class=" col mb-3  justify-content-sm-center">
                        <button class="btn btn-danger mb-3  btn-pdf" type="submit" value="" onClick="document.location.reload(true)"> Simpan PDF </button>
                        <a href="cetak.php" target="_blank"><button class="btn btn-danger mb-3  btn-pdf" type="submit" value=""> Simpan PDF </button></a>

                        <button class="btn btn-success mb-3 btn-wa" type="submit" value=""> <a href="https://api.whatsapp.com/" class="text-white">Bagikan Ke Whatsapp</a> </button>
                        <a href="end-session.php">
                            <button class="btn btn-primary btn-selesai mb-3">Selesai</button>
                        </a>

                    </div>
                    <div class=" mb-3 justify-content-sm-center">

                    </div>
                    <div class=" mb-3 justify-content-sm-center">

                    </div>


                </div>
            </div>

        </div>
    </div>

</body>
<script>
    window.print();
</script>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function reloadpage() {
        location.reload()
    }
</script>

</html>