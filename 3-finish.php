<?php
session_start();
require "connection/db_conn.php";
$id = ($_GET['id']);
$query = mysqli_query($conn, "SELECT * FROM narasi WHERE id_narasi='$id'");

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
    <title>Game TOP</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

    <link rel="icon" href="assets/logo.svg" type="image/x-icon" />
</head>

<body>
    <audio autoplay loop>
        <source src="assets/audio/Jeick Walker - Sand Castle [Official Audio].mp3" type="audio/mpeg">
    </audio>
    <div clas style="background-image: url('assets/image/background-4.jpg');  background-position: center;
  background-repeat: true;
  background-size: cover; height:100%;">
        <div class="d-flex justify-content-center ">
            <div class=" container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
                <nav class="navbar shadow-0 d-md-none d-sm-block">
                    <div class="container d-flex justify-content-center">
                        <a class="navbar-brand" href="#">
                            <img src="assets/logo.svg" alt="Bootstrap" height="100">
                        </a>
                    </div>
                </nav>
                <nav class="navbar shadow-0 d-sm-none d-none  d-md-block">
                    <div class="container d-flex">
                        <a class="navbar-brand" href="#">
                            <img src="assets/logo.svg" alt="Bootstrap" height="100">
                        </a>
                    </div>
                </nav>
                <div class="container mt-3 d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mb-3">
                            <div class="card h-100">
                                <div class=" card-body shadow">
                                    <h5 class="card-title">Catatan</h5>
                                    <p class="card-text">Telitilah naskahmu, apakah sudah menggunakan tanda baca dan aturan penulisan yang benar? Berikan judul pada karya tulismu dan
                                        Sinkronkan paragraf 1-3 dengan kata penghubung dan awalan yang tepat agar mengahasilkan karya yang padu dan utuh.
                                        Kemudian presentasikan/bacalah bersama orang-orang yang paham agar semakin berkembang menjadi siswa millenial abad 21.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-12 pb-3">
                            <form action="narasiFinal.php" method="post">
                                <div class="d-flex flex-row jusify-content-center col-sm-12">
                                    <label class="me-2 mt-1 text-white" for=" judul" class="form-label">
                                        <h5>Judul:</h5>
                                    </label>
                                    <input id="judul" name="judul" type="text" class="form-control mb-3" placeholder="Masukan judul disini" required>
                                </div>
                                <div class="d-flex flex-row jusify-content-center col-sm-12">
                                    <label class="me-2 mt-1 text-white" for="nama" class="form-label">
                                        <h5>Nama:</h5>
                                    </label>
                                    <input id="nama" name="nama" type="text" class="form-control mb-3" placeholder="Masukan nama disini" required>
                                </div>


                                <textarea class="shadow" name="inputNarasiFinal" id="" cols="30" rows="10">
                                    <p><?php echo ($data['narasi1']); ?></p>
                                    <p><?php echo ($data['narasi2']); ?></p>
                                    <p><?php echo ($data['narasi3']); ?></p>
                                </textarea>
                                <br>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class=" mt-3 d-flex flex-column ">
                                <button class="btn btn-light h-10 mb-3 fw-bold" type="submit" name="submit"> Simpan Karyamu </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



</body>

<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="plugin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('inputNarasiFinal');
</script>
<script></script>

</html>