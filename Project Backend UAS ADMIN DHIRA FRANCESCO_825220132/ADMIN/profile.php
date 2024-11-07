<!DOCTYPE html>
<html lang="id">
<?php
include "include/config.php";

// Tambahkan kode di sini untuk memeriksa apakah pengguna sudah masuk. Alihkan ke halaman login jika belum masuk.
//session_start();
$useremail = $_SESSION['useremail']; // Diasumsikan pengguna sudah masuk.

$sql_get_user_info = mysqli_query($connection, "SELECT * FROM useradmin WHERE userEMAIL = '$useremail'");
$row_user_info = mysqli_fetch_array($sql_get_user_info);
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/styleprofile.css" rel="stylesheet">

    <title>Profil Pengguna</title>
</head>

<body>
    <section class="_form_05">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_form-05-box">
                        <div class="row">
                            <div class="col-sm-7 _nb-pl">
                                <div class="_mn_df">
                                    <div class="main-head">
                                        <h2>Profil Pengguna</h2>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail">Email:</label>
                                        <input type="email" id="inputEmail" class="form-control" value="<?php echo $row_user_info['userEMAIL']; ?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword">Kata Sandi:</label>
                                        <input type="password" id="inputPassword" class="form-control" placeholder="********" disabled>
                                    </div>

                                    <div class="form-group">
                                        <a class="_btn_04" href="changepassword.php">Ubah Kata Sandi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
//mysqli_close($connection);
//ob_end_flush();
?>

</html>