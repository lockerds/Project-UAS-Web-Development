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

  $oleh = mysqli_query($connection,"select * from oleh2");
  $oleh1 = mysqli_query($connection,"select * from kategoriwisata,oleh2 
  WHERE kategoriwisata.kategoriKODE = oleh2.kategoriKODE");
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
              <a class="nav-link dropdown-toggle" href="destinasi.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: red;">
              Kategori Wisata</a>

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
        <h5>Wisata Pantai Terindah</h5>
        <p> Wisata Pantai Terindah dan Terbaik di Indonesia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/gunung.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>Wisata Gunung Terindah</h5>
        <p>Wisata Gunung Terindah dan Terbaik di Indonesia</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ADMIN/images/airterjun.jpg" class="d-block w-100" alt="Gambar Tidak Ada">
      <div class="carousel-caption d-none d-md-block">
        <h5>Wisata Air Terjun Terindah</h5>
        <p>Wisata Air Terjun Terindah dan Terbaik di Indonesia</p>
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
    <h1 class="my-4 display-4 gradient-text">The Best Destinasi Wisata 2023</h1>
</div>
<div class="col-sm-9"><!--kolom kiri-->
  <?php
  $count = 0; // Variabel untuk menghitung jumlah baris yang ditampilkan

  if (mysqli_num_rows($destinasi) > 0) {
    while ($row = mysqli_fetch_array($destinasi)) {
      $count++; // Tambahkan hitungan setiap kali loop dijalankan
      
      // Hanya tampilkan 4 baris
      if ($count <= 4) {
  ?>
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img style="width:400px; height:100%" src="ADMIN/images/<?php echo $row["destinasiFOTO"]; ?>">
          </div>
          <div class="flex-grow-1 ms-3">
            <h5><?php echo $row["destinasiNAMA"]; ?> <small class="text-muted"><i><?php echo $row["kategoriNAMA"]; ?></i></small></h5>
            <p><?php echo substr($row["destinasiKET"], 0, 250); ?>...</p>
            <a href="#labuanbajo" class="btn btn-primary">Read More</a>
          </div>
        </div>
      
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
</div><!--div penutup kanan-->
<!-- Carousel wrapper galeri foto -->

<div>
<?php include "kontendestinasi.php";?>
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
          $result = mysqli_query($connection, "SELECT * FROM destinasi");
          
          // Menampilkan gambar dalam galeri
          while ($row = mysqli_fetch_array($result)) {
            echo '<div class="swiper-slide">';
            echo '<a class="glightbox" data-gallery="images-gallery" href="ADMIN/images/' . $row["destinasiFOTO"] . '">';
            echo '<img src="ADMIN/images/' . $row["destinasiFOTO"] . '" class="img-fluid" alt=""></a></div>';
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
            <div class="container-fluid p-0" id="labuanbajo">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/labuanbajo.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Labuan Bajo</h2>
                        <p class="lead mb-0">Labuan Bajo di Pulau Flores, Indonesia, adalah gerbang utama ke Taman Nasional Komodo. Dikenal karena keindahan alamnya yang menakjubkan, Labuan Bajo menyuguhkan pemandangan teluk biru dan bukit hijau yang memikat hati. Taman Nasional Komodo menawarkan kesempatan langka untuk bertemu Komodo Dragon, reptil besar yang hanya dapat ditemukan di wilayah ini, dengan pulau-pulau seperti Rinca dan Komodo menjadi tempat trekking yang menarik.Labuan Bajo juga menjadi surga bagi penyelam dengan terumbu karangnya yang memukau dan kehidupan laut yang beragam. Para pengunjung dapat merasakan keajaiban bawah laut melalui aktivitas snorkeling dan diving. Sementara itu, desa-desa tradisional di sekitar Labuan Bajo memperkaya pengalaman wisata dengan kehidupan budaya masyarakat Flores.Dengan keindahan alam yang memukau, kesempatan langka untuk bertemu Komodo Dragon, dan pesona bawah lautnya, Labuan Bajo menjadi destinasi yang sempurna bagi pencinta alam dan petualangan.</p>
                    </div>
                </div>
                <div class="row g-0" id="pantaiora">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/pantaiora.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Pantai Ora</h2>
                        <p class="lead mb-0">Pantai Ora adalah salah satu pantai di Maluku yang namanya sudah dikenal hingga mancanegara. Keindahan alam di Pantai ini sudah banyak dikenal bahkan disamakan dengan pantai-pantai di Hawai maupun Maladewa. Namun, yang perlu diketahui adalah bahwa akses menuju pantai Ora hanya dapat dicapai dengan menggunakan perahu saja. Itu sebabnya mengapa pengalaman menuju tempat ini sangat mahal harganya. Di wilayah pantai ini hanya ada satu resort yang terkenal, namun bila kita ingin menginap di tempat lain, ada beberapa alternatif seperti di Desa Sawai maupun Saleman yang terletak tidak jauh dari pantai Ora.</p>
                    </div>
                </div>
                <div class="row g-0" id="monas">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/monas.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Monumen Nasional</h2>
                        <p class="lead mb-0">Monumen Nasional (Monas) di Jakarta, Indonesia, adalah destinasi wisata bersejarah yang mencerminkan kekayaan budaya dan semangat kemerdekaan. Monas, setinggi 137 meter, menjadi ikon penting dengan lidah api emasnya yang menyala di puncaknya, melambangkan semangat perjuangan bangsa.Pengunjung dapat menikmati keindahan Jakarta dari puncak Monas setelah menaiki tangga atau menggunakan lift. Di sekitar monumen, terdapat taman hijau yang menawan, air mancur, dan patung pahlawan nasional, menciptakan suasana yang nyaman untuk bersantai.Museum Nasional Indonesia yang berada di bawah Monas menjadi daya tarik tambahan dengan koleksi seni, artefak sejarah, dan peninggalan budaya yang menggambarkan kekayaan warisan Indonesia.Monas bukan hanya landmark sejarah, tetapi juga menjadi pusat kegiatan masyarakat, sering digunakan untuk perayaan nasional dan acara olahraga. Pada malam hari, monumen diterangi lampu-lampu yang menciptakan suasana magis dan memesona.</p>
                    </div>
                </div>
                <div class="row g-0" id="tamankota">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('ADMIN/IMAGES/tamankota.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Taman Kota</h2>
                        <p class="lead mb-0">Taman Kota adalah destinasi wisata perkotaan yang menyajikan oase hijau di tengah hiruk-pikuk kehidupan urban. Berlokasi strategis di pusat kota, taman ini menjadi tempat populer bagi warga lokal dan wisatawan untuk beristirahat dan rekreasi.Taman Kota seringkali dilengkapi dengan area hijau yang luas, jalur pejalan kaki, dan taman bermain untuk anak-anak. Pepohonan rindang memberikan sejuk dan keteduhan, menciptakan atmosfer yang menyenangkan. Beberapa taman dilengkapi dengan kolam, air mancur, atau danau buatan, menambah daya tarik estetis dan memberikan ruang untuk kegiatan air.Selain menjadi tempat rekreasi, Taman Kota juga sering menjadi pusat kegiatan sosial dan budaya. Acara seni, konser musik, atau festival sering diadakan di taman ini, menciptakan ruang untuk pertemuan komunitas dan hiburan publik. Kegiatan ini memperkaya pengalaman pengunjung dan membangun kehidupan sosial di sekitar kota.sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                    </div>
                </div>
            </div>
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