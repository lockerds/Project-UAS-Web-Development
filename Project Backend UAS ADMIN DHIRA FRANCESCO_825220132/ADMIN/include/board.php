<?php
include "config.php";
$sql = mysqli_query($connection, "select * from destinasi");
$jumlah = mysqli_num_rows($sql);

$sqlkategori = mysqli_query($connection, "select * from kategoriwisata");
$jumlahkategori = mysqli_num_rows($sqlkategori);


$sqlhotel = mysqli_query($connection, "select * from dhira_francesco");
$jumlahhotel = mysqli_num_rows($sqlhotel);

$sqlkendaraan = mysqli_query($connection, "select * from kendaraan");
$jumlahkendaraan = mysqli_num_rows($sqlkendaraan);

$sqloleh = mysqli_query($connection, "select * from oleh2");
$jumlaholeh = mysqli_num_rows($sqloleh);

$sqlresto = mysqli_query($connection, "select * from restoran");
$jumlahresto = mysqli_num_rows($sqlresto);

$sqltravel = mysqli_query($connection, "select * from travel");
$jumlahtravel = mysqli_num_rows($sqltravel);

$sqlberita = mysqli_query($connection, "select * from berita");
$jumlahberita = mysqli_num_rows($sqlberita);
?>

<div class="row">
                                <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-body">Jumlah Kategori 
                                        Wisata :<?php echo$jumlahkategori ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="dasboarddaftarkategori.php">View Details</a>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Destinasi 
                                        Wisata :<?php echo$jumlah ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dasboarddaftardestinasi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah Hotel : <?php echo$jumlahhotel ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dasboarddaftarhotel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah Mobil :  <?php echo$jumlahkendaraan ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dasboarddaftarkendaraan.php">dasboarddaftarhotel</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Jumlah Pusat Oleh-oleh :  <?php echo$jumlaholeh ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dasboarddaftaroleh.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Jumlah Restaurant :  <?php echo$jumlahresto ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dasboarddaftarresto.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Jumlah Travel :  <?php echo$jumlahtravel ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dasboarddaftartravel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Jumlah Berita :  <?php echo$jumlahberita ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="dasboarddaftarberita.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                        </div>