<!DOCTYPE html>
<html>

  <?php include "admin/include/config.php";
 $travel = mysqli_query($connection,"select * from travel");
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
  
<section id="travel" class="travel">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Travel</h2>
          <p>Best Travel 2023</p>
        </div>

        <div class="row gy-4">
        <?php while ($travelRow = mysqli_fetch_assoc($travel)) { ?>
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
    <div class="travel-member">
      <div class="member-img">
        <?php
          // Echo the image path for debugging
          echo '<img src="ADMIN/IMAGES/' . $travelRow['travelFOTO'] . '" class="img-fluid" alt="Travel Image" style="height: 200px;">';
        ?>
      </div>
      <div class="member-info">
        <h4><?php echo $travelRow['travelNAMA']; ?></h4>
        <p>Destination: <?php echo $travelRow['travelTUJUAN']; ?></p>
        <p>Price: <?php echo $travelRow['travelHARGA']; ?></p>
        <p>Rating:<a style="color:gold;"> <?php echo $travelRow['travelRATING']; ?></a></p>
      </div>
    </div>
  </div><!-- End Travel Member -->
<?php } ?>

        </div>
      </div>
    </section><!-- End Travel Section -->


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