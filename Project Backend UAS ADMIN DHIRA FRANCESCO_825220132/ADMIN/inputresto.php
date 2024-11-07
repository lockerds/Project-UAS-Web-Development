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
	if(isset($_POST['Simpan']))
	{
		$koderesto = $_POST['inputkode'];
		$namaresto = $_POST['inputnama'];
		$alamatresto =$_POST['inputalamat'];
		$daerahresto =$_POST['inputdaerah'];
		$teleponresto =$_POST['inputno'];
		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];
		$ratingresto =$_POST['rating'];
		$mapsresto =$_POST['inputmaps'];
		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);
    $kategoriKODE = $_POST['kodekategori'];

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "png") or ($ekstensifile == "PNG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "insert into restoran value ('$koderesto', '$namaresto', '$daerahresto', '$alamatresto','$teleponresto','$namafile','$ratingresto','$mapsresto',' $kategoriKODE')");
		}

	}
  $datakategori = mysqli_query($connection," select * from kategoriwisata");


  
?>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6">Input Restoran</h1>
          </div>
        </div>

        <form method="POST" enctype="multipart/form-data">

<div class="row g-3 align-items-center">
<div class="col-sm-2">
  <label for="koderestoran" class="col-form-label">Kode Restoran</label>
</div>
<div class="col-auto">
  <input type="text" id="koderestoran" class="form-control" aria-describedby="koderestoran" name="inputkode" placeholder="Kode Restoran">
</div>
<div class="col-auto">
  <span id="koderestoran" class="form-text">
    Must be 1-6 characters long.
  </span>
</div>
</div>
<br>

  <div class="form-group row">
    <label for="namarestoran" class="col-sm-2 col-form-label">Nama Restoran</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="namarestoran" name="inputnama" placeholder="Nama Restoran">
    </div>
  </div>
  <br>

  <div class="row g-6">
<div class="col-sm-6">
  <div class="form-floating">
    <input type="text" class="form-control" id="alamatrestoran" placeholder="Input Alamat Restoran" name="inputalamat">
    <label for="alamatrestoran">Input Alamat Restoran</label>
  </div>
</div>
<div class="col-sm-3">
  <div class="form-floating">
    <select class="form-select" id="inputdaerah" name="inputdaerah" aria-label="Floating label select example">
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

<div><label for="inputno" class="col-sm- col-form-label">Input No Telepon</label>
<div class="col-sm-4" >
<div class="input-group mb-3">
<span class="input-group-text">(+62)</span>
<input type="text" class="form-control"  aria-label="inputno" name="inputno" placeholder="input no Telepon" maxlength="15">
</div>
</div>
</div>

<div class="form-group row">
    <label for="file" class="col-sm-2 col-form-label">Photo Wisata</label>
    <div class="col-sm-10">
      <input type="file" id="file" name="file">
      <p class="help-block">Field ini digunakan untuk unggah file</p>
    </div>
  </div>

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
</div> 

<div class="mb-3 col-sm-5">
<label for="inputmaps" class="form-label">Link Maps</label>
<input type="text" class="form-control" id="inputmaps" placeholder="masukan link maps" name="inputmaps">
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
      <input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
      <input type="submit" name="Batal" class="btn btn-secondary" value="Batal">

    </div>
    
  </div>
        </form>
<br><br>

    </div>
  </div>

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
