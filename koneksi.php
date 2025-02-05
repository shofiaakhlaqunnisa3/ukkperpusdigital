<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_apk_perpus_digital";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "koneksi berhasil!";
}
?>