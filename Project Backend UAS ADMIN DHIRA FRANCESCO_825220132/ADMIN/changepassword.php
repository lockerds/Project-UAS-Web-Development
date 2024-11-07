<!DOCTYPE html>
<html lang="id">

<?php
include "include/config.php";
ob_start();
session_start();

// Tambahkan kode di sini untuk memeriksa apakah pengguna sudah masuk. Alihkan ke halaman login jika belum masuk.

if (isset($_POST['submitChangePassword'])) {
    $oldPassword = md5($_POST["oldPassword"]);
    $newPassword = md5($_POST["newPassword"]);



    $useremail = $_SESSION['useremail']; 

    $sql_check_old_password = mysqli_query($connection, "SELECT * FROM useradmin WHERE userEMAIL = '$useremail' AND userPASS = '$oldPassword'");

    if (mysqli_num_rows($sql_check_old_password) > 0) {
        $sql_update_password = mysqli_query($connection, "UPDATE useradmin SET userPASS = '$newPassword' WHERE userEMAIL = '$useremail'");
        $changePasswordSuccess = true;
        header("location:../dasboardprofile.php");
    } else {
        $changePasswordError = "Kata sandi lama tidak benar. Silakan coba lagi.";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/stylechangepassword.css" rel="stylesheet">

    <title>Ubah Kata Sandi</title>
</head>

<body>
    <form method="POST">
        <section class="_form_05">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="_form-05-box">
                            <div class="row">
                                <div class="col-sm-7 _nb-pl">
                                    <div class="_mn_df">
                                        <div class="main-head">
                                            <h2>Ubah Kata Sandi</h2>
                                        </div>

                                        <?php
                                        if (isset($changePasswordError)) {
                                            echo '<div class="alert alert-danger" role="alert">' . $changePasswordError . '</div>';
                                        } elseif (isset($changePasswordSuccess)) {
                                            echo '<div class="alert alert-success" role="alert">Kata sandi berhasil diubah!</div>';
                                        }
                                        ?>

                                        <div class="form-group">
                                            <input type="password" name="oldPassword" class="form-control" placeholder="Masukkan Kata Sandi Lama" required="" aria-required="true">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="newPassword" class="form-control" placeholder="Masukkan Kata Sandi Baru" required="" aria-required="true">
                                        </div>

                                        <div class="form-group">
                                            <input class="_btn_04" type="submit" name="submitChangePassword" value="Ubah Kata Sandi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

<?php
mysqli_close($connection);
ob_end_flush();
?>

</html>
