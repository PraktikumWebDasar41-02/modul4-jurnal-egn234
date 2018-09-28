
<?php
	session_start();
	$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="result.php">
		<table>
			<tr>
				<td>HALO <?php echo $nama ?>, PILIH HOBBY</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="hobby[]" value="Main Bola">Main Bola</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="hobby[]" value="Membaca">Membaca</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="hobby[]" value="Nonton">Nonton Film</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="hobby[]" value="Main Game">Main Game</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="hobby[]" value="Tidur">Tidur</td>
			</tr>
			<tr>
				<td><button type="submit" name="submit2">KIRIM</button></td>
			</tr>
		</table>
	</form>
</body>
</html>
