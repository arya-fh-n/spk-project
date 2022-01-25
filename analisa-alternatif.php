<!DOCTYPE html>
<html lang="en">

<head>
    <title>Analisa Alternatif | DSS Penerimaan Staff Departemen Kominfo HIMATIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" crossorigin="anonymous">

</head>

<body>
    <?php include('include/header.php');
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }
    ?>

    <div class="container-sm pt-3">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="alert alert-success" role="alert">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo 'Selamat datang, ' . $_SESSION['username'] . '.';
                    }
                    ?>
                </div>
            </div>
            <?php
            include('include/nav-alternatif.php');
            ?>
            <!-- Tabel data alternatif -->
            <table class="table table-light table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Kriteria</th>
                        <th>Alternatif Pertama</th>
                        <th>Alternatif Kedua</th>
                        <th>Tingkat Alternatif</th>
                        <th>Hasil Analisa</th>
                        <!-- <th>Opsi</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;

                    $result = mysqli_query($conn, "SELECT * FROM analisa_alternatif ORDER BY id_kriteria ASC, alternatif_pertama ASC, alternatif_kedua ASC");
                    while ($row = mysqli_fetch_array($result)) { //fetch_array
                    ?>
                        <tr>
                            <td><?php echo $num++; ?></td>
                            <td><?php echo $row['id_kriteria']; ?></td>
                            <td><?php echo $row['alternatif_pertama']; ?></td>
                            <td><?php echo $row['alternatif_kedua']; ?></td>
                            <td><?php echo $row['tingkat_alternatif']; ?></td>
                            <td><?php echo $row['hasil_analisa_alternatif']; ?></td>
                            <!-- <td class="d-grid gap-2">
                                <a href="edit.php?id=<?php echo $row['id_alternatif']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id_alternatif']; ?>" class="btn btn-danger" onclick="return confirm('Apa Anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td> -->
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <footer>
                <p class="text-center text-muted">&copy; 2021 Flextronics Co.</p>
            </footer>
</body>

</html>