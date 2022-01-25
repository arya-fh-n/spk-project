<?php
include('connect.php');
$reg = $login = $link_1 = $link_2 = '';

if (isset($_SESSION['username'])) {
  $reg = "Tambah Alternatif";
  $login = "Logout";
  $link_1 = "insert-alternatif.php";
  $link_2 = "logout.php";
} else {
  $reg = "Register";
  $login = "Login";
  $link_1 = "register.php";
  $link_2 = "login.php";
}
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="navbar-brand ">
      <strong>HIMATIK RISING</strong>
    </div>
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link text-dark">Home</a>
      </li>
      <li class="nav-item">
        <a href="kriteria.php" class="nav-link text-dark">Data Kriteria</a>
      </li>
      <li class="nav-item">
        <a href="alternatif.php" class="nav-link text-dark">Data Alternatif</a>
      </li>
      <li class="nav-item">
        <a href="kalkulasi.php" class="nav-link text-dark">Kalkulasi AHP</a>
      </li>
    </ul>
    <ul class="navbar-nav me-3">
      <li class="nav-item text-center me-3">
        <a href=<?= $link_1 ?> class="nav-link text-dark align-middle"><?= $reg ?></a>
      </li>
      <li class=" nav-item text-center">
        <a href=<?= $link_2 ?> class="btn btn-lg btn-outline-dark fw-bold px-4" style="border-radius: 8px;"><?= $login ?></a>
      </li>
    </ul>
  </div>
</nav>