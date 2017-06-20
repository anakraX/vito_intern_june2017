<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baqdhat";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_POST['id']);
$nama = mysqli_real_escape_string($link, $_POST['nama']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$umur = mysqli_real_escape_string($link, $_POST['umur']);
$tanggal_dibuat = mysqli_real_escape_string($link, $_POST['tanggal_dibuat']);

$sql = "INSERT INTO data_siswa (id, nama, username, password, umur, tanggal_dibuat) VALUES ('$id', '$nama', '$username', '$password', '$umur', '$tanggal_dibuat')";
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>