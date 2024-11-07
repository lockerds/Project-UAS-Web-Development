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
		$kodekendaraan = $_POST['inputkode'];
		$namakendaraan = $_POST['inputnama'];
		$jeniskendaraan =$_POST['inputjenis'];
        $muatankendaraan =$_POST['inputmuatan'];
		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];
		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "png") or ($ekstensifile == "PNG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "insert into kendaraan value ('$kodekendaraan', '$namakendaraan', '$jeniskendaraan','$muatankendaraan','$namafile')");
		}

	}
?>
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6">Input Kendaraan</h1>
          </div>
        </div>

        <form method="POST" enctype="multipart/form-data">

<div class="row g-3 align-items-center">
<div class="col-sm-2">
  <label for="kodekendaraan" class="col-form-label">Kode Kendaraan</label>
</div>
<div class="col-auto">
  <input type="text" id="kodekendaraan" class="form-control" aria-describedby="kodekendaraan" name="inputkode" placeholder="Kode Kendaraan">
</div>
<div class="col-auto">
  <span id="kodekendaraan" class="form-text">
    Must be 1-6 characters long.
  </span>
</div>
</div>
<br>

  <div class="form-group row">
    <label for="namakendaraan" class="col-sm-2 col-form-label">Nama kendaraan</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="namakendaraan" name="inputnama" placeholder="Nama kendaraan">
    </div>
  </div>
  <br>



<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-floating">
            <select class="form-select" id="inputjenis" name="inputjenis" aria-label="Floating label select example">
            <option selected>Jenis Kendaraan</option>
            <option value="Mobil">Mobil</option>
            <option value="Bus">Bus</option>
            <option value="Pesawat">Pesawat</option>
            <option value="Kapal">Kapal</option>
    </select>
    <label for="inputjenis">Pilih Jenis Kendaraan</label>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-floating">
                <select class="form-select" id="inputmuatan" name="inputmuatan" aria-label="Floating label select example">
                    <option selected>Muatan Kendaraan</option>
                    <option value="5 orang">5 orang</option>
                    <option value="9 orang">9 orang</option>
                    <option value="13 orang">13 orang</option>
                    <option value="20 orang">20 orang</option>
                    <option value="31 orang">31 orang</option>
                    <option value="47 orang">47 orang</option>
                    <option value="314 orang">314 orang</option>
                    <option value="930 orang">930 orang</option>
                </select>
                <label for="inputjenis">Muatan Kendaraan</label>
            </div>
        </div>
    </div>
</div>
<br>

<div class="form-group row">
    <label for="file" class="col-sm-2 col-form-label">Photo Kendaraan</label>
    <div class="col-sm-10">
      <input type="file" id="file" name="file">
      <p class="help-block">Field ini digunakan untuk unggah file</p>
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
<div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6">Cari kendaraan</h1>
          </div>
        </div>
		<br>
</form>
<form method="POST">
<div class="form-group row mb-2 mt-2">
  <label for="search" class="col-sm-2">Nama kendaraan</label>
  <div class="col-sm-8">
      <input type="text" name="search" class="form-control" id="search"
      value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
      placeholder="Cari Nama kendaraan">
  </div>
  <input type="submit" name="kirim" class="col-sm-1 btn btn-primary"value="Search">
</div>
</form>


<form method="POST">
  <div class="col-sm-4" style="display: flex;">
    <select class="form-select" id="send1" name="send1" aria-label="Floating label select example">
            <option selected>Jenis Kendaraan</option>
            <option value="Mobil">Mobil</option>
            <option value="Bus">Bus</option>
            <option value="Pesawat">Pesawat</option>
            <option value="Kapal">Kapal</option>
    </select>
      <input type="submit" name="kirimjenis" class="btn btn-primary" value="Search">
  </div>
</form>
<br>

<form method="POST">
  <div class="col-sm-4" style="display: flex;">
    <select class="form-select" id="send2" name="send2" aria-label="Floating label select example">
                    <option selected>Muatan Kendaraan</option>
                    <option value="5 orang">5 orang</option>
                    <option value="9 orang">9 orang</option>
                    <option value="13 orang">13 orang</option>
                    <option value="20 orang">20 orang</option>
                    <option value="31 orang">31 orang</option>
                    <option value="47 orang">47 orang</option>
                    <option value="314 orang">314 orang</option>
                    <option value="930 orang">930 orang</option>
                </select>
      <input type="submit" name="kirimmuatan" class="btn btn-primary" value="Search">
  </div>
</form>



<div class="col-sm-1"></div>
</div>

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Daftar kendaraan</h1>
    </div>
  </div>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
    if (isset($_POST['kirim'])) {
      $search = $_POST['search'];
      $query = mysqli_query($connection, "SELECT kendaraan.* FROM kendaraan WHERE kendaraanNAMA LIKE '%" . $search . "%'");
    } else if (isset($_POST['kirimjenis'])) {
      $send = $_POST['send1'];
      $query = mysqli_query($connection, "SELECT kendaraan.* FROM kendaraan WHERE kendaraanJENIS = '$send'");
    }else if (isset($_POST['kirimuatan'])) {
        $AA = $_POST['send2'];
        $query = mysqli_query($connection, "SELECT kendaraan.* FROM kendaraan WHERE kendaraanMUATAN = '$AA'");
    }else {$query = mysqli_query($connection, "SELECT * FROM kendaraan");
    }
      while ($row = mysqli_fetch_array($query)) {
?>
  <div class="col">
    <div class="card">
      <?php if (is_file("images/" . $row['kendaraanFOTO'])) { ?>
        <img src="images/<?php echo $row['kendaraanFOTO'] ?>" class="card-img-top" alt="..." style="max-width: 600px; height:250px;">
      <?php } else { ?>
        <img src="images/noimage.png" class="card-img-top" alt="..." style="max-width: 400px;">
      <?php } ?>
      <div class="card-body">
    <h5 class="card-title"><?php echo $row['kendaraanNAMA']; ?></h5>
    <p class="card-text"><?php echo $row['kendaraanKODE']; ?></p>
    <p class="card-text">Jenis: <?php echo $row['kendaraanJENIS']; ?></p>
    <p class="card-text">Muatan: <?php echo $row['kendaraanMUATAN']; ?></p>


      <div class="col-sm-6">
          <a href="dasboardeditkendaraan.php?ubah=<?php echo $row["kendaraanKODE"]?>" class="btn btn-success btn-sm" title="Edit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
              </svg>
          </a>
          <a href="hapuskendaraan.php?hapus=<?php echo $row["kendaraanKODE"]?>" class="btn btn-danger btn-sm" title="Hapus">
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

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</body>

</html>
