<!DOCTYPE html>
<html>
  <?php include "ADMIN/include/config.php";
  $kategori = mysqli_query($connection,"select * from kategoriwisata");
  $destinasi = mysqli_query($connection,"select * from kategoriwisata,destinasi 
  WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE");
  $destinasi2 = mysqli_query($connection,"select * from kategoriwisata,destinasi 
  WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE");

  $restoran = mysqli_query($connection,"select * from restoran");
  $restoran1 = mysqli_query($connection,"select * from kategoriwisata,restoran 
  WHERE kategoriwisata.kategoriKODE = restoran.kategoriKODE");
  $restoran2 = mysqli_query($connection, "SELECT * FROM restoran WHERE restoranRATING='★★★★★'");
  

  $oleh = mysqli_query($connection,"select * from oleh2");
  $oleh1 = mysqli_query($connection,"select * from kategoriwisata,oleh2 
  WHERE kategoriwisata.kategoriKODE = oleh2.kategoriKODE");
  $oleh2 = mysqli_query($connection, "SELECT * FROM oleh2 WHERE olehRATING='★★★★★'");
  $daerahSudahMuncul = array();
  $daerahSudahMuncul1 = array();
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
                <a class="nav-link active" aria-current="page" href="beritauser.php">News</a>
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
                <a class="nav-link dropdown-toggle" href="pusatolehuser.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: red;">
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
        <h5>Pusat Oleh-oleh Jakarta Terbaik</h5>
        <p> Rekomendasi Pusat Oleh-oleh Terbaik di Jakarta</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/gunung.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pusat Oleh-oleh Bandung Terbaik</h5>
        <p>Rekomendasi Pusat Oleh-oleh Terbaik di Bandung</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/airterjun.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pusat Oleh-oleh Bali Terbaik</h5>
        <p>Rekomendasi Pusat Oleh-oleh Terbaik di Bandung</p>
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
<div class="container"><!--membuat kolom berita-->
<div class="row">
<div>
    <h1 class="my-4 display-4 gradient-text">The Best Pusat Oleh-oleh Indonesia 2023</h1>
</div>
<div class="col-sm-9"><!--kolom kiri-->
  <?php
  $count = 0; // Variabel untuk menghitung jumlah baris yang ditampilkan

  if (mysqli_num_rows($oleh2) > 0) {
    while ($row = mysqli_fetch_array($oleh2)) {
      $count++; // Tambahkan hitungan setiap kali loop dijalankan
      
      // Hanya tampilkan 4 baris
      if ($count <= 4) {
  ?>
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img style="width:400px; height:100%" src="ADMIN/images/<?php echo $row["olehFOTO"]; ?>">
          </div>
          <div class="flex-grow-1 ms-3">
            <h5><?php echo $row["olehNAMA"]; ?> <small class="text-muted"><i><?php echo $row["olehNAMA"]; ?></i></small></h5>
            <p><?php echo ($row["olehALAMAT"]) ?></p>
            <p><?php echo ($row["olehDAERAH"]) ?></p>
            <p style="color:gold;" ><?php echo ($row["olehRATING"]) ?></p>
            <a href="#oleh" class="btn btn-primary"> More Info</a>
          </div>
        </div>
        <br>
      
  <?php
      } else {
        break; // Hentikan loop setelah 4 baris ditampilkan
      }
    }
  }
  ?>

</div><!--kolom kiri penutup di col-sm-9-->
<div class="col-sm-3"><!--kolom kanan-->
<div class="card" style="width: 18rem;">
<iframe height="200px;" src="https://www.youtube.com/embed/wB__MQiJB7A?si=lH8ZCRaaH58asrk4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <div class="card-body">
    <h5 class="card-title">Destinasi Wisata Indonesia</h5>
    <p class="card-text">Indonesia adalah negara kepulauan yang terdiri dari 17 ribu lebih pulau dari Sabang sampe Merauke.</p>
    <a href="https://www.youtube.com/embed/wB__MQiJB7A?si=lH8ZCRaaH58asrk4" class="btn btn-primary">Go</a>
  </div>
</div>
<br>
<div class="card" style="width: 18rem;">
<iframe height="200px;" src="https://www.youtube.com/embed/rUuYD65nZxM?si=Vi44RpDIs1LVaFNI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <div class="card-body">
    <h5 class="card-title">Destinasi Wisata Indonesia</h5>
    <p class="card-text">Indonesia adalah negara kepulauan yang terdiri dari 17 ribu lebih pulau dari Sabang sampe Merauke.</p>
    <a href="https://www.youtube.com/embed/rUuYD65nZxM?si=Vi44RpDIs1LVaFNI" class="btn btn-primary">Go</a>
  </div>
</div>
</div><!--div penutup kanan-->
<!-- Carousel wrapper galeri foto -->

<div>
<?php include "kontenoleh.php";?>
</div>

</div><!--penutup row-->

</div><!-- kolom berita-->

</div><!--container-->

<section id="gallery" class="gallery section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>gallery</h2>
      <p>Check <span>Our Best Photo </span></p>
    </div>

    <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <?php
          // Mengambil data gambar dari tabel destinasi
          $result = mysqli_query($connection, "SELECT * FROM oleh2");
          
          // Menampilkan gambar dalam galeri
          while ($row = mysqli_fetch_array($result)) {
            echo '<div class="swiper-slide">';
            echo '<a class="glightbox" data-gallery="images-gallery" href="ADMIN/images/' . $row["olehFOTO"] . '">';
            echo '<img src="ADMIN/images/' . $row["olehFOTO"] . '" class="img-fluid" alt=""></a></div>';
          }
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Gallery Section -->
<br>

<div>
    <!-- Image Showcases-->
    <section class="showcase">
            <div class="container-fluid p-0" id="oleh">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/tanahabang.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Pasar Tanah Abang</h2>
                        <p class="lead mb-0">Kebon Kacang, Tanah Abang, Central Jakarta City, Jakarta</p>
                        <h2>Jakarta</h2>
                        <p>Rating: <a style="color:gold;">★★★★★</a></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5643505978373!2d106.80935627590601!3d-6.189004260639028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f69b7ca68c63%3A0x5b53885371ab984!2sPs.%20Tanah%20Abang%2C%20Kb.%20Kacang%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1700978077091!5m2!1sen!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="row g-0" >
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/mariboro.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                    <h2>Malioboro</h2>
                        <p class="lead mb-0">Jl. Malioboro, Sosromenduran, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55271</p>
                        <h2>Jogjakarta</h2>
                        <p>Rating: <a style="color:gold;">★★★★★</a></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.973356752398!2d110.36584599999999!3d-7.7926455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5825fa6106c5%3A0x3ea4c521a5ed1133!2sJl.%20Malioboro%2C%20Sosromenduran%2C%20Gedong%20Tengen%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sen!2sid!4v1700976385188!5m2!1sen!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/kartikasari1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Kartika Sari</h2>
                        <p class="lead mb-0">Jl. H. Akbar No.4, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171</p>
                        <h2>Bandung</h2>
                        <p>Rating: <a style="color:gold;">★★★★★</a></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126746.28472032283!2d107.44742329726562!3d-6.911947100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63e6639dda3%3A0x2c8e03c7d4428ecb!2sKartika%20Sari%20Pusat.!5e0!3m2!1sen!2sid!4v1700977250175!5m2!1sen!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/rumahtalas.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                    <h2>Rumah Talas Bogor</h2>
                        <p class="lead mb-0">Jl. Raya Pajajaran No.102, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153</p>
                        <h2>Bogor</h2>
                        <p>Rating: <a style="color:gold;">★★★★★</a></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31707.201366545887!2d106.79076621645919!3d-6.597086745742858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c3530fd837%3A0xafaa22f4fec2c1ba!2sRumah%20Talas%20Bogor%20-%20Lapis%20Talas%20%26%20Pusat%20Oleh%20Oleh%20Khas%20Bogor!5e0!3m2!1sid!2sid!4v1701695274456!5m2!1sid!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
        </section>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="ADMIN/assets4/css/styles.css" rel="stylesheet" />
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