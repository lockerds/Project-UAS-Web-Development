<!DOCTYPE html>
<html>
  <?php include "admin/include/config.php";
  $kategori = mysqli_query($connection,"select * from kategoriwisata");
  $destinasi = mysqli_query($connection,"select * from kategoriwisata,destinasi 
  WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE");

  $destinasi2 = mysqli_query($connection, "SELECT * FROM kategoriwisata, destinasi 
  WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE AND kategoriwisata.kategoriKODE = 'K002'");


  $restoran = mysqli_query($connection,"select * from restoran");
  $restoran1 = mysqli_query($connection,"select * from kategoriwisata,restoran 
  WHERE kategoriwisata.kategoriKODE = restoran.kategoriKODE");

  $oleh = mysqli_query($connection,"select * from oleh2");
  $oleh1 = mysqli_query($connection,"select * from kategoriwisata,oleh2 
  WHERE kategoriwisata.kategoriKODE = oleh2.kategoriKODE");
  $daerahSudahMuncul = array();
  $daerahSudahMuncul1 = array();

  $berita = mysqli_query($connection,"select * from berita,kategoriwisata WHERE kategoriwisata.kategoriKODE = berita.kategoriKODE");
?>



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="ADMIN/css/styles.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Menambahkan warna-warni gradient pada teks */
        .gradient-text {
            background: linear-gradient(45deg, #ff0000, #ffff00, #0000ff, #800080);
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>
</head>

<body style="background-color:#ECF4D6;">
    <div class ="container-fluid"><!--container-->
    <!-- membuat menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"  style="margin-top:20px">
          <a class="navbar-brand" href="user.php">Destinasi Indonesia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="beritauser.php" style="color:red;">News</a>
              </li>
            <!--  <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="destinasi.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori Wisata
                </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                  if(mysqli_num_rows($kategori) > 0)
                    {
                      while($row=mysqli_fetch_array($kategori))
                      {?><a class="dropdown-item" href="destinasi.php">
                        <?php echo $row["kategoriNAMA"];?></a>
                  <?php  }
                    }
                  ?>

                <!--   <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                </ul> 
              </li>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="restoranuser.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Restoran
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    if (mysqli_num_rows($restoran) > 0) {
                        while ($row = mysqli_fetch_array($restoran)) {
                            // Periksa apakah daerah sudah muncul sebelumnya
                            if (!in_array($row["restoranDAERAH"], $daerahSudahMuncul)) {
                                ?><a class="dropdown-item" href="restoranuser.php">
                                    <?php echo $row["restoranDAERAH"]; ?></a>
                            <?php
                                // Tambahkan daerah ke dalam variabel penSaya
                                $daerahSudahMuncul[] = $row["restoranDAERAH"];
                            }
                        }
                    }
                    ?>
                </ul>
            </li>
              
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="pusatolehuser.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pusat Oleh-oleh
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                  if(mysqli_num_rows($oleh) > 0)
                    {
                      while ($row = mysqli_fetch_array($oleh)) {
                        // Periksa apakah daerah sudah muncul sebelumnya
                        if (!in_array($row["olehDAERAH"], $daerahSudahMuncul1)) {
                            ?><a class="dropdown-item" href="pusatolehuser.php">
                                <?php echo $row["olehDAERAH"]; ?></a>
                        <?php
                            // Tambahkan daerah ke dalam variabel penSaya
                            $daerahSudahMuncul1[] = $row["olehDAERAH"];
                        }
                    }
                    }
                  ?>

                </ul>
              </li>
            </ul>

            
          </div>
        </div>
      </nav>
      <br>
    <!--menu-->
    <!--slide-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="ADMIN/images/pantaiora.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>Destinasi Wisata</h5>
        <p> Rekomendasi Destinasi Wisata Terbaik di Indonesia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/restoran.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>Restaurant</h5>
        <p>Rekomendasi Restaurant Terbaik di Indonesia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/sovenir.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>Souvenir Store</h5>
        <p>Rekomendasi Pusat Oleh-oleh Terbaik di Indonesia</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--slide-->
<br>

<section class="showcase">
    <div class="container-fluid p-0" id="oleh">
        <?php


        while ($row = mysqli_fetch_assoc($berita)) {
            ?>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/<?php echo $row['beritaFOTO']; ?>')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2><?php echo $row['beritaJUDUL']; ?></h2> 
                    <p class="lead mb-0"><?php echo $row['beritaISI']; ?></p>
                    <!-- Tambahkan iframe untuk peta sesuai dengan kolom beritaMAP jika ada -->
                    <BR>
                    <a><?php echo $row['beritaTANGGAL']; ?></a>
          
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="ADMIN/assets4/css/styles.css" rel="stylesheet" />
        </div>
    </div>





<div class="footer">
<footer class="footer-07">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading"><a href="#" class="logo">WEBDEP</a></h2>
						<p class="menu">
							<a href="user.php">Home</a>
							<a href="destinasi.php">Destinasi</a>
							<a href="restoranuser.php">Restaurant</a>
							<a href="pusatolehuser.php">Pusat Oleh-oleh</a>
              <a href="#testimoni">Testimonial</a>
							<a href="#section-about">About us</a>
						</p>
						<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
            </ul>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
					  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="ADMIN/asetfooter/css/ionicons.min.css">
  <link rel="stylesheet" href="ADMIN/asetfooter/css/stylefoot.css">
</div>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="ADMIN/js/jquery.min.js"></script>
    <script src="ADMIN/js/popper.js"></script>
    <script src="ADMIN/js/bootstrap.min.js"></script>
    <script src="ADMIN/js/main.js"></script>
</html>