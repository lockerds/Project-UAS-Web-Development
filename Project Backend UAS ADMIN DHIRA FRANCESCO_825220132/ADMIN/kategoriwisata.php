<!doctype html>
<?php
include "include/config.php";
    if(isset($_POST['Simpan']))
    {
        $kategoriKODE =$_POST['inputKategoriKode'];
        $kategoriNAMA =$_POST['inputKategoriNama'];
        $kategoriKET =$_POST['inputKategoriKet'];
        $kategoriREFRENCE =$_POST['inputKategoriReference'];
        
        mysqli_query($connection, "INSERT INTO kategoriwisata values ('$kategoriKODE',
        '$kategoriNAMA','$kategoriKET','$kategoriREFRENCE')");
        header("location:dasboardkategori.php");
    }
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Web Development Kls C</title>
  </head>
  <body>

<!-- ini bagian kerja-->
<div  class="col-sm-2">
</div>
<div class="col-sm-10">
<form method="POST">
<div class="form-group row">
    <label for="kategoriKODE" class="col-sm-3 col-form-label">Kode Kategori Wisata</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriKODE" name="inputKategoriKode" placeholder="Kode Kategori Wisata" maxlength="4">
    </div>
</div>

<div class="form-group row">
    <label for="kategoriNAMA" class="col-sm-3 col-form-label">Nama Kategori Wisata</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriNAMA" name="inputKategoriNama" placeholder="Inputkan Nama Kategori Wisata">
    </div>
</div>

<div class="form-group row">
    <label for="kategoriKET" class="col-sm-3 col-form-label">Keterangan Kategori Wisata</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriKET" name="inputKategoriKet" placeholder="Keterangan Kategori Wisata">
    </div>
</div>


<div class="form-group row">
    <label for="kategoriREFERENCE" class="col-sm-3 col-form-label">REFERENCE Kategori Wisata</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="kategoriREFERENCE" name="inputKategoriReference" placeholder="REFERENCE Kategori Wisata">
    </div>
</div>



<br>
<input class="btn btn-primary" type="submit" value="Simpan" name="Simpan"><!-- kenapa ini simpan karena liat di atas pas hub sama php dia nama nya simpan-->
<input class="btn btn-primary" type="reset" value="Reset">
</form>

<div class="jumbotron mt-5"><!-- mt(kayanyak mt itu margintop ) itu buat atur jarak-->
    <h1 class="display-5">Hasil Entri Data Kategori</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Kategori</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Alamat Kategori</th>
            <th scope="col">Renference</th>
            </tr>
        </thead><!--panggil database bisa dimana aja asal sebelum tbody-->
                <!-- tiap pake php harus di buka dulu pake kayak <   php-->
        <tbody>
            <!--$ROW ITU VARIABEL DOANG BISA DI GANTI ASAL NNTI DI BAWAHNYA SEMUA DI GANTI JUGA-->
            <!-- destinasiKODE ITU HARUS SAMA POKOKNYA SAMA YG DATABASE-->
            <?php 
                    if(isset($_POST['kirim']))
                    {
                        $search = $_POST['search'];
                        $query = mysqli_query($connection,"select kategoriwisata.* from kategoriwisata 
                        where kategoriNAMA like '%".$search."%'");
                    }else if(isset($_POST['send']))
                    {
                        $cari = $_POST['cari'];
                        $query = mysqli_query($connection,"select kategoriwisata.* from kategoriwisata 
                        where kategoriALAMAT like '%".$cari."%'");
                    }

                    else{
                        $query = mysqli_query($connection,"select kategoriwisata.* from kategoriwisata"); 
                    }
            $nomor = 1;
                while($row = mysqli_fetch_array($query))
                {
        ?>
            <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $row['kategoriKODE']; ?></td>
            <td><?php echo $row['kategoriNAMA']; ?></td>
            <td><?php echo $row['kategoriKET']; ?></td>
            <td><?php echo $row['kategoriREFERENCE']; ?></td>

            <?php $nomor = $nomor+1;?><!--buat nambah nomor-->
        <?php } ?> <!-- kenapa gini karena ada while itu php dan untuk tutup  nya kita mau di td jadi kita tutup di bawah-->
        </tbody>
    </table>

</div>
<!-- bagian akhir -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>