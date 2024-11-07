<?php
include "include/config.php";
if(isset($_POST['Edit']))
{
    $mobilKODE = $_POST['kodemobil'];
    $mobilNAMA = $_POST['namamobil'];
    $mobilJENIS = $_POST['jenismobil'];
    $hargaSEWA = $_POST['hargasewa'];
 
 
    mysqli_query($connection, "update mobil set mobilNAMA='$mobilNAMA', mobilJENIS='$mobilJENIS', hargaSEWA='$hargaSEWA'
        where mobilKODE='$mobilKODE'");
        header("location:mobil.php");
}
$kodemobil = $_GET["ubah"];
    $editmobil = mysqli_query ($connection, "select * from mobil
        where mobilKODE = '$kodemobil'");
    $rowedit = mysqli_fetch_array($editmobil);
?>
 
    <head>
        <title></title>
        <link href = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
<body>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
 
    <form method="POST">
    <div class="mb-3 row"><!-- buat jarak 3 spasi di bawah-->
            <label for="kodemobil" class="col-sm-2 col-form-label">Kode Mobil</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="kodemobil" name ="kodemobil" value="<?php echo $rowedit["mobilKODE"]?>" readonly placeholder="Kode Mobil" maxlength="4"> 
            </div>
            </div>
            
            <div class="mb-3 row">
            <label for="namamobil" class="col-sm-2 col-form-label">Nama Mobil</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="namamobil" name ="namamobil"value="<?php echo $rowedit["mobilNAMA"]?>"  placeholder="Nama Mobil">
            </div>
            </div>

            <div class="mb-3 row">
            <label for="jenismobil" class="col-sm-2 col-form-label">Jenis Mobil</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="jenismobil" name ="jenismobil" placeholder="Jenis Mobil" value="<?php echo $rowedit["mobilJENIS"]?>" >
            </div>
            </div>

            <div class="mb-3 row">
            <label for="hargasewa" class="col-sm-2 col-form-label">Harga Sewa Mobil</label>
            <div class="col-sm-10">
            <input type="int" class="form-control" id="hargasewa" name ="hargasewa" placeholder="harga Sewa Mobil"value="<?php echo $rowedit["hargaSEWA"]?>">
            </div>
            </div>
            
<div class="form-group row">
<div class="col-sm-2"></div>
<div class="col-sm-10">
<input type="submit" name="Edit" class="btn btn-primary" value="Edit">
<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
 
            </div>
 
            <!--form pencarian-->
    <div class="form-group row mb-2">
        <label for="search" class="col-sm-2">nama mobil</label>
            <div class="col-sm-8">
        <input type="text" name="search" class="form-control" id="search"
                value="<?php if(isset($POST['search'])) {echo $_POST['search'];} ?>"
                placeholder="Cari nama mobil">
           
     </div>
        <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
    </div>
<!--form pencarian-->
    </form>
 
 
 
    <div class="jumbotron mt-5">
        <h1 class="display-5"> hasil entri data destinasi wisata</h1>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th >No</th>
      <th >kode mobil</th>
      <th >nama mobil</th>
      <th >jenis mobil</th>
      <th >tujuan mobil</th>
      <th >edit</th>
      <th >hapus</th>
    </tr>
  </thead>
  <tbody>
 
 
<?php
            if(isset($_POST["kirim"])){
    $search=$_POST['search'];
    $query= mysqli_query($connection,"select mobil.* from mobil WHERE mobilNAMA like '%".$search."%'");
   
            }else $query = mysqli_query($connection, "select * from mobil");
            $nomor = 1;
            while ($row = mysqli_fetch_array($query))
            { ?>
    <tr>
      <td><?php echo $nomor;?></td>
      <td><?php echo $row ['mobilKODE'];?></td>
      <td><?php echo $row ['mobilNAMA'];?></td>
      <td><?php echo $row ['mobilJENIS'];?></td>
      <td><?php echo $row ['hargaSEWA'];?></td>
      <td>
                       
                    <a href="mobiledit.php?ubah=<?php echo $row["mobilKODE"]?>"
         class="btn btn-success btn-sm" title="edit">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</td>
<td width="5px">
<a href="mobilhapus.php?hapus=<?php echo $row["mobilKODE"]?>"
         class="btn btn-danger btn-sm" title="hapus">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
</svg>
                    </td>
    </tr>
    <?php $nomor = $nomor +1;?>
<?php } ?>
 
  </tbody>
</table>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
 
    <script>
    $(document).ready(function()
        {
            $('#kodekategori').select2(
                {closeOnSelect: true,
                    allowClear: true,
                    placeholder: 'pilih kategori wisata'
                });
        });
    </script>
</body>