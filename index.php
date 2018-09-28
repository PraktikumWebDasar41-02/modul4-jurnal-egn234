<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="index.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" name="submit1">submit</button></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	if (isset($_POST['submit1'])) {
		session_start();
		$nama = $_POST['nama'];
		$_SESSION['nama'] = $nama;
		$target_dir = 'gambar/'.basename($_FILES['gambar']['name']);
		$basefile = $_FILES['gambar']['tmp_name'];
		$_SESSION['gmbr_asal'] = $basefile;
		if (move_uploaded_file($basefile, $target_dir)) {
			echo "<br>success<br>";
			$_SESSION['gmbr_target'] = $target_dir;
			
		}
		
		header('Location:hobby.php');
	}
?>
