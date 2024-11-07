<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FOTO DESTINASI WISATA</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<?php 
	include "include/config.php";
?>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6">Search Restoran</h1>
          </div>
        </div>
  
<form method="POST">
<div class="form-group row mb-2 mt-2">
  <label for="search" class="col-sm-2">Nama Restoran</label>
  <div class="col-sm-8">
      <input type="text" name="search" class="form-control" id="search"
      value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
      placeholder="Cari Nama Restoran">
  </div>
  <input type="submit" name="kirim" class="col-sm-1 btn btn-primary"value="Search">
</div>
</form>
<form method="POST">
<div><label for="rating" class="col-sm-2 col-form-label">Rating</label>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="rating" id="rating" value="&#9733;">
<label class="form-check-label" for="rating"style="color:gold;">&#9733;</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="rating" id="rating" value="&#9733;&#9733;">
<label class="form-check-label" for="rating" style="color:gold;">&#9733;&#9733;</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="rating" id="rating" value="&#9733;&#9733;&#9733;" >
<label class="form-check-label" for="rating" style="color:gold;">&#9733;&#9733;&#9733; </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="rating" id="rating" value="&#9733;&#9733;&#9733;&#9733;" >
<label class="form-check-label" for="rating" style="color:gold;">&#9733;&#9733;&#9733;&#9733; </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="rating" id="rating" value="&#9733;&#9733;&#9733;&#9733;&#9733;" >
<label class="form-check-label" for="rating"style="color:gold;">&#9733;&#9733;&#9733;&#9733;&#9733; </label>
</div>
<input type="submit" name="coba" class="col-sm-1 btn btn-primary"value="Search">
</div> 
</form>

<form method="POST">
  <div class="col-sm-4" style="display: flex;">
      <select class="form-select" id="send" name="send" aria-label="Floating label select example" style="margin-right: 10px;">
          <option value="Jakarta">Jakarta</option>
          <option value="Bandung">Bandung</option>
          <option value="Bogor">Bogor</option>
          <option value="Jogjakarta">Jogjakarta</option>
          <option value="Solo">Solo</option>
          <option value="Semarang">Semarang</option>
          <option value="Bali">Bali</option>
          <option value="Labuan Bajo">Labuan Bajo</option>
      </select>
      <input type="submit" name="AD" class="btn btn-primary" value="Search">
  </div>
</form>


<div class="col-sm-1"></div>
</div>

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Daftar Restoran</h1>
    </div>
  </div>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
    if (isset($_POST['kirim'])) {
      $search = $_POST['search'];
      $query = mysqli_query($connection, "SELECT restoran.* FROM restoran WHERE restoranNAMA LIKE '%" . $search . "%'");
    } else if (isset($_POST['coba'])) {
      $send = $_POST['rating'];
      $query = mysqli_query($connection, "SELECT restoran.* FROM restoran WHERE restoranRATING = '$send'");
    }else if (isset($_POST['AD'])) {
        $AA = $_POST['send'];
        $query = mysqli_query($connection, "SELECT restoran.* FROM restoran WHERE restoranDAERAH = '$AA'");
    }else {$query = mysqli_query($connection, "SELECT * FROM restoran");
    }
      while ($row = mysqli_fetch_array($query)) {
?>
  <div class="col">
    <div class="card">
      <?php if (is_file("images/" . $row['restoranFOTO'])) { ?>
        <img src="images/<?php echo $row['restoranFOTO'] ?>" class="card-img-top" alt="..." style="max-width: 600px; height:250px;">
      <?php } else { ?>
        <img src="images/noimage.png" class="card-img-top" alt="..." style="max-width: 400px;">
      <?php } ?>
      <div class="card-body">
  <p class="card-text" style="color:gold;"><?php echo $row['restoranRATING']; ?></p>
        <h5 class="card-title"><?php echo $row['restoranNAMA']; ?></h5>
        <!-- Jika ingin menambahkan teks yang lebih panjang, sesuaikan dengan data dari database -->
        <p class="card-text"><?php echo $row['restoranKODE']; ?></p>
    <p class="card-text"><?php echo $row['restoranDAERAH']; ?></p>
    <p class="card-text"><?php echo $row['restoranALAMAT']; ?></p>
    <p class="card-text">+(62) <?php echo $row['restoranTELP']; ?></p>
    <p class="card-text"><?php echo $row['restoranMAPS']; ?></p>

      <div class="col-sm-6">
          <a href="dasboardeditresto.php?ubah=<?php echo $row["restoranKODE"]?>" class="btn btn-success btn-sm" title="Edit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
              </svg>
          </a>
          <a href="hapusresto.php?hapus=<?php echo $row["restoranKODE"]?>" class="btn btn-danger btn-sm" title="Hapus">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser-fill" viewBox="0 0 16 16">
                  <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
              </svg>
              
          </a>
      </div>
  
      </div>
    </div>
  </div>
<?php } ?>
</div>
</div>

<div class="col-sm-1"></div>


  </div>
    </div>
  </div>

  <!-- Impor JavaScript di akhir body untuk kinerja yang lebih baik -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</body>

</html>
