<!DOCTYPE html>
<html>

<?php
    include "include/config.php";
    if(isset($_POST['Edit']))
    {
        $hotelKODE = $_POST['kodehotel'];
        $hotelNAMA = $_POST['namahotel'];
        $hotelALAMAT = $_POST['alamathotel'];
        $kategoriKODE = $_POST['kategorihotel'];
        $namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];
        $ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);
        if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "png") or ($ekstensifile == "PNG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
            mysqli_query($connection, "UPDATE dhira_francesco SET hotelNAMA = '$hotelNAMA', hotelALAMAT = '$hotelALAMAT', hotelFOTO = ' $namafile', kategori0132 = '$kategoriKODE' WHERE hotel0132 = '$hotelKODE'");
		}
        
    }

    $kodehotel = $_GET["ubah"];
    $editdestinasi = mysqli_query($connection, "select * from dhira_francesco where hotel0132 = '$kodehotel'");
    $rowedit = mysqli_fetch_array($editdestinasi);
    

    ?>
    <head>
    <title></title>
    <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>




<body>
    <div class ="row">
    <div class="col-sm-1"></div><!-- membuat satu kolom di sebelah kiri form ini jadi bisa di atur itu sm nya-->
    <div class="col-sm-10"> 
    <form method="POST" enctype="multipart/form-data"><!--klo mau submit data harus tambahain method salahs atu nya post--->
    
        <div class="mb-3 row"><!-- buat jarak 3 spasi di bawah-->
        <label for="kodehotel" class="col-sm-2 col-form-label">Kode Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="kodehotel" name ="kodehotel" value="<?php echo $rowedit["hotel0132"]?>" readonly>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="namahotel" class="col-sm-2 col-form-label">Nama Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="namahotel" name ="namahotel" value="<?php echo $rowedit["hotelNAMA"]?>" >

        </div>
        </div>
        <div class="mb-3 row">
       
        <label for="alamathotel" class="col-sm-2 col-form-label">Alamat Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="alamathotel" name ="alamathotel" value="<?php echo $rowedit["hotelALAMAT"]?>" >

        </div>
        </div>
        <div class="mb-3 row">
        <label for="kategorihotel" class="col-sm-2 col-form-label">Kategori Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="kategorihotel" name ="kategorihotel" value="<?php echo $rowedit["kategori0132"]?>" >

        </div>
</div>

<div class="form-group row">
    <label for="file" class="col-sm-2 col-form-label">Photo Hotel</label>
    <div class="col-sm-10">
      <input type="file" id="file" name="file">
      <p class="help-block">Field ini digunakan untuk unggah file</p>
    </div>
  </div>


        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                    <input type="submit" class="btn btn-primary" value="Edit" name="Edit">
                    <input type="reset" class="btn btn-secondary" value="Batal" name="Batal">
            </div>
        </div>
    </form>

    <form method="POST">
<div class="form-group row mb-2 mt-2">
    <label for="search" class="col-sm-2">Nama Hotel</label>
    <div class="col-sm-8">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
        placeholder="Cari Nama Hotel">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary"value="Search">
</div>
</form>
<form method="POST">
<div class="form-group row mb-2 mt-2">
    <label for="cari" class="col-sm-2">Alamat Hotel</label>
    <div class="col-sm-8">
        <input type="text" name="cari" class="form-control" id="cari"
        value="<?php if(isset($_POST['cari'])) {echo $_POST['cari'];}?>"
        placeholder="Cari Alamat Hotel">
    </div>
    <input type="submit" name="send" class="col-sm-1 btn btn-primary"value="cari">
</div>
</form>




    <div class="jumbotron mt-5"><!-- mt(kayanyak mt itu margintop ) itu buat atur jarak-->
    <h1 class="display-5">Hasil Entri Data Hotel</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Hotel</th>
            <th scope="col">Nama Hotel</th>
            <th scope="col">Alamat Hotel</th>
            <th scope="col">Foto Hotel</th>
            <th scope="col">Kategori Hotel</th>
            <th colspan="2"style="text-align: center">Aksi</th>
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
                        $query = mysqli_query($connection,"select Dhira_Francesco.* from Dhira_Francesco 
                        where hotelNAMA like '%".$search."%'");
                    }else if(isset($_POST['send']))
                    {
                        $cari = $_POST['cari'];
                        $query = mysqli_query($connection,"select Dhira_Francesco.* from Dhira_Francesco 
                        where hotelALAMAT like '%".$cari."%'");
                    }

                    else{
                        $query = mysqli_query($connection,"select dhira_francesco.* from dhira_francesco"); 
                    }
            $nomor = 1;
                while($row = mysqli_fetch_array($query))
                {
        ?>
            <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $row['hotel0132']; ?></td>
            <td><?php echo $row['hotelNAMA']; ?></td>
            <td><?php echo $row['hotelALAMAT']; ?></td>
            <td>
      <?php if(is_file("images/".$row['hotelFOTO']))
      { ?>
       <img src="images/<?php echo $row['hotelFOTO']?>" width="80">
      <?php } else
       echo "<img src='images/noimage.png' width='80'>"
      ?>
     </td>
            <td><?php echo $row['kategori0132']; ?></td>
            <td width="5px"><!-- ini logo edit-->
                <a href="dasboardkuis2ubah.php?ubah=<?php echo $row["hotel0132"]?>" class ="btn btn-success btn-sm" title=" edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
                </svg>

            <td width="10px"><!-- ini logo hapus-->
                <a href="kuis2hapus.php?hapus=<?php echo $row["hotel0132"]?>" class ="btn btn-danger btn-sm" title=" hapus">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser-fill" viewBox="0 0 16 16">
                <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                </svg>
                </td>
            </tr>
            <?php $nomor = $nomor+1;?><!--buat nambah nomor-->
        <?php } ?> <!-- kenapa gini karena ada while itu php dan untuk tutup  nya kita mau di td jadi kita tutup di bawah-->
        </tbody>
    </table>
    </div><!-- col10-->
    </div><!-- row -->
    <!-- bagian for harus sama dengan bagian id>
        typenya ganti text
        tambahin name nya ikutin sesuai mau di isi ibaratnya kayak buat nama variabel
    untuk label juga bisa di ubah buat nama di tampilan nanti-->


</body>
</html>