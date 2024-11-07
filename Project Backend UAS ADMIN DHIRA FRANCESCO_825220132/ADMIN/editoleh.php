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
 if(isset($_POST['Edit']))
 {
  $kodeoleh = $_POST['inputkode'];
  $namaoleh = $_POST['inputnama'];
  $alamatoleh =$_POST['inputalamat'];
  $daeraholeh =$_POST['inputdaerah'];
  $namafile = $_FILES['file']['name'];
  $file_tmp = $_FILES["file"]["tmp_name"];
  $ratingoleh =$_POST['rating'];
  $mapsoleh =$_POST['inputmaps'];
  $ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);
  $kategoriKODE = $_POST['kodekategori'];
  // PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
  if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
  {
   move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
   mysqli_query($connection, "update oleh2 set olehNAMA='$namaoleh', olehALAMAT='$alamatoleh', olehDAERAH='$daeraholeh', 
   olehFOTO='$namafile',olehRATING='$ratingoleh',olehMAPS='$mapsoleh',kategoriKODE='$kategoriKODE'
    where olehKODE='$kodeoleh'");
    header("location:dasboardpusatoleh.php");
  }
 }

 $datakategori = mysqli_query($connection," select * from kategoriwisata");
 //untuk menerima kiriman data dari data yang akan diubah
 $kodeoleh = $_GET["ubah"];
 $editoleh = mysqli_query ($connection, "select * from oleh2
  where olehKODE = '$kodeoleh'");
 $rowedit = mysqli_fetch_array($editoleh);

 $editkategori = mysqli_query($connection, "select * from oleh2,kategoriwisata 
 where olehKODE = '$kodeoleh' and oleh2.kategoriKODE = kategoriwisata.kategoriKODE");
$rowedit2 = mysqli_fetch_array($editkategori);
?>

<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6">Edit Pusat Oleh-oleh</h1>
          </div>
        </div>

        <form method="POST" enctype="multipart/form-data">
        <div class="row g-3 align-items-center">
  <div class="col-sm-2">
    <label for="kodeoleh" class="col-form-label">Kode Pusat Oleh-oleh</label>
  </div>
  <div class="col-auto">
  <input type="text" id="kodeoleh" class="form-control" aria-describedby="kodeoleh" name="inputkode" placeholder="Kode Pusat Oleh-oleh" value="<?php echo $rowedit ["olehKODE"]?>"readonly>
  </div>
  <div class="col-auto">
    <span id="kodeoleh" class="form-text">
      Must be 1-6 characters long.
    </span>
  </div>
</div>
<br>

		<div class="form-group row">
			<label for="namaoleh" class="col-sm-2 col-form-label">Nama oleh</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="namaoleh" name="inputnama" placeholder="Nama Pusat Oleh-oleh" value="<?php echo $rowedit ["olehNAMA"]?>">
			</div>
		</div>
		<br>

		<div class="row g-6">
  <div class="col-sm-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="alamatoleh" placeholder="Input Alamat Pusat Oleh-oleh" name="inputalamat" value="<?php echo $rowedit ["olehALAMAT"]?>">
      <label for="alamatoleh">Input Alamat oleh</label>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="form-floating">
      <select class="form-select" id="inputdaerah" name="inputdaerah" aria-label="Floating label select example" value="<?php echo $rowedit ["olehDAERAH"]?>">
        <option selected>Daerah yang terdaftar</option>
        <option value="Jakarta">Jakarta</option>
        <option value="Bandung">Bandung</option>
        <option value="Bogor">Bogor</option>
		<option value="Jogjakarta">Jogjakarta</option>
        <option value="Solo">Solo</option>
		<option value="Semarang">Semarang</option>
        <option value="Bali">Bali</option>
		<option value="Labuan Bajo">Labuan Bajo</option>
      </select>
      <label for="inputdaerah">Pilih Daerah</label>
    </div>
  </div>
</div>
<br>



<div class="form-group row">
			<label for="file" class="col-sm-2 col-form-label">Photo Wisata</label>
			<div class="col-sm-10">
				<input type="file" id="file" name="file">
				<p class="help-block">Field ini digunakan untuk unggah file</p>
			</div>
		</div>

<div><label for="rating" class="col-sm-2 col-form-label">Rating</label>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rating" id="rating" value="&#9733;" >
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
</div> 

<div class="mb-3 col-sm-5">
  <label for="inputmaps" class="form-label">Link Maps</label>
  <input type="text" class="form-control" id="inputmaps" placeholder="masukan link maps" name="inputmaps" value="<?php echo $rowedit ["olehMAPS"]?>">
</div>
<div class="mb-3 row">
            <label for="kodekategori" class="col-sm-2 col-form-label">Kategori Wisata</label>
            <div class="col-sm-10">
            <select class=" form-control" id="kodekategori" name="kodekategori">
            <option>Kategori Wisata</option>
            <?php while($row = mysqli_fetch_array($datakategori)) 
            {?>
            <option value="<?php echo $row["kategoriKODE"]?>">
            <?php echo $row["kategoriKODE"]?>
            <?php echo $row["kategoriNAMA"]?>
            </option>
            <?php } ?>
            </select>
            </div>
            </div>



		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Edit" class="btn btn-primary" value="Edit">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
			</div>
		</div>

	
        </form>
	<form method="POST">
<div class="form-group row mb-2 mt-2">
    <label for="search" class="col-sm-2">Nama Pusat Oleh-oleh</label>
    <div class="col-sm-8">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
        placeholder="Cari Nama Pusat Oleh-oleh">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary"value="Search">
</div>
	</form>
    <form method="POST">
    <div>
        <label for="rating" class="col-sm-2 col-form-label">Rating</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ratingSearch" id="rating1" value="&#9733;">
            <label class="form-check-label" for="rating1" style="color:gold;">&#9733;</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ratingSearch" id="rating2" value="&#9733;&#9733;">
            <label class="form-check-label" for="rating2" style="color:gold;">&#9733;&#9733;</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ratingSearch" id="rating3" value="&#9733;&#9733;&#9733;">
            <label class="form-check-label" for="rating3" style="color:gold;">&#9733;&#9733;&#9733; </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ratingSearch" id="rating4" value="&#9733;&#9733;&#9733;&#9733;">
            <label class="form-check-label" for="rating4" style="color:gold;">&#9733;&#9733;&#9733;&#9733; </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ratingSearch" id="rating5" value="&#9733;&#9733;&#9733;&#9733;&#9733;">
            <label class="form-check-label" for="rating5" style="color:gold;">&#9733;&#9733;&#9733;&#9733;&#9733; </label>
        </div>
        <input type="submit" name="coba" class="col-sm-1 btn btn-primary" value="Search">
    </div>
</form>


	<form method="POST">
	<div>
	<select class="form-select" id="send" name="send" aria-label="Floating label select example">
		<option value="Jakarta">Jakarta</option>
		<option value="Bandung">Bandung</option>
		<option value="Bogor">Bogor</option>
		<option value="Jogjakarta">Jogjakarta</option>
		<option value="Solo">Solo</option>
		<option value="Semarang">Semarang</option>
		<option value="Bali">Bali</option>
		<option value="Labuan Bajo">Labuan Bajo</option>
	</select>
	</div>
	<input type="submit" name="AD" class="col-sm-1 btn btn-primary" value="Search">
</form>

<div class="col-sm-1"></div>
</div>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Daftar Pusat Oleh-oleh</h1>
			</div>
		</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
			if (isset($_POST['kirim'])) {
				$search = $_POST['search'];
				$query = mysqli_query($connection, "SELECT oleh2.* FROM oleh2 WHERE olehNAMA LIKE '%" . $search . "%'");
			} else if (isset($_POST['coba'])) {
				$send = $_POST['rating'];
				$query = mysqli_query($connection, "SELECT oleh2.* FROM oleh2 WHERE olehRATING = '$send'");
			}else if (isset($_POST['AD'])) {
					$AA = $_POST['send'];
					$query = mysqli_query($connection, "SELECT oleh2.* FROM oleh2 WHERE olehDAERAH = '$AA'");
			}else {$query = mysqli_query($connection, "SELECT oleh2.* FROM oleh2");
			}
 			 while ($row = mysqli_fetch_array($query)) {
  ?>
    <div class="col">
      <div class="card">
        <?php if (is_file("images/" . $row['olehFOTO'])) { ?>
          <img src="images/<?php echo $row['olehFOTO'] ?>" class="card-img-top" alt="..." style="max-width: 600px; height:250px;">
        <?php } else { ?>
          <img src="images/noimage.png" class="card-img-top" alt="..." style="max-width: 400px;">
        <?php } ?>
        <div class="card-body">
		<p class="card-text" style="color:gold;"><?php echo $row['olehRATING']; ?></p>
          <h5 class="card-title"><?php echo $row['olehNAMA']; ?></h5>
          <!-- Jika ingin menambahkan teks yang lebih panjang, sesuaikan dengan data dari database -->
          <p class="card-text"><?php echo $row['olehKODE']; ?></p>
		  <p class="card-text"><?php echo $row['olehDAERAH']; ?></p>
		  <p class="card-text"><?php echo $row['olehALAMAT']; ?></p>
		  <p class="card-text"><?php echo $row['olehMAPS']; ?></p>
      <p class="card-text"><?php echo $row['kategoriKODE']; ?></p>
        <div class="col-sm-6">
            <a href="dasboardeditoleh.php?ubah=<?php echo $row["olehKODE"]?>" class="btn btn-success btn-sm" title="Edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
                </svg>
            </a>
            <a href="hapusoleh.php?hapus=<?php echo $row["olehKODE"]?>" class="btn btn-danger btn-sm" title="Hapus">
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

      </div>
      <div class="col-sm-1"></div>
    </div>

    <!-- Sisanya dari konten Anda ditempatkan di sini -->

  </div>

  <!-- Impor JavaScript di akhir body untuk kinerja yang lebih baik -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <script>
            $(document).ready(function()
            {
                $('#kodekategori').select2(
                {
                    closeOnSelect: true,
                    allowcClear :true,
                    placeholder: 'Pilih kategori wisata'
                });
            });
        </script>
</body>

</html>