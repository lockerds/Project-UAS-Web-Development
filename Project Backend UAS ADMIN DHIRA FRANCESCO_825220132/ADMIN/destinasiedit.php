<!DOCTYPE html>
<html>

<?php
    include "include/config.php";
    if(isset($_POST['Edit']))
    {
        $destinasiKODE = $_POST['kodedestinasi'];
        $destinasiNAMA = $_POST['namadestinasi'];
        $kategoriKODE = $_POST['kodekategori'];
        $namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];
        $ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);
        $daerahketerangan= $_POST['keterangan'];
        $daerahdestinasi =$_POST['inputdaerah'];

        mysqli_query($connection, "UPDATE destinasi set 
        destinasiNAMA = '$destinasiNAMA',destinasiKET = '$daerahketerangan',destinasiDAERAH = '$daerahdestinasi',destinasiFOTO = '$namafile',kategoriKODE = '$kategoriKODE' where destinasiKODE = '$destinasiKODE'");

        header("location:dasboarddestinasi.php");
        
    }
$datakategori = mysqli_query($connection," select * from kategoriwisata");
// untuk menerima kiriman data dari data yang akan diubah
$kodedestinasi = $_GET["ubah"];
$editdestinasi = mysqli_query($connection, "select * from destinasi where destinasiKODE= '$kodedestinasi'");
$rowedit = mysqli_fetch_array($editdestinasi);

$editkategori = mysqli_query($connection, "select * from destinasi,kategoriwisata 
                where destinasiKODE ='$kodedestinasi' and destinasi.kategoriKODE = kategoriwisata.kategoriKODE");
$rowedit2 = mysqli_fetch_array($editkategori);
    ?>
    
    <head>

    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    </head>
    <body>
        <div class ="row">
        <div class="col-sm-1"></div><!-- membuat satu kolom di sebelah kiri form ini jadi bisa di atur itu sm nya-->
        <div class="col-sm-10"> 
        <form method="POST" enctype="multipart/form-data"><!--klo mau submit data harus tambahain method salahs atu nya post--->
            <div class="mb-3 row"><!-- buat jarak 3 spasi di bawah-->
            <label for="kodedestinasi" class="col-sm-2 col-form-label">Kode Destinasi</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="kodedestinasi" name ="kodedestinasi" placeholder="Kode Destinasi" maxlength="4" value="<?php echo $rowedit ["destinasiKODE"]?>" readonly> 
            </div>
            </div>
            <div class="mb-3 row">
            <label for="namadestinasi" class="col-sm-2 col-form-label">Nama Destinasi</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="namadestinasi" name ="namadestinasi" placeholder="Nama Destinasi"value="<?php echo $rowedit ["destinasiNAMA"]?>">
            </div>
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
            
<br>

         <div class="form-group row">
            <label for="file" class="col-sm-2 col-form-label">Photo Wisata</label>
            <div class="col-sm-10">
            <input type="file" id="file" name="file">
            <p class="help-block">Field ini digunakan untuk unggah file</p>
            </div>
        </div>

        <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="keterangan" style="height: 100px" name="keterangan"></textarea>
  <label for="keterangan">Deskripsi Wisata</label>
</div>

            
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-7">
                        <input type="submit" class="btn btn-primary" value="Edit" name="Edit">
                        <input type="reset" class="btn btn-secondary" value="Batal" name="Batal">
                </div>
            </div>
        </form>
<!-- membuat form pencarian-->
<form method="POST">
<div class="form-group row mb-2 mt-2">
    <label for="search" class="col-sm-2">Nama Destinasi</label>
    <div class="col-sm-8">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
        placeholder="Cari Nama Destinasi">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary"value="Search">
</div>
</form>
<!-- penutup form search-->

        <div class="jumbotron mt-5"><!-- mt(kayanyak mt itu margintop ) itu buat atur jarak-->
        <h1 class="display-5">Hasil Entri Data Destiansi Wisata</h1>
        </div>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Destinasi</th>
                <th scope="col">Nama Destinasi</th>
                <th scope="col">Kode Kategori</th>
                <th scope="col">Daerah Destinasi</th>
                <th scope="col">Foto Destinasi</th>
                <th scope="col">Deskripsi Destinasi</th>
                <th colspan="2"style="text-align: center">Aksi</th>
                
                </tr>
            </thead><!--panggil database bisa dimana aja asal sebelum tbody-->
                    <!-- tiap pake php harus di buka dulu pake kayak <   php-->
            <tbody>
                <!--$ROW ITU VARIABEL DOANG BISA DI GANTI ASAL NNTI DI BAWAHNYA SEMUA DI GANTI JUGA-->
                <!-- destinasiKODE ITU HARUS SAMA POKOKNYA SAMA YG DATABASE-->

                <!-- menerima kiriman dari formn untuk search pada tabel-->
                <?php 
                    if(isset($_POST['kirim']))
                    {
                        $search = $_POST['search'];
                        $query = mysqli_query($connection,"select destinasi.* from destinasi 
                        where destinasiNAMA like '%".$search."%'");
                    }else{
                       $query = mysqli_query($connection,"select destinasi.* from destinasi"); 
                    }
                //    <!-- itu yang di dalam post ada kirim harus sama dengan name yang di atas karena di atas kirim maka harus sama-->
                 //   <!-- itu yang di dalam post ada kirim harus sama dengan search yang di atas karena di atas kirim maka harus sama-->
                //$query = mysqli_query($connection, "select destinasi.* from destinasi");
                $nomor = 1;
                   while($row = mysqli_fetch_array($query))
                    {
                ?>     
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $row['destinasiKODE']; ?></td>
                <td><?php echo $row['destinasiNAMA']; ?></td>
                <td><?php echo $row['kategoriKODE']; ?></td>
                <td><?php echo $row['destinasiDAERAH']; ?></td>
                <td>  <?php if (is_file("images/" . $row['destinasiFOTO'])) { ?>
        <img src="images/<?php echo $row['destinasiFOTO'] ?>" class="card-img-top" alt="..." style="max-width: 600px; height:250px;">
      <?php } else { ?>
        <img src="images/noimage.png" class="card-img-top" alt="..." style="max-width: 400px;">
      <?php } ?></td>
             <td><?php echo $row['destinasiKET']; ?></td>
                <td width="5px"><!-- ini logo edit-->
                <a href="dasboarddestinasiedit.php?ubah=<?php echo $row["destinasiKODE"]?>" class ="btn btn-success btn-sm" title=" edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
                </svg>
                <td width="10px"><!-- ini logo hapus-->
                <a href="destinasihapus.php?hapus=<?php echo $row["destinasiKODE"]?>" class ="btn btn-danger btn-sm" title=" hapus">
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

        <!-- untuk js select tool-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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