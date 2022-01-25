<!DOCTYPE html>
<html>

<head>

    <title>Kalkulasi AHP | DSS Penerimaan Staff Departemen Kominfo HIMATIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- CSS Boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" crossorigin="anonymous">

</head>

<body>
    <?php include('include/header.php');
    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }
    ?>

    <div class="container-sm">
        <div class="row mt-3 justify-content-center">
            <p class="display-6 fst-italic fw-bolder">Data Alternatif</p>
            <table class="table table-light table-striped table-bordered table-hover">
                <thead class="text-center align-middle">
                    <?php
                    // Header sql query
                    $r_n_kriteria = mysqli_query($conn, "SELECT id_kriteria, nama_kriteria FROM kriteria ORDER BY id_kriteria ASC");
                    $r_b_kriteria = mysqli_query($conn, "SELECT bobot_kriteria FROM kriteria ORDER BY id_kriteria ASC");

                    ?>
                    <tr>
                        <th rowspan="3">Alternatif</th>
                        <th colspan="4">Kriteria</th>
                        <th rowspan="3">Hasil Akhir</th>
                    </tr>
                    <tr class="table-primary fst-italic">
                        <?php
                        //fetch nama kriteria
                        while ($nama_kriteria = mysqli_fetch_array($r_n_kriteria)) {
                        ?>
                            <th><?php echo $nama_kriteria['nama_kriteria'];
                                echo " (" . $nama_kriteria['id_kriteria'] . ")"; ?></th>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr class="table-secondary fst-italic">
                        <?php
                        //fetch bobot kriteria
                        while ($bobot_kriteria = mysqli_fetch_array($r_b_kriteria)) {
                        ?>
                            <th><?php echo $bobot_kriteria['bobot_kriteria'] ?></th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Body sql query - hasil
                    $r_alternatif = mysqli_query($conn, "SELECT * FROM alternatif ORDER BY id_alternatif ASC");
                    while ($alt1 = mysqli_fetch_assoc($r_alternatif)) {
                    ?>
                        <tr>
                            <th> <?= $alt1['nama']; ?> </th>
                            <?php
                            $a = $alt1['id_alternatif'];

                            $r_kriteria = mysqli_query($conn, "SELECT * FROM kriteria ORDER BY id_kriteria ASC");
                            while ($kri1 = mysqli_fetch_assoc($r_kriteria)) {
                                $b = $kri1['id_kriteria'];
                            ?>

                                <?php
                                $r_hasil = mysqli_query($conn, "SELECT * FROM kalkulasi_ahp WHERE id_kriteria='$b' and id_alternatif='$a' ORDER BY id_kriteria");
                                while ($ran1 = mysqli_fetch_assoc($r_hasil)) {
                                ?>
                                    <td>
                                        <?php echo number_format($ran1['mat_alternatif'], 2);
                                        ?>
                                    </td>
                            <?php
                                }
                            }
                            ?>
                            <td>
                                <?php
                                $r_hasil_akhir = mysqli_query($conn, "SELECT * FROM alternatif WHERE id_alternatif='$a' ORDER BY id_alternatif");
                                while ($ran2 = mysqli_fetch_assoc($r_hasil_akhir)) {
                                    echo $ran2['hasil_akhir'];
                                }
                                ?>
                            </td>
                        <?php
                    }
                        ?>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="row mt-2 justify-content-center">
            <p class="display-6 fst-italic fw-bolder">Hasil Ranking</p>
            <table class="table table-light table-striped table-bordered table-hover" style="width: 70%;">
                <thead class="text-center align-middle">
                    <tr>
                        <th style="width: 10%;">Peringkat</th>
                        <th style="width: 15%;">NIM</th>
                        <th style="width: 35%;">Nama</th>
                        <th>Hasil Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $num = 1;
                    $r_hasil_akhir = mysqli_query($conn, "SELECT * FROM alternatif ORDER BY hasil_akhir DESC");
                    while ($ran2 = mysqli_fetch_assoc($r_hasil_akhir)) {
                    ?>
                        <tr>
                            <td><?php echo $num++; ?></td>
                            <td><?php echo $ran2['nim'] ?></td>
                            <td><?php echo $ran2['nama'] ?></td>
                            <td><?php echo $ran2['hasil_akhir'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </p>
    </div>
</body>

</html>