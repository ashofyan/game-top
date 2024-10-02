<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, "game_literasi");
$queryNarasi = mysqli_query($conn, "SELECT * FROM narasi");


if (isset($_POST['submit'])) {
    $fnarasiSatu = trim($_POST['narasiSatu']);
    $fnarasiDua = trim($_POST['narasiDua']);
    $fnarasiTiga = trim($_POST['narasiTiga']);
    //echo $fnarasi;
    $query = "INSERT INTO narasi VALUES ('','$fnarasiSatu', '$fnarasiDua', '$fnarasiTiga' )";
    echo $query;
    mysqli_query($conn, $query);
    $setid = MYSQLI_INSERT_ID($conn);



    header('Location: 3-finish.php?id=' . $setid . '');
    return mysqli_affected_rows($conn);
} else {
    print($query);
}
