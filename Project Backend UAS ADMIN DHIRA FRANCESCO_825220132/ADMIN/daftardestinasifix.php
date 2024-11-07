<!DOCTYPE html>
<html>

<?php
    include "include/config.php";

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
                <td width="5px"><!-- ini logo edit-->
                <a href="destinasiedit.php?ubah=<?php echo $row["destinasiKODE"]?>" class ="btn btn-success btn-sm" title=" edit">
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