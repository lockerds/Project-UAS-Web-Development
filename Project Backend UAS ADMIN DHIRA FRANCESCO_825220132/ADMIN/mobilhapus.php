<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $mobilKODE = $_GET["hapus"];

        mysqli_query($connection, "delete from mobil 
        where mobilKODE ='$mobilKODE'");
        echo "<script>alert('DATA BERHASIL DIHAPUS')</script>";
        header("location:dasboardmobil.php");
        
    }

    ?>