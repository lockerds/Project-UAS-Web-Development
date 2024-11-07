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
  $kodeberita = $_POST['inputkode'];
  $judulberita = $_POST['inputjudul'];
  $isiberita = $_POST['isiberita'];
  $tanggalberita = $_POST['tanggal'];
  $namafile = $_FILES['file']['name'];
  $file_tmp = $_FILES["file"]["tmp_name"];
  $ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);
    $kategoriKODE = $_POST['kodekategori'];
  // PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
  if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
  {
   move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
   mysqli_query($connection, "update berita set beritaJUDUL='$judulberita', beritaFOTO='$namafile',beritaISI='$isiberita',kategoriKODE='$kategoriKODE',beritaTANGGAL='$tanggalberita'
    where beritaKODE='$kodeberita'");

  }

 }

 $datakategori = mysqli_query($connection," select * from kategoriwisata");
 //untuk menerima kiriman data dari data yang akan diubah
 $kodeberita = $_GET["ubah"];
 $editberita = mysqli_query ($connection, "select * from berita
  where beritaKODE = '$kodeberita'");
 $rowedit = mysqli_fetch_array($editberita);
 $editkategori = mysqli_query($connection, "select * from berita,kategoriwisata 
 where beritaKODE = '$kodeberita' and berita.kategoriKODE = kategoriwisata.kategoriKODE");
$rowedit2 = mysqli_fetch_array($editkategori);
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
  <input type="text" id="kodeberita" class="form-control" aria-describedby="kodeberita" name="inputkode" value="<?php echo $rowedit ["beritaKODE"]?>"readonly placeholder="Kode berita">
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
      <input type="text" class="form-control" id="namaberita" name="inputjudul" value="<?php echo $rowedit ["beritaJUDUL"]?>" placeholder="Judul berita">
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

  <div class="form-floating">
  <textarea class="form-control" value="<?php echo $rowedit ["beritaISI"]?>" placeholder="Leave a comment here" id="isiberita" style="height: 100px" name="isiberita"></textarea>
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
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Edit" class="btn btn-primary" value="Edit">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
			</div>
		</div>
<br><br>
<div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6">Cari berita</h1>
          </div>
        </div>
		<br>
</form>



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
    <label for="file" class="col-sm-2 col-form-label">Photo Wisata</label>
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
<br><br>
<div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-6">Cari berita</h1>
          </div>
        </div>
		<br>
</form>
<form method="POST">
<div class="form-group row mb-2 mt-2">
  <label for="search" class="col-sm-2">Nama berita</label>
  <div class="col-sm-8">
      <input type="text" name="search" class="form-control" id="search"
      value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
      placeholder="Cari Nama berita">
  </div>
  <input type="submit" name="kirim" class="col-sm-1 btn btn-primary"value="Search">
</div>

<form method="POST">
<div class="form-group row mb-2 mt-2">
<div class="col-sm-8">
  <label for="search1" class="form-label">Tanggal Terbit:</label>
  <input type="date"  name="search1" class="form-control" id="search1"
      value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
      placeholder="Cari tanggal berita">
      </div>
</div>
<input type="submit" name="kirim1" class="col-sm-1 btn btn-primary"value="Search">
</form>

<div class="col-sm-1"></div>
</div>

<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Daftar berita</h1>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        if (isset($_POST['kirim'])) {
            $search = $_POST['search'];
            $query = mysqli_query($connection, "SELECT berita.* FROM berita WHERE beritaJUDUL LIKE '%" . $search . "%'");
        } else if (isset($_POST['kirim1'])) {
            $send = $_POST['search1'];
            $query = mysqli_query($connection, "SELECT berita.* FROM berita WHERE beritaTANGGAL = '$send'");
        } else {
            $query = mysqli_query($connection, "SELECT * FROM berita");
        }
        while ($row = mysqli_fetch_array($query)) {
        ?>
           </div>
           <br><br><br>
           <div class="card mb-3" style="max-width: 1200px;">
    <div class="aspect-ratio-container">
        <?php if (is_file("images/" . $row['beritaFOTO'])) { ?>
            <img src="images/<?php echo $row['beritaFOTO'] ?>" class="card-img-top" alt="...">
        <?php } else { ?>
            <img src="images/noimage.png" class="card-img-top" alt="...">
        <?php } ?>
    </div>
    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['beritaJUDUL']; ?></h5>
                        <p class="card-text"><?php echo $row['beritaKODE']; ?></p>
                        <p class="card-text"><?php echo $row['beritaISI']; ?></p>
                        <p class="card-text">terbit: <?php echo $row['beritaTANGGAL']; ?></p>

                        <div class="col-sm-6">
                            <a href="editberita.php?ubah=<?php echo $row["beritaKODE"] ?>" class="btn btn-success btn-sm" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <a href="hapusberita.php?hapus=<?php echo $row["beritaKODE"] ?>" class="btn btn-danger btn-sm" title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser-fill" viewBox="0 0 16 16">
                                    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z" />
                                </svg>

                            </a>
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
