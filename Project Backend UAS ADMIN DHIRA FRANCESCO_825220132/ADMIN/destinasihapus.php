<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $kodedestinasi = $_GET["hapus"];

        mysqli_query($connection, "delete from destinasi 
        where destinasiKODE ='$kodedestinasi'");
        echo "<script>alert('DATA BERHASIL DIHAPUS')</script>";
        header("location:dasboarddestinasi.php");
        
    }
$datakategori = mysqli_query($connection," select * from kategoriwisata");
    ?>