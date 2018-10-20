<?php 

$nim = $_GET['nim']; 
$konek	= mysqli_connect("localhost", "root", "", "ta");
$select = mysqli_query($konek, "SELECT * FROM data WHERE nim='$nim'" );
$act	= mysqli_fetch_array($select);
$array = explode(",", $act['hobi']);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="update.php">
		<center>
		<table >
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo$act['nama'] ?>"></td>
			</tr>
			<tr> 
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo$act['nim'] ?> "></td>
			</tr>
			<tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" value="<?php echo$act['tgl_lahir'] ?> "></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td><select name="jk" >
					<option value="laki-laki" <?php echo$act['jk']=="laki-laki"? "selected='selected'" : ""; ?>>Laki-laki</option>
					<option value="perempuan" <?php echo$act['jk']=="perempuan"? "selected='selected'" : "" ; ?>>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Program studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="Manajemen Informatika" <?php echo$act['prodi']=="Manajemen Informatika"? "selected='selected'" : "" ; ?>>Manajemen Informatika</option>
					<option value="Teknik Telekomunikasi" <?php echo$act['prodi']=="Teknik Informatika"? "selected='selected'" : "" ; ?>>Teknik Telekomunikasi</option>
					<option value="Teknik Elektro" <?php echo$act['prodi']=="Teknik Elektro"? "selected='selected'" : "" ; ?>>Teknik Elektro</option>
					<option value="Administrasi Bisnis" <?php echo$act['prodi']=="Administrasi Bisnis"? "selected='selected'" : "" ; ?>>Administrasi Bisnis</option>
					<option value="Desain Komunikasi Visual" <?php echo$act['prodi']=="Desain Komunikasi Visual"? "selected='selected'" : "" ; ?>>Desain Komunikasi Visual</option>
					</select>
			</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><input type="radio" name="fakultas" value="Ilmu Terapan" <?php echo$act['fakultas'] == "Ilmu Terapan"? "checked" : "" ; ?>>Ilmu Terapan</td>
					<tr>
					<td></td>
					<td></td>
					<td><input type="radio" name="fakultas" value="Teknik Elektro" <?php echo$act['fakultas'] == "Teknik Elektro"? "checked" : "" ; ?>>Teknik Elektro</td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="radio" name="fakultas" value="Industri Kreatif" <?php echo$act['fakultas'] == "Industri Kreatif"? "checked" : "" ; ?>>Industri Kreatif</td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="radio" name="fakultas" value="Ekonomi Bisnis" <?php echo$act['fakultas'] == "Ekonomi Bisnis"? "checked" : "" ; ?>>Ekonomi Bisnis</td>
					</tr>
			</tr>
			<tr>
			<td>Hobi</td>
			<td>:</td>
				<td>
					<input type="checkbox" name="hobi[]" value="Renang" <?php in_array('Renang', $array) ? print 'checked': ' ' ?> >Renang
				</td>
			</tr>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="hobi[]" value="Bola" <?php in_array('Bola', $array)?print 'checked': ' '?>>Bola
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
				<input type="checkbox" name="hobi[]" value="Volly" <?php in_array('Volly', $array)?print 'checked': ''?>>Volly
				</td>
			</tr>
			<tr>	
				<td></td>
				<td></td>
				<td>
				<input type="checkbox" name="hobi[]" value="Badminton" <?php in_array('Badminton', $array)?print 'checked': ''?>>Badminton
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="hobi[]" value="Basket" <?php in_array('Basket', $array)?print 'checked': ''?>>Basket 	 	
				</td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal" value="<?php echo$act['asal'] ?> "></td>
			</tr>
			<tr>
				<td>Moto hidup</td>
				<td>:</td>
				<td><input type="textarea" name="moto" value="<?php echo$act['moto'] ?> "></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2" align="right"><input type="submit" name="submit"></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>

