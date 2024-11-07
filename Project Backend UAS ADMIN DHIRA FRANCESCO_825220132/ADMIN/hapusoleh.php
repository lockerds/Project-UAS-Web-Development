<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $kodeoleh = $_GET["hapus"];

        mysqli_query($connection, "delete from oleh2 
        where olehKODE ='$kodeoleh'");
        echo "<script>alert('DATA BERHASIL DIHAPUS')</script>";
        header("location:dasboardpusatoleh.php");
        
    }
    ?>