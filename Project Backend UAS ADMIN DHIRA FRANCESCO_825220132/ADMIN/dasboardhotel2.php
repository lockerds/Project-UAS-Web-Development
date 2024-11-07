<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php";
  session_start();
  if(!isset($_SESSION['useremail']))
    header("location:login.php");
?>
  <?php include "include/head.php";?>
    <body class="sb-nav-fixed" style="background-color: #ecbb18;">
  <?php include "include/menunav.php";?>
        <div id="layoutSidenav">
          <?php include "include/menu.php";?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Hotel</h1>
                     
                       <?php include "kuis2.php";?>
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
