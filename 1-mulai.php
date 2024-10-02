<?php
session_start();

if (isset($_SESSION["register"])) {
    header("Location: ruang-belajar.php");
    exit;
}

require "connection/db_conn.php";


if (isset($_POST["submit"])) {

    if (add_form($_POST) > 0) {
        $_SESSION["register"] = true;
        header("Location: ruang-belajar.php");
        exit;
    }
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
<style>
    .btn-icon {
        text-align: center;
        padding: 10px 15px;
        size: 10px;
    }

    .btn-icon a:hover {
        height: 120px;
    }

    .no-decoration {
        text-decoration: none;
    }
</style>

<body onload="music()">

    <div class="d-flex justify-content-center " style="background-image: url('assets/image/background-2.jpg'); height: 100vh;">
        <div class="container-fluid">
            <nav class="navbar shadow-0 mb-3 d-md-none d-sm-block">
                <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="#">
                        <img src="assets/logo_kemenag1.png" alt="Bootstrap" height="100">
                    </a>
                </div>
            </nav>

            <nav class="navbar shadow-0 mb-3 d-sm-none d-none  d-md-block">
                <div class="container d-flex">
                    <a class="navbar-brand" href="#">
                        <img src="assets/logo_kemenag1.png" alt="Bootstrap" height="100">
                    </a>
                </div>
            </nav>

            <div class="container-fluid bg-light rounded-3 text-center shadow">
                <div class="row align-items-center">
                    <div class="col-md-7 col-sm-12">
                        <div class="col">
                            <h2>Selamat Datang</h2>
                            <img class="m-3" src="assets/logo.svg" alt="" width="300vh">
                            <div class="row mt-1">
                                <div class="col">
                                    <a href="metodetop.php">
                                        <button class="btn shadow-0" id="btn" onclick="audio.play();">
                                            <img src="assets/image/btn-ico.png" alt="" width="80px">
                                            <div class="col">
                                                <p class="no-decoration">METODE TOP</p>
                                            </div>
                                        </button>
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="pelajarpancasila.php">
                                        <button class="btn shadow-0" id="btn" onclick="audio.play();">
                                            <img src="assets/image/btn-ico.png" alt="" width="80px">

                                            <div class="col">
                                                <p class="no-decoration">PELAJAR PANCASILA</p>
                                            </div>

                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center col-md-5 col-sm-12">
                        <form class="col-8" action="" method="post">
                            <h2 class="my-5">Masukan Nama</h2>
                            <input class="form-control mb-3" type="text" placeholder="Nama" aria-label="default input example" name="nama" id="nama" required>
                            <input class="form-control mb-3" type="text" placeholder="Kelas" aria-label="default input example" name="kelas" id="kelas" required>
                            <input class="form-control mb-3" type="text" placeholder="Asal Sekolah" aria-label="default input example" name="sekolah" id="sekolah" required>

                            <button class="btn text-white mb-5" style="background-color: #4CAF50;" type="submit" name="submit">Mulai</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/script.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var music = new Audio();
    music.src = "assets/audio/Old-MacDonald-_Instrumental_.aac";
    music.loop = true;
    music.play();
</script>


</html>