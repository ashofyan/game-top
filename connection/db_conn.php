<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "game_literasi");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function add_form($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $sekolah = htmlspecialchars($data["sekolah"]);

    $query = "INSERT INTO form 
    VALUES
    ('', '$nama', '$kelas', '$sekolah')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
