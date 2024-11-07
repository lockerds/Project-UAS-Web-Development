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
<div class="container"><!--membuat kolom berita-->
<div class="row">
<div>
   <h1 class="my-4 display-4 gradient-text">Latest News Destinasi Wisata 2023</h1>
</div>

<div class="col-sm-9"><!--kolom kiri-->
  <?php
  $count = 0; // Variabel untuk menghitung jumlah baris yang ditampilkan

  if (mysqli_num_rows($berita) > 0) {
    while ($row = mysqli_fetch_array($berita)) {
      $count++; // Tambahkan hitungan setiap kali loop dijalankan
      
      // Hanya tampilkan 4 baris
      if ($count <= 4) {
  ?>
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img style="width:400px; height:100%" src="ADMIN/images/<?php echo $row["beritaFOTO"]; ?>">
          </div>
          <div class="flex-grow-1 ms-3">
            <h5><?php echo $row["beritaJUDUL"]; ?> <small class="text-muted"><i><?php echo $row["kategoriNAMA"]; ?></i></small></h5>
            <p><?php echo substr($row["beritaISI"], 0, 250); ?>...</p>
            <p><?php echo $row["beritaTANGGAL"]; ?></p>
            <a href="beritauser.php" class="btn btn-primary">Read More</a>
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

  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="user.php" style="color:red;">1</a></li>
    <li class="page-item"><a class="page-link" href="userpage2.php">2</a></li>
    <li class="page-item">
      <a class="page-link" href="userpage2.php">Next</a>
    </li>
  </ul>
</nav>

</div><!--kolom kiri penutup di col-sm-9-->
<div class="col-sm-3"><!--kolom kanan-->
<div class="card" style="width: 18rem;">
<iframe height="200px;" src="https://www.youtube.com/embed/wB__MQiJB7A?si=lH8ZCRaaH58asrk4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <div class="card-body">
    <h5 class="card-title">Destinasi Wisata Indonesia</h5>
    <p class="card-text">ndonesia adalah negara kepulauan yang terdiri dari 17 ribu lebih pulau dari Sabang sampe Merauke.</p>
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



</div><!--kolom kanan-->
<!-- Carousel wrapper galeri foto -->
<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-bs-ride="carousel">
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
            <button class="carousel-control-prev position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <img src="ADMIN/images/borobudur.jpg" class="card-img-top" alt="Sunset Over the Sea" />
                                <div class="card-body">
                                    <h5 class="card-title">Recomendation Indonesian Cultural Destinations</h5>
                                    <p class="card-text">Destinasi yang sangat indah dan erat dengan budaya yang ada di Indonesia</p>
                                    <a href="destinasi.php" class="btn btn-primary">GO</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="card">
                                <img src="ADMIN/images/restoran.jpg" class="card-img-top" alt="Sunset Over the Sea" />
                                <div class="card-body">
                                    <h5 class="card-title">Recomendation Restaurant in Indonesian</h5>
                                    <p class="card-text">Restoran - Restoran di Indonesia yang sangat terintergritas dengan pilihan menu yang sangat beragam</p>
                                    <a href="restoranuser.php" class="btn btn-primary">GO</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="card">
                                <img src="ADMIN/images/sovenir.jpg" class="card-img-top" alt="Sunset over the Sea" height="260px" />
                                <div class="card-body">
                                    <h5 class="card-title">The Best Souvenir Center Store in Indonesia</h5>
                                    <p class="card-text">Pusat pembelanjaan Oleh-oleh yang sangat lengkap serta memuat budaya lokal dan terkenal di Indonesia</p>
                                    <a href="pusatolehuser.php" class="btn btn-primary">GO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <div class="card">
                            <img src="ADMIN/images/pantaiora.jpg" class="card-img-top" alt="Peaks Against the Starry Sky" />
                                <div class="card-body">
                                    <h5 class="card-title">The Best Beach in Indonesia</h5>
                                    <p class="card-text">Pantai-pantai Indonesia memukau dengan keindahan alam yang tiada tara. Salah satu surga tropis yang sangat mendunia dan patut dikunjungi.</p>
                                    <a href="destinasi.php" class="btn btn-primary">GO</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                            <div class="card">
                            <img src="ADMIN/images/gunung.jpg" class="card-img-top" alt="Peaks Against the Starry Sky" />
                                <div class="card-body">
                                    <h5 class="card-title">The Best View Mountain in Indonesia</h5>
                                    <p class="card-text">Puncak gunung sering kali menjadi tempat penyaksian matahari terbit yang luar biasa. Cahaya merah oranye yang memancar dari ufuk timur meresapi langit.</p>
                                    <a href="destinasi.php" class="btn btn-primary">GO</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                            <div class="card">
                            <img src="ADMIN/images/airterjun.jpg" class="card-img-top" alt="Peaks Against the Starry Sky" />
                                <div class="card-body">
                                    <h5 class="card-title">The Best View Waterfall in Indonesia</h5>
                                    <p class="card-text">Air terjun di Indonesia menyuguhkan keindahan alam yang menakjubkan dengan air yang deras jatuh dari ketinggian, dikelilingi oleh kehijauan alam sekitar. </p>
                                    <a href="destinasi.php" class="btn btn-primary">GO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner -->
    </div><!-- Carousel wrapper galeri foto -->
</div><!--penutup row-->
 
</div><!-- kolom berita-->

</div><!--container-->


<section class="site-section" id="section-about"style="background-color:#EEF5FF;">
          <div class="container" >
            <div class="row justify-content-center">

              <div class="col-md-8">

                <!-- <h2 class="heading">About</h2> -->

                <img src="ADMIN/images/profile1.png" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">

                <div data-aos="fade-up"  data-aos-delay="100">
                  <h2 class="">Hi I'm Dhira Francesco</h2>
                  <p>Halo saya Dhira Francesco, dengan semangat dan dedikasi yang Saya miliki, saya yakin bahwa projek pembuatan website rekomendasi destinasi wisata di Indonesia ini akan menjadi sukses. Dengan NIM 825220132 dan sebagai mahasiswa Semester 3 di Universitas Taruma Nagara, Saya berharap telah menunjukkan tekad dan kemampuan akademis yang luar biasa. Proyek ini tidak hanya menjadi bentuk implementasi dari pembelajaran Saya di bangku perkuliahan, tetapi juga kesempatan untuk mengeksplorasi kreativitas dan kemampuan teknis Saya dalam dunia web development. </p>
                  <p>Saya berharap bahwa website ini tidak hanya memberikan informasi yang bermanfaat kepada pengguna, tetapi juga mencerminkan visi Saya mengenai keindahan dan keunikkan destinasi wisata Indonesia. Semoga website ini tidak hanya memberikan panduan yang informatif, tetapi juga menginspirasi orang-orang untuk menjelajahi keindahan alam dan budaya Indonesia.</p>           
                </div>
              </div>
            </div>
          </div>
        </section>
<div class ="container-fluid"><!--container-->
<?php include "konten.php";?>
</div>

<div id="travel">
<?php include "traveluser.php";?>
</div>


<div class="testimoni" id="testimoni">
<?php include "testimonial.php";?>
</div>

<br>

<div class ="container"><!--container-->
<div class="row d-flex">

    <div class="col-sm-12"><!--kolom kiri-->
        <?php include "ADMIN/saran.php";?>
    </div>

    <div class="col-sm-12"><!--kolom kanan-->
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Saran&Kritik</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $saran = mysqli_query($connection,"select * from saran");
                $nomor = 1;
                while($row = mysqli_fetch_array($saran))
                {
                ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $row['comNAMA']; ?></td>
                        <td><?php echo $row['comEMAIL']; ?></td>
                        <td><?php echo $row['comSARAN']; ?></td>
                    </tr>
                    <?php $nomor = $nomor+1;?><!--buat nambah nomor-->
                <?php } ?>
            </tbody>
        </table>
    </div>
</div> <!-- Penutup tag div class="row" -->
</div>
                </div>
<br>

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