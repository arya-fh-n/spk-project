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

$query = "INSERT INTO `alternatif`(`id_alternatif`, `nim`, `nama`, `tanggal_lahir`, `kelamin`, `alamat`, `prodi`, `kelas`, `semester`, `hasil_akhir`) VALUES ('$id','$nim','$nama','$tanggal_lahir','$gender','$alamat','$prodi','$kelas','$semester','$hasil_akhir')";

if (mysqli_query($conn, $query)) {
    header('Location: alternatif.php');
} else {
    echo $query;
}
