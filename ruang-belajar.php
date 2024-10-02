<?php
session_start();


require "connection/db_conn.php";
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
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MDB icon -->
    <link rel="icon" href="assets/logo.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="d-flex justify-content-center " style="background-image: url('assets/image/background-2.jpg'); height: 100vh;">
        <div class="container-fluid">
            <nav class="navbar shadow-0 mb-3 d-md-none d-sm-block">
                <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="#">
                        <img src="assets/logo.svg" alt="Bootstrap" height="100">
                    </a>
                </div>
            </nav>

            <nav class="navbar shadow-0 mb-3 d-sm-none d-none  d-md-block">
                <div class="container d-flex">
                    <a class="navbar-brand" href="#">
                        <img src="assets/logo.svg" alt="Bootstrap" height="100">
                    </a>
                </div>
            </nav>

            <div class="container overflow-auto">
                <div class="row">
                    <div class="container bg-light shadow overflow-hidden text-center ">
                        <h3>RUANG BELAJAR</h3>
                        <div class="row ">
                            <div class="col-md-4 col-sm-6">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="row btn" id="btn" onclick="audio.play();" data-bs-toggle="modal" data-bs-target="#bentukBenda">
                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">BENTUK BENDA</p>
                                        </button>
                                        <!-- Pop Up -->

                                        <div class="modal fade" id="bentukBenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">BENTUK BENDA</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/1Gz-sOP-xhNvwqRXe6Pa0ZqGmuKhYRPnU/preview" allow="autoplay"></iframe>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="btn row " data-bs-toggle="modal" data-bs-target="#hurufKapital" id="btn" onclick="audio.play();">

                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">HURUF KAPITAL</p>
                                        </button>
                                        <!-- Pop Up -->

                                        <div class="modal fade" id="hurufKapital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">HURUF KAPITAL</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/1W55tHPt1tdvzVuo3xGH9XfJvavyFtmjH/preview" width="640" height="480" allow="autoplay"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="btn row" data-bs-toggle="modal" data-bs-target="#imbuhanModal" id="btn" onclick="audio.play();">
                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">IMBUHAN</p>
                                        </button>

                                        <!-- Pop Up -->

                                        <div class="modal fade" id="imbuhanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">IMBUHAN</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/1oiA7RoS29qmYwAauj6vy2M-lrosqr5Pv/preview" width="640" height="480" allow="autoplay"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="btn row" data-bs-toggle="modal" data-bs-target="#kataBaku" id="btn" onclick="audio.play();">
                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">KATA BAKU</p>
                                        </button>

                                        <!-- Pop Up -->

                                        <div class="modal fade" id="kataBaku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">KATA BAKU</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/1WVw8ChoPujkCa8Cd0Q1jJT3NKFKEaRsC/preview" width="640" height="480" allow="autoplay"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="btn row" data-bs-toggle="modal" data-bs-target="#kelasKata" id="btn" onclick="audio.play();">
                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">KELAS KATA</p>
                                        </button>
                                        <!-- Pop Up -->

                                        <div class="modal fade" id="kelasKata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">KELAS KATA</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/1hMi9X1N3dEB3EIJcr6Bh2etxYbWBfDSR/preview" width="640" height="480" allow="autoplay"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="btn row" data-bs-toggle="modal" data-bs-target="#paragrafKalimat" id="btn" onclick="audio.play();">
                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">PARAGRAF DAN KALIMAT</p>
                                        </button>
                                        <!-- Pop Up -->

                                        <div class="modal fade" id="paragrafKalimat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">PARAGRAF DAN KALIMAT</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/1qYPmSDlAdYqCVlFu6xNv4ZZpe4T0OMzh/preview" width="640" height="480" allow="autoplay"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 d-flex aligment-items-center flex ">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="btn row" data-bs-toggle="modal" data-bs-target="#strukturKalimat" id="btn" onclick="audio.play();">
                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">STRUKTUR KALIMAT</p>
                                        </button>
                                        <!-- Pop Up -->

                                        <div class="modal fade" id="strukturKalimat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">STRUKTU KALIMAT</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/10h3HS-2lk24_s6HLcJT7SsB2PtpxBk2l/preview" width="640" height="480" allow="autoplay"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="p-2">
                                    <div class="col">
                                        <button class="btn row" data-bs-toggle="modal" data-bs-target="#tandaBaca" id="btn" onclick="audio.play();">
                                            <img class="col w-25" src="assets/image/btn-ico.png" alt="">
                                            <p class="fs-6 mt-1">TANDA BACA</p>
                                        </button>
                                        <!-- Pop Up -->

                                        <div class="modal fade" id="tandaBaca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">TANDA BACA</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="https://drive.google.com/file/d/1k3hpf6pzit7WEOKH6WY80XGuUiQ0841h/preview" width="640" height="480" allow="autoplay"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="2-page.php">
                    <button class="btn text-white" id="btn" onclick="audio.play();" style="background-color: #4CAF50;">Selanjutnya</button>
                </a>
            </div>
        </div>
    </div>

</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript " src="js/script.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var music = new Audio();
    music.src = "assets/audio/Old-MacDonald-_Instrumental_.aac";
    music.loop = true;
    music.play();
</script>

</html>