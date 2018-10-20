<form method="post">
	<input type="text" name="cari"><button type="submit">Cari</button>

</form>

<?php 
$db = mysqli_connect("localhost", "root", "", "ta");


//$tampil = mysqli_query($db, "SELECT * FROM data");
echo "<table border='1'>";
echo "<tr>
			<th>Nama</th>
			<th>NIM</th>		
			<th>Program studi</th>
			<th>Aksi</th>
			<th>Edit</th>
		</tr>";
$tampil;
if (isset($_POST['cari'])) {
	$cari = $_POST['cari'];
	$tampil = mysqli_query($db, "SELECT * FROM data WHERE nim like '%$cari%' ");
}else{
	$tampil = mysqli_query($db, "SELECT * FROM data");

}

if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
	$del = mysqli_query($db, "DELETE FROM data WHERE nim = $nim");
	if ($del) {
		header("Location:tampil.php");
	}
}

while ($cc = mysqli_fetch_array($tampil)) {

?>
	
		<tr>
			<td><?php echo $cc['nama']; ?></td>
			<td><?php echo $cc['nim']; ?></td>
			<td><?php echo $cc['prodi']; ?></td>
			<td><?php echo "<a href=tampil.php?nim=".$cc['nim'].">Delete</a>"; ?></td>
			<td><?php echo "<a href=edit.php?nim=".$cc['nim']." >Edit data</a>"; ?></td>
		</tr>
		
	
		

<?php 

}
echo "</table>";
?>