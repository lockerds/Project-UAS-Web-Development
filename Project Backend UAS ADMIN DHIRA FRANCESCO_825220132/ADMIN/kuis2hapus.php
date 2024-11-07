<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $kodehotel = $_GET["hapus"];

        mysqli_query($connection, "delete from dhira_francesco 
        where hotel0132 ='$kodehotel'");
        echo "<script>alert('DATA BERHASIL DIHAPUS')</script>";
        header("location:dasboardhotel2.php");
        
    }
    ?>