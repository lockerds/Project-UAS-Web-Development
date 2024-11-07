<!DOCTYPE html>
<html lang="en">
 
  <?php include "include/head.php";
ob_start();
session_start();
if(!isset($_SESSION['useremail']))
    header("location:login.php");
?>


    <body class="sb-nav-fixed" style="background-color:#62dab6;">
  <?php include "include/menunav.php";?>
        <div id="layoutSidenav">
          <?php include "include/menu.php";?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Berita</h1>
                                    <div style="color: black;">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" style="color:gray; aria-current="page" href="dasboardberita.php">Active</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="color:black; font-weight: bold; font-size: 20px;" href="dasboardinputberita.php">Input Berita</a>

                </li>
              </ul>
            </div>
           <?php include "berita.php";?>
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
