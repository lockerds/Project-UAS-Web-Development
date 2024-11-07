<!DOCTYPE html>
<html>

<?php
include "admin/include/config.php";
$kategori = mysqli_query($connection, "select * from kategoriwisata");
$restoran1 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Jakarta'");
$restoran2 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Bandung'");
$restoran3 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Bogor'");
$restoran4 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Jogjakarta'");
$restoran5 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Solo'");
$restoran6 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Semarang'");
$restoran7 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Bali'");
$restoran8 = mysqli_query($connection, "SELECT * FROM  restoran WHERE restoranDAERAH='Labuan Bajo'");


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
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-restoran1">
            <h4>Restoran Jakarta </h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-restoran2">
            <h4>Restoran Bandung</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-restoran3">
            <h4>Restoran Bogor</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-restoran4">
            <h4>Restoran Jogjakarta</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-restoran5">
            <h4>Restoran Solo</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-restoran6">
            <h4>Restoran Semarang</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-restoran7">
            <h4>Restoran Bali</h4>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-restoran8">
            <h4>Restoran Labuan Bajo</h4>
          </a>
        </li>

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-restoran1">
          <div class="tab-header text-center">
            <h3>Restoran Jakarta</h3>
            <div class="row gy-5">
              <?php
              // Loop for restoran 1
              while ($row = mysqli_fetch_assoc($restoran1)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];
                $rating =$row['restoranRATING'];
                $telpon=$row['restoranTELP'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                  <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End restoran 1 Menu Content -->

        <!-- Repeat the structure for restoran 2 to 6 similarly -->

        <div class="tab-pane fade" id="menu-restoran2">
          <div class="tab-header text-center">
            <h3>Restoran Bandung</h3>
            <div class="row gy-5">
              <?php
              // Loop for restoran 2
              while ($row = mysqli_fetch_assoc($restoran2)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];
                $rating =$row['restoranRATING'];
                $telpon=$row['restoranTELP'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                 <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End restoran 2 Menu Content -->

        <div class="tab-pane fade" id="menu-restoran3">
          <div class="tab-header text-center">
            <h3>Restoran Bogor</h3>
            <div class="row gy-5">
              <?php
              // Loop for restoran 3
              while ($row = mysqli_fetch_assoc($restoran3)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];  
                $rating =$row['restoranRATING'];
                $telpon=$row['restoranTELP'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                 <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End restoran 3 Menu Content -->

        <div class="tab-pane fade" id="menu-restoran4">
          <div class="tab-header text-center">
            <h3>Restoran Jogjakarta</h3>
            <div class="row gy-5">
              <?php
              // Loop for restoran 4
              while ($row = mysqli_fetch_assoc($restoran4)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];  
                $rating =$row['restoranRATING'];
                 $telpon=$row['restoranTELP'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                 <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>

                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End restoran 4 Menu Content -->

        <div class="tab-pane fade" id="menu-restoran5">
          <div class="tab-header text-center">
            <h3>Restoran Solo</h3>
            <div class="row gy-5">
              <?php
              // Loop for restoran 5
              while ($row = mysqli_fetch_assoc($restoran5)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];
                $rating =$row['restoranRATING'];
                $telpon=$row['restoranTELP'];
             
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                 <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End restoran 5 Menu Content -->

        <div class="tab-pane fade" id="menu-restoran6">
          <div class="tab-header text-center">
            <h3>Restoran Semarang</h3>
            <div class="row gy-5">
              <?php
              // Loop for restoran 6
              while ($row = mysqli_fetch_assoc($restoran6)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];
                $rating =$row['restoranRATING'];
                $telpon=$row['restoranTELP'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                 <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div><!-- End restoran 6 Menu Content -->

        <div class="tab-pane fade" id="menu-restoran7">
          <div class="tab-header text-center">
            <h3>Restoran Bali </h3>
            <div class="row gy-5">
              <?php
              while ($row = mysqli_fetch_assoc($restoran7)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];
                $rating =$row['restoranRATING'];
                $telpon=$row['restoranTELP'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                 <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>
                </div><!-- Menu Item -->
              <?php
              }
              ?>
            </div>
            <br>
          </div>
        </div>

        
        <div class="tab-pane fade" id="menu-restoran8">
          <div class="tab-header text-center">
            <h3>Restoran Labuan Bajo </h3>
            <div class="row gy-5">
              <?php
   
              while ($row = mysqli_fetch_assoc($restoran8)) {
                $foto = "ADMIN/images/" . $row['restoranFOTO'];
                $keterangan = $row['restoranALAMAT'];
                $nama = $row['restoranNAMA'];
                $rating =$row['restoranRATING'];
                $telpon=$row['restoranTELP'];
              ?>
                <div class="col-lg-4 menu-item">
                  <a href="<?php echo $foto; ?>" class="glightbox">
                    <img src="<?php echo $foto; ?>" class="menu-img img-fluid" alt="<?php echo $nama; ?>">
                  </a>
                  <h4><?php echo $nama; ?></h4>
                  <p class="ingredients"><?php echo substr($keterangan, 0, 250); ?></p>
                  <p class="ingredients">Rating: <a style="color:gold;"><?php echo ($rating); ?></a></p>
                 <p class="ingredients">Telp:(+62) <?php echo ($telpon); ?></p>
                </div>
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