<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Alternatif | DSS Penerimaan Staff Departemen Kominfo HIMATIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- CSS Bootstrap -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" crossorigin="anonymous">
</head>

<body>

    <?php
    include('include/header.php');
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
    }
    ?>

    <div class="container pt-3">
        <div class="card text-dark bg-white mb-3 mx-auto" style="width: 80%;">
            <div class="card-header fs-4">
                <b>Form Tambah Data Alternatif</b>
                <a href="alternatif.php" class="float-end btn btn-outline-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Lihat Data Alternatif</a>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="ms-4">
                            <form method="POST" action="sql-insert-alternatif.php" class="form-inline">
                                <div class="mb-3">
                                    <label>ID Alternatif <span class="text-danger">*</span></label> <small> (Contoh : A001, A002, dst.)</small>
                                    <input type="text" name="id" id="id" class="form-control form-control-sm" value="<?php if (isset($_GET['id'])) echo $_GET['id']; ?>" maxlength="4" placeholder="ID Alternatif..." required>
                                </div>
                                <div class="mb-3">
                                    <label>Nama Mahasiswa <span class="text-danger">*</span></label>
                                    <input type="text" name="nama" id="nama" class="form-control form-control-sm" value="<?php if (isset($_GET['nama'])) echo $_GET['nama']; ?>" maxlength="50" placeholder="Nama mahasiswa..." required>
                                </div>
                                <div class="mb-3">
                                    <label>NIM <span class="text-danger">*</span></label>
                                    <input type="text" name="nim" id="nim" class="form-control form-control-sm" value="<?php if (isset($_GET['nim'])) echo $_GET['nim']; ?>" maxlength="10" placeholder="NIM..." required>
                                </div>
                                <div class="mb-3">
                                    <label>Program Studi <span class="text-danger">*</span></label>
                                    <select id="prodi" name="prodi" class="form-control form-control-sm text-dark bg-light" required="">
                                        <option value="TI" <?php if (isset($_GET['prodi'])) echo "selected"; ?>>Teknik Informatika (TI)</option>
                                        <option value="TMD" <?php if (isset($_GET['prodi'])) echo "selected"; ?>>Teknik Multimedia Digital (TMD)</option>
                                        <option value="TMJ" <?php if (isset($_GET['prodi'])) echo "selected"; ?>>Teknik Multimedia dan Jaringan (TMJ)</option>
                                        <option value="TKJ" <?php if (isset($_GET['prodi'])) echo "selected"; ?>>Teknik Komputer dan Jaringan (TKJ)</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Semester <span class="text-danger">*</span></label>
                                    <input type="number" name="semester" id="semester" class="form-control form-control-sm" min="1" max="6" value="<?php if (isset($_GET['semester'])) echo $_GET['semester']; ?>" onKeyPress="if(this.value.length==1) return false;" oninput="validity.valid||(value='');" placeholder="Semester mahasiswa..." required>
                                </div>
                                <div class="mb-3">
                                    <label>Kelas <span class="text-danger">*</span></label> <small> (Contoh : TI 3A, TMD AeU, TMJ CCIT 5)</small>
                                    <input type="text" name="kelas" id="kelas" class="form-control form-control-sm" value="<?php if (isset($_GET['kelas'])) echo $_GET['kelas']; ?>" maxlength="30" placeholder="Kelas mahasiswa..." required>
                                </div>
                                <div class="mb-3">
                                    <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-sm text-dark bg-light" id="gender" name="gender" required="">
                                        <option value="L" <?php if (isset($_GET['gender'])) echo "selected"; ?>>Laki-laki</option>
                                        <option value="P" <?php if (isset($_GET['gender'])) echo "selected"; ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                    <input type="date" name="dob" id="dob" class="form-control form-control-sm" value="<?php if (isset($_GET['dob'])) echo $_GET['dob']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label>Alamat Domisili <span class="text-danger">*</span></label>
                                    <textarea name="alamat" id="alamat" class="form-control" maxlength="250" style="resize: none; height : 69pt"><?php if (isset($_GET['alamat'])) echo $_GET['alamat']; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Hasil Akhir <span class="text-danger">*</span></label>
                                    <input type="number" name="hasil" id="hasil" class="form-control form-control-sm" min="0" max="1" step=".01" value="<?php if (isset($_GET['hasil'])) echo $_GET['hasil']; ?>" onKeyPress="if(this.value.length==4) return false;" placeholder="Masukkan nilai akhir hitung..." required>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mb-2">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data</button>
                                        <a href="insert-alternatif.php" class="btn btn-danger mt-3"><i class="fa fa-fw fa-sync"></i> Bersihkan Form</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        // function changeProdi() {
        //     var select = document.getElementById("kategori").value;
        //     var prodi;
        //     switch (select) {
        //         case '1':
        //             prodi = "TI";
        //             break;
        //         case '2':
        //             prodi = "TMD";
        //             break;
        //         case '3':
        //             prodi = "TMJ";
        //             break;
        //         case '4':
        //             prodi = "TKJ";
        //             break;
        //     }

        //     document.getElementById("id").value = prodi;
        // }

        // function changeGender() {
        //     var select = document.getElementById("kategori").value;
        //     var gender;
        //     switch (select) {
        //         case '1':
        //             gender = "TI";
        //             break;
        //         case '2':
        //             gender = "TMD";
        //             break;
        //     }

        //     document.getElementById("id").value = gender;
        // }
    </script>
</body>

</html>