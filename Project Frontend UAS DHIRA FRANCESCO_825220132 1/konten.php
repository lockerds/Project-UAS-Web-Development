<!DOCTYPE html>
<html>

  <?php include "admin/include/config.php";
  $kategori = mysqli_query($connection,"select * from kategoriwisata");
  $destinasi = mysqli_query($connection,"select * from kategoriwisata,destinasi 
  WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE");
$restoran = mysqli_query($connection, "SELECT * FROM restoran WHERE restoranRATING = '★★★★★'");
$oleh = mysqli_query($connection,"select * from oleh2 WHERE olehRATING = '★★★★★'");
$hotel = mysqli_query($connection,"select * from dhira_francesco");
?>




<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="ADMIN/assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="ADMIN/assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="ADMIN/assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="ADMIN/assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="ADMIN/assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="ADMIN/assets1/css/main.css" rel="stylesheet">

</head>
<body>
  <section id="menu" class="menu section-bg" >
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Best Recomendation</h2>
        <p>Check Our <span>Recomendation</span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-Wisata">
            <h4>Wisata</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Restoran">
            <h4>Restoran</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-PusatOleh-oleh">
            <h4>Pusat Oleh-oleh</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-hotel">
            <h4>Best Hotel 2023</h4>
          </a>
        </li>

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

<div class="tab-pane fade active show" id="menu-Wisata">
    <div class="tab-header text-center">
      
        <h3>Destinasi</h3>
        <div class="row gy-5">
        <?php
        // Loop untuk setiap baris data dari tabel destinasi
        while ($row = mysqli_fetch_assoc($destinasi)) {
            $foto = "ADMIN/images/" . $row['destinasiFOTO'];
    
            $keterangan = $row['destinasiKET'];
            $nama = $row['destinasiNAMA'];
        ?>
            <div class="col-lg-4 menu-item">
                <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                </a>
                <h4><?php echo $nama; ?></h4>
                <p class="ingredients"><?php echo substr($keterangan,0,250); ?></p>
       
            </div><!-- Menu Item -->
        <?php
        }
        ?>
    </div>
    <br>
    <a href="destinasi.php" class="btn btn-primary">More Recomendation</a>

    </div>

</div><!-- End Starter Menu Content -->


        <div class="tab-pane fade" id="menu-Restoran">

          <div class="tab-header text-center">
      
            <h3>Restoran</h3>
         

          <div class="row gy-5">
        <?php
        // Loop untuk setiap baris data dari tabel restoran
        while ($row = mysqli_fetch_assoc($restoran)) {
            $foto = "ADMIN/images/" . $row['restoranFOTO'];
            $rating = $row['restoranRATING'];
            $alamat = $row['restoranALAMAT'];
            $nama = $row['restoranNAMA'];
        ?>
            <div class="col-lg-4 menu-item">
                <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                </a>
                <h4><?php echo $nama; ?></h4>
                <p class="ingredients"><?php echo $alamat; ?></p>
                <p class="price"><?php echo $rating; ?></p>
            </div><!-- Menu Item -->
        <?php
        }
        ?>
         </div>
         <br>
         <a href="restoranuser.php" class="btn btn-primary">More Recomendation</a>
    </div>
        </div><!-- End Restoran Menu Content -->

        <div class="tab-pane fade" id="menu-PusatOleh-oleh">

          <div class="tab-header text-center">
       
            <h3>Pusat Oleh-oleh</h3>
          

          <div class="row gy-5">
        <?php
        // Loop untuk setiap baris data dari tabel restoran
        while ($row = mysqli_fetch_assoc($oleh)) {
            $foto = "ADMIN/images/" . $row['olehFOTO'];
            $rating = $row['olehRATING'];
            $alamat = $row['olehALAMAT'];
            $nama = $row['olehNAMA'];
            $daerah = $row['olehDAERAH']
        ?>
            <div class="col-lg-4 menu-item">
                <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                </a>
                <h4><?php echo $nama; ?></h4>
                <p class="ingredients"><?php echo $alamat; ?></p>
                <p class="price"><?php echo $daerah; ?></p>
                <p class="price"><?php echo $rating; ?></p>
              
            </div><!-- Menu Item -->
        <?php
        }
        ?>
         </div>
         <br>
     <a href="pusatolehuser.php" class="btn btn-primary">More Recomendation</a>
    </div>
        </div>

        <div class="tab-pane fade" id="menu-hotel">

        <div class="tab-header text-center">
       
       <h3>Best Hotel 2023</h3>
     

     <div class="row gy-5">
   <?php
   // Loop untuk setiap baris data dari tabel restoran
   while ($row = mysqli_fetch_assoc($hotel)) {
       $foto = "ADMIN/images/" . $row['hotelFOTO'];
       $nama = $row['hotelNAMA'];
       $alamat = $row['hotelALAMAT'];
   ?>
       <div class="col-lg-4 menu-item">
           <a href="<?php echo $foto; ?>" class="glightbox">
               <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
           </a>
           <h4><?php echo $nama; ?></h4>
           <p class="ingredients"><?php echo $alamat; ?></p>
       </div><!-- Menu Item -->
   <?php
   }
   ?>
    </div>
    <br>

</div>
</div>

      </div>

    </div>
  </section><!-- End Menu Section -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="ADMIN/assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="ADMIN/assets1/vendor/aos/aos.js"></script>
  <script src="ADMIN/assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="ADMIN/assets1/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="ADMIN/assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="ADMIN/assets1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="ADMIN/assets1/js/main.js"></script>

</html>