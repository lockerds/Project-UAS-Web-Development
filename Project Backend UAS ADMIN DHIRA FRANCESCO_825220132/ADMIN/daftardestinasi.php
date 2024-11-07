<!DOCTYPE html>
<html>

<?php
    include "include/config.php";
    ?>
    
    <head>

    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
                
                </tr>
            </thead>
            <tbody>

                <?php 
                    if(isset($_POST['kirim']))
                    {
                        $search = $_POST['search'];
                        $query = mysqli_query($connection,"select * from destinasi , kategoriwisata
                        where destinasiNAMA like '%".$search."%' AND kategoriwisata.kategoriKODE = destinasi.kategoriKODE");
                    }else{
                       $query = mysqli_query($connection,"select * 
                       from destinasi, kategoriwisata
                       WHERE kategoriwisata.kategoriKODE = destinasi.kategoriKODE"); 
                    }

                $nomor = 1;
                   while($row = mysqli_fetch_array($query))
                    {
                ?>     
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $row['destinasiKODE']; ?></td>
                <td><?php echo $row['destinasiNAMA']; ?></td>
                <td><?php echo $row['kategoriNAMA']; ?></td>
                </tr>
                <?php $nomor = $nomor+1;?><!--buat nambah nomor-->
            <?php } ?> <!-- kenapa gini karena ada while itu php dan untuk tutup  nya kita mau di td jadi kita tutup di bawah-->
            </tbody>
        </table>
        </div>
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