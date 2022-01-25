<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "kominfo");

if (!$conn) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
