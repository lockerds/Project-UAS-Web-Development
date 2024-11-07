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
		$kodeberita = $_POST['inputkode'];
		$judulberita = $_POST['inputjudul'];
        $isiberita = $_POST['isiberita'];
        $tanggalberita = $_POST['tanggal'];
		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];
		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);
        $kategoriKODE = $_POST['kodekategori'];

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "png") or ($ekstensifile == "PNG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "INSERT INTO berita (beritaKODE, beritaJUDUL, beritaFOTO, beritaISI, kategoriKODE, beritaTANGGAL) VALUES ('$kodeberita', '$judulberita', '$namafile', '$isiberita', '$kategoriKODE', '$tanggalberita')");
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
            <h1 class="display-6">Input berita</h1>
          </div>
        </div>

        <form method="POST" enctype="multipart/form-data">

<div class="row g-3 align-items-center">
<div class="col-sm-2">
  <label for="kodeberita" class="col-form-label">Kode berita</label>
</div>
<div class="col-auto">
  <input type="text" id="kodeberita" class="form-control" aria-describedby="kodeberita" name="inputkode" placeholder="Kode berita">
</div>
<div class="col-auto">
  <span id="kodeberita" class="form-text">
    Must be 1-6 characters long.
  </span>
</div>
</div>
<br>

  <div class="form-group row">
    <label for="namaberita" class="col-sm-2 col-form-label">Judul berita</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="namaberita" name="inputjudul" placeholder="Judul berita">
    </div>
  </div>
  <br>

  
<div class="form-group row">
    <label for="file" class="col-sm-2 col-form-label">Photo Berita</label>
    <div class="col-sm-10">
      <input type="file" id="file" name="file">
      <p class="help-block">Field ini digunakan untuk unggah file</p>
    </div>
  </div>

  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="isiberita" style="height: 100px" name="isiberita"></textarea>
  <label for="isiberita">Isi Berita</label>
</div>
<br>

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

            <div>
  <label for="tanggal" class="form-label">Tanggal Terbit:</label>
  <input type="date" class="form-control" id="tanggal" name="tanggal">
</div>
<br>


  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
      <input type="submit" name="Batal" class="btn btn-secondary" value="Batal">

    </div>
    
            </div>
<br>
</form>
</div>

<div class="col-sm-1"></div>


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
