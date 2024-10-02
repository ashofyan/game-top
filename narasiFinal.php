<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, "game_literasi");
$queryNarasi = mysqli_query($conn, "SELECT * FROM end");


if (isset($_POST['submit'])) {
    $judul = trim($_POST['judul']);
    $fnarasiFinal = trim($_POST['inputNarasiFinal']);
    $fnama = trim($_POST['nama']);

    //echo $fnarasi;
    $query = "INSERT INTO end VALUES ('','$judul', '$fnarasiFinal', '$fnama' )";
    mysqli_query($conn, $query);
    $setid = MYSQLI_INSERT_ID($conn);



    header('Location: 4-final.php?id=' . $setid . '');
    return mysqli_affected_rows($conn);
} else {
    echo "error";
}
