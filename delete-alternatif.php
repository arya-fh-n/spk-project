<?php
include 'connect.php';

$id = $_GET['id'];

$query = "DELETE FROM alternatif WHERE id_alternatif = '$id'";

if (mysqli_query($conn, $query)) {
    header("location: alternatif.php");
} else {
    echo $query;
}
