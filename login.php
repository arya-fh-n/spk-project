<?php
include('include/header.php');

$error = '';
$validate = '';

//cek session username
if (isset($_SESSION['username'])) header('Location: alternatif.php');

//cek form submitted atau tidak
if (isset($_POST['submit'])) {
    //hilangkan backslash ( / )
    $username = stripslashes($_POST['username']);

    //security form dari sql injection
    $username = mysqli_real_escape_string($conn, $username);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    //cek nilai form kosong atau tidak
    if (!empty(trim($username)) && !empty(trim($password))) {
        // select data dari tabel users
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);

        if ($rows != 0) {
            $hash = mysqli_fetch_assoc($result)['password'];
            if (password_verify($password, $hash)) {
                $_SESSION['username'] = $username;
                header('Location: index.php');
            }
        } else { //if error tampilkan error messages
            $error = 'Username atau password salah.';
        }
    } else {
        $error = 'Form login harus diisi.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | DSS Penerimaan Staff Departemen Kominfo HIMATIK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous"> -->

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex justify-content-around" style="padding-top: 3%;">
        <div class="col-12 col-sm-6 col-md-4">
            <?php if ($error != '') { ?>
                <div class="alert alert-danger" role="alert"><?= $error; ?> </div>
            <?php } ?>
            <div class="card text-dark bg-light mb-3 pt-auto justify-content-center">
                <div class="card-header text-center fs-3">
                    <b>Login</b>
                </div>
                <div class="card-body">
                    <!-- Form search -->
                    <form class="form-inline" action="login.php" method="POST">
                        <div class="row">
                            <div class="mb-2">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" maxlength="20" placeholder="Username..." style="width: 100%">
                            </div>
                            <div class="mb-2">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" id="InputPassword" name="password" maxlength="20" placeholder="Password..." style="width: 100%">
                                <?php
                                if ($validate != '') { ?>
                                    <p class="text-danger"> <?= $validate; ?></p>
                                <?php } ?>
                            </div>
                            <div class="mb-2 mt-2 text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-footer mt-2 text-center">
                <p>Belum punya akun? <a href="register.php">Register</a></p>
            </div>
        </div>
    </div>
    </div>

    <!-- Boostrap jQuery pertama, kemudian Popper.js, lalu Boostrap JS -->
    <script src="https://code.jquery.com.jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com.bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>