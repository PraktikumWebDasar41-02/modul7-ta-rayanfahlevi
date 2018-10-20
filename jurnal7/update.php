<?php 
$konek	= mysqli_connect("localhost", "root", "", "ta");


	$tgl_lahir = $_POST['tgl_lahir'];
	$jk		= $_POST['jk'];
	$prodi	= $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$hobi 	= implode(' , ',$_POST['hobi']);
	$asal 	= $_POST['asal'];
	$moto 	= $_POST['moto'];

	$update = mysqli_query($konek,"UPDATE data SET nama='$nama', nim='$nim', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi', fakutas='$fakultas', hobi='hobi', asal='$asal', moto='$moto' WHERE nim='$nim'");
		if (isset($update)) {
			echo "berhasil";
			header("Location:tampil.php");
		
	}

 ?>