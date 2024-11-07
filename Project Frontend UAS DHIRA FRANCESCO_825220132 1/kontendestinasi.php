<!DOCTYPE html>
<html>

<?php
include "admin/include/config.php";
$kategori = mysqli_query($connection, "select * from kategoriwisata");
$destinasi1 = mysqli_query($connection, "SELECT * FROM kategoriwisata, destinasi WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE AND kategoriwisata.kategoriKODE='K001'");
$destinasi2 = mysqli_query($connection, "SELECT * FROM kategoriwisata, destinasi WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE AND kategoriwisata.kategoriKODE='K002'");
$destinasi3 = mysqli_query($connection, "SELECT * FROM kategoriwisata, destinasi WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE AND kategoriwisata.kategoriKODE='K003'");
$destinasi4 = mysqli_query($connection, "SELECT * FROM kategoriwisata, destinasi WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE AND kategoriwisata.kategoriKODE='K004'");
$destinasi5 = mysqli_query($connection, "SELECT * FROM kategoriwisata, destinasi WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE AND kategoriwisata.kategoriKODE='K005'");
$destinasi6 = mysqli_query($connection, "SELECT * FROM kategoriwisata, destinasi WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE AND kategoriwisata.kategoriKODE='K006'");

$restoran = mysqli_query($connection, "SELECT * FROM restoran WHERE restoranRATING = '★★★★★'");
$oleh = mysqli_query($connection, "select * from oleh2 WHERE olehRATING = '★★★★★'");
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
  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Best Recommendation</h2>
        <p>Check Our <span>Recommendation</span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-Wisata">
            <h4>Destinasi Wisata Budaya</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Destinasi2">
            <h4>Destinasi Wisata Kuliner</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Destinasi3">
            <h4>Destinasi Wisata sovenir</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Destinasi4">
            <h4>Destinasi Wisata Pantai</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Destinasi5">
            <h4>Destinasi Wisata Gunung</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-Destinasi6">
            <h4>Destinasi Wisata Air Terjun</h4>
          </a>
        </li>

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-Wisata">
          <div class="tab-header text-center">
            <h3>Destinasi Wisata Budaya</h3>
            <div class="row gy-5">
              <?php
              // Loop for Destinasi 1
              while ($row = mysqli_fetch_assoc($destinasi1)) {
                $foto = "ADMIN/images/" . $row['destinasiFOTO'];
                $keterangan = $row['destinasiKET'];
                $nama = $row['destinasiNAMA'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End Destinasi 1 Menu Content -->

        <!-- Repeat the structure for Destinasi 2 to 6 similarly -->

        <div class="tab-pane fade" id="menu-Destinasi2">
          <div class="tab-header text-center">
            <h3>Destinasi Wisata Kuliner</h3>
            <div class="row gy-5">
              <?php
              // Loop for Destinasi 2
              while ($row = mysqli_fetch_assoc($destinasi2)) {
                $foto = "ADMIN/images/" . $row['destinasiFOTO'];
                $keterangan = $row['destinasiKET'];
                $nama = $row['destinasiNAMA'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End Destinasi 2 Menu Content -->

        <div class="tab-pane fade" id="menu-Destinasi3">
          <div class="tab-header text-center">
            <h3>Destinasi Wisata sovenir</h3>
            <div class="row gy-5">
              <?php
              // Loop for Destinasi 3
              while ($row = mysqli_fetch_assoc($destinasi3)) {
                $foto = "ADMIN/images/" . $row['destinasiFOTO'];
                $keterangan = $row['destinasiKET'];
                $nama = $row['destinasiNAMA'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End Destinasi 3 Menu Content -->

        <div class="tab-pane fade" id="menu-Destinasi4">
          <div class="tab-header text-center">
            <h3>Destinasi Wisata Pantai</h3>
            <div class="row gy-5">
              <?php
              // Loop for Destinasi 4
              while ($row = mysqli_fetch_assoc($destinasi4)) {
                $foto = "ADMIN/images/" . $row['destinasiFOTO'];
                $keterangan = $row['destinasiKET'];
                $nama = $row['destinasiNAMA'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End Destinasi 4 Menu Content -->

        <div class="tab-pane fade" id="menu-Destinasi5">
          <div class="tab-header text-center">
            <h3>Destinasi Wisata Gunung</h3>
            <div class="row gy-5">
              <?php
              // Loop for Destinasi 5
              while ($row = mysqli_fetch_assoc($destinasi5)) {
                $foto = "ADMIN/images/" . $row['destinasiFOTO'];
                $keterangan = $row['destinasiKET'];
                $nama = $row['destinasiNAMA'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End Destinasi 5 Menu Content -->

        <div class="tab-pane fade" id="menu-Destinasi6">
          <div class="tab-header text-center">
            <h3>Destinasi Wisata Air Terjun</h3>
            <div class="row gy-5">
              <?php
              // Loop for Destinasi 6
              while ($row = mysqli_fetch_assoc($destinasi6)) {
                $foto = "ADMIN/images/" . $row['destinasiFOTO'];
                $keterangan = $row['destinasiKET'];
                $nama = $row['destinasiNAMA'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End Destinasi 6 Menu Content -->

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