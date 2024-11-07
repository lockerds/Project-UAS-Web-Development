<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FOTO DESTINASI WISATA</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

<?php 
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
		$kodefoto = $_POST['inputkode'];
		$namafoto = $_POST['inputnama'];
//		$kodedestinasi = $_POST['kodedestinasi'];

		$namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG") or ($ekstensifile == "png") or ($ekstensifile == "PNG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "insert into fotodestinasi value ('$kodefoto', '$namafoto', '$namafile', '')");
		}

	}

//	$datadestinasi = mysqli_query($connection, "select * from destinasi");
?>


<body>

<div class="row">
<div class="col-sm-1"></div>

<div class="col-sm-10">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Input Photo Destinasi Wisata</h1>
		</div>
	</div>

	<form method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="kodefoto" class="col-sm-2 col-form-label">Kode Photo</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="kodefoto" name="inputkode" placeholder="Kode Photo" maxlength="4">
			</div>
		</div>

		<div class="form-group row">
			<label for="namafoto" class="col-sm-2 col-form-label">Nama Photo</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namafoto" name="inputnama" placeholder="Nama Photo">
			</div>
		</div>

<!--		<div class="form-group row">
			<label for="namadestinasi" class="col-sm-2 col-form-label">Nama Destinasi</label>
			<div class="col-sm-10">
			<select class="form-control" id="namadestinasi" name="kodedestinasi">
				<?php// while($row = mysqli_fetch_array($datadestinasi))
//				{ ?>
					<option value="<?php// echo $row["destinasiKODE"]?>">
						<?php// echo $row["destinasiKODE"]?>
						<?php// echo $row["destinasinama"]?>
					</option>
				<?php //} ?>				

			</select>
			</div>
		</div>
-->

		<div class="form-group row">
			<label for="file" class="col-sm-2 col-form-label">Photo Wisata</label>
			<div class="col-sm-10">
				<input type="file" id="file" name="file">
				<p class="help-block">Field ini digunakan untuk unggah file</p>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
				<input type="submit" name="Batal" class="btn btn-secondary" value="Batal">

			</div>
			
		</div>

		
	</form>
	<form method="POST">
<div class="form-group row mb-2 mt-2">
    <label for="search" class="col-sm-2">Kode Foto</label>
    <div class="col-sm-8">
        <input type="text" name="search" class="form-control" id="search"
        value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>"
        placeholder="Cari Kode Foto">
    </div>
    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary"value="Search">
</div>
</form>
<form method="POST">
<div class="form-group row mb-2 mt-2">
    <label for="cari" class="col-sm-2">Nama Foto</label>
    <div class="col-sm-8">
        <input type="text" name="cari" class="form-control" id="cari"
        value="<?php if(isset($_POST['cari'])) {echo $_POST['cari'];}?>"
        placeholder="Cari Nama Foto">
    </div>
    <input type="submit" name="send" class="col-sm-1 btn btn-primary"value="cari">
</div>
</form>

</div>

<div class="col-sm-1"></div>
</div>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Daftar Photo Destinasi Wisata</h1>
				<br>
			</div>
		</div>

		<div class="row row-cols-1 row-cols-md-3 g-4">

	<table class="table table-hover table-danger">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Photo</th>
				<th>Nama Photo Wisata</th>
<!--				<th>Kode Destinasi</th>  -->
				<th>Photo Destinasi</th>
				
			<th colspan="2" style="text-align: center">Action</th>
			</tr>			
		</thead>

		<tbody>
		<?php 
                    if(isset($_POST['kirim']))
                    {
                        $search = $_POST['search'];
                        $query = mysqli_query($connection,"select fotodestinasi.* from fotodestinasi 
                        where fotodestinasiKODE  like '%".$search."%'");
                    }else if(isset($_POST['send']))
                    {
                        $cari = $_POST['cari'];
                        $query = mysqli_query($connection,"select fotodestinasi.* from fotodestinasi 
                        where fotodestinasiNAMA like '%".$cari."%'");
                    }

                    else{
                        $query = mysqli_query($connection,"select fotodestinasi.* from fotodestinasi"); 
                    }
            $nomor = 1;
                while($row = mysqli_fetch_array($query))
                {
        ?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $row['fotodestinasiKODE'];?></td>
					<td><?php echo $row['fotodestinasiNAMA'];?></td>
<!--					<td><?php// echo $row['destinasiKODE'];?></td>  -->
					<td>
						<?php if(is_file("images/".$row['fotodestinasiFILE']))
						{ ?>
							<img src="images/<?php echo $row['fotodestinasiFILE']?>" width="80">
						<?php } else
							echo "<img src='images/noimage.png' width='80'>"
						?>
					</td>
					<td width="5px"><!-- ini logo edit-->
                <a href="editfoto.php?ubah=<?php echo $row["fotodestinasiKODE"]?>" class ="btn btn-success btn-sm" title=" edit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/> 
                </svg>

            <td width="10px"><!-- ini logo hapus-->
                <a href="hapusfoto.php?hapus=<?php echo $row["fotodestinasiKODE"]?>" class ="btn btn-danger btn-sm" title=" hapus">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser-fill" viewBox="0 0 16 16">
                <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                </svg>
                </td>

				</tr>
			<?php $nomor = $nomor + 1;?>
			<?php }	?>
		</tbody>
		
	</table>
	</div>

	<div class="col-sm-1"></div>

	
</div>


</body>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</html>