<!DOCTYPE html>
<html lang="en">
 
  <?php include "include/head.php";
ob_start();
session_start();
if(!isset($_SESSION['useremail']))
    header("location:login.php");
?>
    <body class="sb-nav-fixed" style="background-color:#da6862;">
  <?php include "include/menunav.php";?>
        <div id="layoutSidenav">
          <?php include "include/menu.php";?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Pusat Oleh-oleh</h1>
                       
                       <?php include "editoleh.php";?>
                    </div>
                </main>
<?php include "include/footer.php";?>
            </div>
        </div>
<?php include "include/scriptjs.php";?>
    </body>
</html>

<?php 
mysqli_close($connection);

    ?>
