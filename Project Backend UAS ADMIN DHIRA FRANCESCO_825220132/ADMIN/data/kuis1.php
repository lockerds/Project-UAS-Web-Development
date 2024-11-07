<!DOCTYPE html>
<html>

<?php
    include "include/config.php";
    if(isset($_POST['Simpan']))
    {
        $hotelKODE = $_POST['kodehotel'];
        $hotelNAMA = $_POST['namahotel'];
        $hotelALAMAT = $_POST['alamathotel'];
        $kategoriKODE = $_POST['kategorihotel'];

        mysqli_query($connection, "INSERT INTO Dhira_Francesco values ('$hotelKODE',
        '$hotelNAMA','$hotelALAMAT','$kategoriKODE')");
    }
    ?>
    <head>
    <title></title>
    <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>




<body>
    <div class ="row">
    <div class="col-sm-1"></div><!-- membuat satu kolom di sebelah kiri form ini jadi bisa di atur itu sm nya-->
    <div class="col-sm-10"> 
    <form method="POST"><!--klo mau submit data harus tambahain method salahs atu nya post--->
    
        <div class="mb-3 row"><!-- buat jarak 3 spasi di bawah-->
        <label for="kodehotel" class="col-sm-2 col-form-label">Kode Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="kodehotel" name ="kodehotel" placeholder="Kode Hotel">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="namahotel" class="col-sm-2 col-form-label">Nama Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="namahotel" name ="namahotel" placeholder="Nama Hotel">
        </div>
        </div>
        <div class="mb-3 row">
       
        <label for="alamathotel" class="col-sm-2 col-form-label">Alamat Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="alamathotel" name ="alamathotel" placeholder="Alamat Hotel">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="kategorihotel" class="col-sm-2 col-form-label">Kategori Hotel</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="kategorihotel" name ="kategorihotel" placeholder="Kategori Hotel">
        </div>
</div>


        <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
                    <input type="submit" class="btn btn-primary" value="Simpan" name="Simpan">
                    <input type="reset" class="btn btn-secondary" value="Batal" name="Batal">
            </div>
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
            <th scope="col">Kategori Hotel</th>
            </tr>
        </thead><!--panggil database bisa dimana aja asal sebelum tbody-->
                <!-- tiap pake php harus di buka dulu pake kayak <   php-->
        <tbody>
            <!--$ROW ITU VARIABEL DOANG BISA DI GANTI ASAL NNTI DI BAWAHNYA SEMUA DI GANTI JUGA-->
            <!-- destinasiKODE ITU HARUS SAMA POKOKNYA SAMA YG DATABASE-->
        <?php
            $query = mysqli_query($connection, "select Dhira_Francesco.* from Dhira_Francesco");
            $nomor = 1;
                while($row = mysqli_fetch_array($query))
                {
        ?>
            <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $row['hotel0132']; ?></td>
            <td><?php echo $row['hotelNAMA']; ?></td>
            <td><?php echo $row['hotelALAMAT']; ?></td>
            <td><?php echo $row['kategori0132']; ?></td>
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