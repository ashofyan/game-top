<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
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

    <div class="bg-image" style="background-image: url('assets/image/background-2.jpg'); height: 100vh;">
        <div class="container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
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

            <div class="container mt-3">
                <div class="row ">
                    <div class=" d-flex justify-content-center ">

                        <a href="1-mulai.php">
                            <button class="btn shadow-0" id="btn" onclick="audio.play();">
                                <img src="assets/logo.svg" height="200vh" alt="">
                            </button>

                        </a>

                    </div>

                    <div class="text-center my-4 text-dark">
                        <h4>Klik untuk memulai permainan!</h4>
                    </div>
                </div>
            </div>
            <div class="container mt-5 footer">
                <div class="row">
                    <div class="text-center">
                        <img src="assets/image/WhatsApp Image 2022-10-27 at 09.49.39.jpeg" width="75px" class="rounded-circle" alt="...">
                    </div>
                    <div class="col mt-3">
                        <div class="text-center">
                            <p>The best of Nurul Afida for all Indonesian Children</p>
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
<script>
    var music = new Audio();
    music.src = "assets/audio/Old-MacDonald-_Instrumental_.aac";
    music.loop = true;
    music.play();
</script>

</html>