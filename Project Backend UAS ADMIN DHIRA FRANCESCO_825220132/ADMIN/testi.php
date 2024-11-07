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
		$jobtesti = $_POST['inputjob'];
		$namatesti = $_POST['inputnama'];
		$ratingtesti =$_POST['rating'];
		$mapstesti =$_POST['inputmaps'];
    $kategoriKODE = $_POST['kodekategori'];


			mysqli_query($connection, "insert into testimoni value ('$kodetesti', '$namatesti', '$daerahtesti', '$alamattesti','$telepontesti','$namafile','$ratingtesti','$mapstesti',' $kategoriKODE')");
		

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
            <h1 class="display-6">Input testimoni</h1>
          </div>
        </div>

        <form method="POST" enctype="multipart/form-data">

        <div class="row">
  <div class="col-sm-4">
    <input type="text" class="form-control" placeholder="Nama Anda" aria-label="First name" name="inputnama">
  </div>
  <div class="col-sm-4">
    <input type="text" class="form-control" placeholder="Pekerjaan anda" aria-label="Last name"name="inputjob">
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
