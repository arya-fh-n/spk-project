<?php
include 'connect.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgl_lahir = strtotime($_POST['dob']);
$tanggal_lahir = date('Y-m-d', $tgl_lahir);
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$hasil_akhir = $_POST['hasil'];

$query = "UPDATE `alternatif` SET `nim`='$nim',`nama`='$nama',`tanggal_lahir`='$tanggal_lahir',`kelamin`='$gender',`alamat`='$alamat',`prodi`='$prodi',`kelas`='$kelas',`semester`='$semester',`hasil_akhir`='$hasil_akhir' WHERE `id_alternatif` = '$id'";

if (mysqli_query($conn, $query)) {
    header('Location: alternatif.php');
} else {
    echo $query;
}
