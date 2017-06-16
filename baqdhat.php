<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baqdhat";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'INSERT INTO siswa (ID, Nama, Username, Password, Umur,Tanggal_Dibuat) VALUES (1234567890, "Vito Raditya F", "YooMama", "1234jjk", 23, "2017-03-15")';
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>