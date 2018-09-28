<?php
	if (isset($_POST['submit2'])) {
		session_start();
		$nama = $_SESSION['nama'];
		$target_dir = $_SESSION['gmbr_target'];
		$basefile = $_SESSION['gmbr_asal'];
		
		echo "Nama anda $nama<br>";
		echo "<img src = '".$target_dir."' width='100' height='100'> <br>";
		echo "Hobby anda: <br>";
		foreach ($_POST['hobby'] as $key => $value) {
			echo $value."<br> ";
		}
	}
?>

</!DOCTYPE html>
<html>
<body>
	<form method="POST" action="result.php">
		<button type="submit" name="logout">logout</button>
		<?php
			if (isset($_POST['logout'])) {
				session_destroy();
				header('Location: index.php');
			}
		?>
	</form>
</body>
</html>