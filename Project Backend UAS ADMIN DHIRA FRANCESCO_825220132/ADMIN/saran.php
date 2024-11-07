<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<?php 
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
		$emailcom = $_POST['inputemail'];
		$namacom = $_POST['inputnama'];
		$sarancom =$_POST['inputsaran'];
	

			mysqli_query($connection, "insert into saran value ('$emailcom', '$namacom', '$sarancom')");
		
	}
  
  
?>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
<bn></bn>
     <h1 class="display-6"> Saran And Kritik</h1>
         


        <form method="POST" enctype="multipart/form-data">

        <div class="row g-3 align-items-center">
<div class="col-sm-2">
  <label for="inputemail" class="col-form-label">Email Anda</label>
</div>
<div class="col-auto">
  <input type="text" id="inputemail" class="form-control" aria-describedby="inputemail" name="inputemail" placeholder="Email Anda">
</div>
<div class="col-auto">
  <span id="inputemail" class="form-text">
  EXAMPLE: ABC@gmail.com
  </span>
</div>
</div>
<br>

<div class="form-group row">
    <label for="inputnama" class="col-sm-2 col-form-label">Nama Anda</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputnama" name="inputnama" placeholder="Nama Anda">
    </div>
  </div>
<br>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="inputsaran" style="height: 100px" name="inputsaran"></textarea>
  <label for="inputsaran">Saran & Kritik</label>
</div>

<br>
  <div class="form-group row">
    <div class="col-sm-1"></div>
    <div class="col-sm-1">
      <input type="submit" name="Simpan" class="btn btn-primary" value="Submit">
    </div>
    
  </div>
<br>

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
