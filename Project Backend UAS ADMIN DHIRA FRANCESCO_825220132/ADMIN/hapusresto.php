<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $koderesto = $_GET["hapus"];

        mysqli_query($connection, "delete from restoran 
        where restoranKODE ='$koderesto'");
        echo "<script>alert('DATA BERHASIL DIHAPUS')</script>";
        header("location:dasboardrestoran.php");
        
    }
    ?>