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
    <link rel="icon" href="assets/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">



</head>

<body>
    <audio autoplay loop>
        <source src="assets/audio/Jeick Walker - Sand Castle [Official Audio].mp3" type="audio/mpeg">
    </audio>
    <div class="d-flex justify-content-center " style="background-image: url('assets/image/background-2.jpg'); height: 100vh;">
        <div class="container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column ">
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
            <div class="container-fluid col-sm-12 d-flex justify-content-center text-center">

                <form action="inputNarasi.php" method="post">
                    <h2>Tulislah tentang 3(tiga) gambar berikut : </h2>
                    <div class="row">
                        <div class="col mt-2 d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">

                                <?php
                                $acak = rand(1, 26);
                                switch ($acak) {
                                    case 1:
                                        $image_file = "assets/fileObject/1.webp";
                                        break;
                                    case 2:
                                        $image_file = "assets/fileObject/2.webp";
                                        break;
                                    case 3:
                                        $image_file = "assets/fileObject/1.png";
                                        break;
                                    case 4:
                                        $image_file = "assets/fileObject/2.png";
                                        break;
                                    case 5:
                                        $image_file = "assets/fileObject/3.png";
                                        break;
                                    case 6:
                                        $image_file = "assets/fileObject/4.png";
                                        break;
                                    case 7:
                                        $image_file = "assets/fileObject/5.png";
                                        break;
                                    case 8:
                                        $image_file = "assets/fileObject/6.png";
                                        break;
                                    case 9:
                                        $image_file = "assets/fileObject/1.jpeg";
                                        break;
                                    case 10:
                                        $image_file = "assets/fileObject/2.jpeg";
                                        break;
                                    case 11:
                                        $image_file = "assets/fileObject/3.jpeg";
                                        break;
                                    case 12:
                                        $image_file = "assets/fileObject/4.jpeg";
                                        break;
                                    case 13:
                                        $image_file = "assets/fileObject/1.jpg";
                                        break;
                                    case 14:
                                        $image_file = "assets/fileObject/2.jpg";
                                        break;
                                    case 15:
                                        $image_file = "assets/fileObject/3.jpg";
                                        break;
                                    case 16:
                                        $image_file = "assets/fileObject/4.jpg";
                                        break;
                                    case 17:
                                        $image_file = "assets/fileObject/5.jpg";
                                        break;
                                    case 18:
                                        $image_file = "assets/fileObject/6.jpg";
                                        break;
                                    case 19:
                                        $image_file = "assets/fileObject/7.jpg";
                                        break;
                                    case 20:
                                        $image_file = "assets/fileObject/8.jpg";
                                        break;
                                    case 21:
                                        $image_file = "assets/fileObject/9.jpg";
                                        break;
                                    case 22:
                                        $image_file = "assets/fileObject/10.jpg";
                                        break;
                                    case 23:
                                        $image_file = "assets/fileObject/11.jpg";
                                        break;
                                    case 24:
                                        $image_file = "assets/fileObject/12.jpg";
                                        break;
                                    case 25:
                                        $image_file = "assets/fileObject/13.jpg";
                                        break;
                                    case 26:
                                        $image_file = "assets/fileObject/14.jpg";
                                        break;
                                }
                                ?>
                                <div class="">
                                    <img class=" card-img-top " width="100px" height="180px" style="object-fit: contain;" src=<?php echo $image_file; ?> />
                                </div>

                                <?php
                                ?>
                                <div class="card-body">
                                    <div class="form-floating mt-5">
                                        <textarea class="form-control" name="narasiSatu" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                        <label for="floatingTextarea2">Tulis disini</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-2 d-flex justify-content-center">
                            <div class="card " style="width: 18rem;">

                                <?php
                                $acak = rand(1, 26);
                                switch ($acak) {
                                    case 1:
                                        $image_file = "assets/fileObject/15.jpg";
                                        break;
                                    case 2:
                                        $image_file = "assets/fileObject/16.jpg";
                                        break;
                                    case 3:
                                        $image_file = "assets/fileObject/17.jpg";
                                        break;
                                    case 4:
                                        $image_file = "assets/fileObject/18.jpg";
                                        break;
                                    case 5:
                                        $image_file = "assets/fileObject/19.jpg";
                                        break;
                                    case 6:
                                        $image_file = "assets/fileObject/20.jpg";
                                        break;
                                    case 7:
                                        $image_file = "assets/fileObject/21.jpg";
                                        break;
                                    case 8:
                                        $image_file = "assets/fileObject/22.jpg";
                                        break;
                                    case 9:
                                        $image_file = "assets/fileObject/23.jpg";
                                        break;
                                    case 10:
                                        $image_file = "assets/fileObject/24.jpg";
                                        break;
                                    case 11:
                                        $image_file = "assets/fileObject/25.jpg";
                                        break;
                                    case 12:
                                        $image_file = "assets/fileObject/26.jpg";
                                        break;
                                    case 13:
                                        $image_file = "assets/fileObject/27.jpg";
                                        break;
                                    case 14:
                                        $image_file = "assets/fileObject/28.jpg";
                                        break;
                                    case 15:
                                        $image_file = "assets/fileObject/29.jpg";
                                        break;
                                    case 16:
                                        $image_file = "assets/fileObject/30.jpg";
                                        break;
                                    case 17:
                                        $image_file = "assets/fileObject/31.jpg";
                                        break;
                                    case 18:
                                        $image_file = "assets/fileObject/32.jpg";
                                        break;
                                    case 19:
                                        $image_file = "assets/fileObject/33.jpg";
                                        break;
                                    case 20:
                                        $image_file = "assets/fileObject/34.jpg";
                                        break;
                                    case 21:
                                        $image_file = "assets/fileObject/35.jpg";
                                        break;
                                    case 22:
                                        $image_file = "assets/fileObject/36.jpg";
                                        break;
                                    case 23:
                                        $image_file = "assets/fileObject/37.jpg";
                                        break;
                                    case 24:
                                        $image_file = "assets/fileObject/38.jpg";
                                        break;
                                    case 25:
                                        $image_file = "assets/fileObject/39.jpg";
                                        break;
                                    case 26:
                                        $image_file = "assets/fileObject/40.jpg";
                                        break;
                                }
                                ?>
                                <img class=" card-img-top " width="100px" height="180px" style="object-fit: contain;" src=<?php echo $image_file; ?> />
                                <?php
                                ?>
                                <div class="card-body">
                                    <div class="form-floating mt-5">
                                        <textarea class="form-control" name="narasiDua" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                        <label for="floatingTextarea2">Tulis disini</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-2 d-flex justify-content-center">
                            <div class="card " style="width: 18rem;">

                                <?php
                                $acak = rand(1, 26);
                                switch ($acak) {
                                    case 1:
                                        $image_file = "assets/fileObject/41.jpg";
                                        break;
                                    case 2:
                                        $image_file = "assets/fileObject/42.jpg";
                                        break;
                                    case 3:
                                        $image_file = "assets/fileObject/43.jpg";
                                        break;
                                    case 4:
                                        $image_file = "assets/fileObject/44.jpg";
                                        break;
                                    case 5:
                                        $image_file = "assets/fileObject/45.jpg";
                                        break;
                                    case 6:
                                        $image_file = "assets/fileObject/46.jpg";
                                        break;
                                    case 7:
                                        $image_file = "assets/fileObject/47.jpg";
                                        break;
                                    case 8:
                                        $image_file = "assets/fileObject/48.jpg";
                                        break;
                                    case 9:
                                        $image_file = "assets/fileObject/49.jpg";
                                        break;
                                    case 10:
                                        $image_file = "assets/fileObject/50.jpg";
                                        break;
                                    case 11:
                                        $image_file = "assets/fileObject/51.jpg";
                                        break;
                                    case 12:
                                        $image_file = "assets/fileObject/52.jpg";
                                        break;
                                    case 13:
                                        $image_file = "assets/fileObject/53.jpg";
                                        break;
                                    case 14:
                                        $image_file = "assets/fileObject/54.jpg";
                                        break;
                                    case 15:
                                        $image_file = "assets/fileObject/55.jpg";
                                        break;
                                    case 16:
                                        $image_file = "assets/fileObject/56.jpg";
                                        break;
                                    case 17:
                                        $image_file = "assets/fileObject/57.jpg";
                                        break;
                                    case 18:
                                        $image_file = "assets/fileObject/58.jpg";
                                        break;
                                    case 19:
                                        $image_file = "assets/fileObject/59.jpg";
                                        break;
                                    case 20:
                                        $image_file = "assets/fileObject/60.jpg";
                                        break;
                                    case 21:
                                        $image_file = "assets/fileObject/61.jpg";
                                        break;
                                    case 22:
                                        $image_file = "assets/fileObject/62.jpg";
                                        break;
                                    case 23:
                                        $image_file = "assets/fileObject/63.jpg";
                                        break;
                                    case 24:
                                        $image_file = "assets/fileObject/64.jpg";
                                        break;
                                    case 25:
                                        $image_file = "assets/fileObject/65.jpg";
                                        break;
                                    case 26:
                                        $image_file = "assets/fileObject/66.jpg";
                                        break;
                                    case 27:
                                        $image_file = "assets/fileObject/67.jpg";
                                        break;
                                    case 28:
                                        $image_file = "assets/fileObject/68.jpg";
                                        break;
                                }
                                ?>
                                <img class=" card-img-top " width="100px" height="180px" style="object-fit: contain;" src=<?php echo $image_file; ?> />
                                <?php
                                ?>
                                <div class="card-body">
                                    <div class="form-floating mt-5">
                                        <textarea class="form-control" name="narasiTiga" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                        <label for="floatingTextarea2">Tulis disini</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-1">
                            <form>
                                <a type="button" class="btn text-white me-2" value="Kembali" onclick="history.back()" id="btn" onclick="audio.play();">
                                    <img src="assets/image/btn-back.png" alt="" width="40px">
                                </a>
                            </form>
                            <a href="3-finish.php">
                                <button class="btn text-white" type="submit" name="submit" id="btn" onclick="audio.play();">
                                    <a type="button" class="btn text-white">
                                        <img src="assets/image/btn-next.png" alt="" width="40px">
                                    </a>
                                </button>
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>






    </div>
    </div>
</body>
<script src="js/script.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="plugin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content1');
    CKEDITOR.replace('content2');
    CKEDITOR.replace('content3');
</script>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/mdb.min.js"></script>



</html>