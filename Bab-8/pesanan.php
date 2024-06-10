<!DOCTYPE html>
<html>
<head>
	<title>Food Ordering Form</title>
	<link rel="stylesheet" type="text/css" href="css/Pesanan.css">
	<script src="/JavaScript/DOM.js"></script>
</head>
<body>
	<div class="container">
		<h1>Food Ordering Form</h1>
		<form class="form" action="../Bab-8/Transaction/transaction-proses.php" method="POST">
			<label for="nama">Nama:</label><br>
				<input type="text" id="nama" name="nama" required><br>
			<label for="alamat">Alamat:</label><br>
				<input type="text" id="alamat" name="alamat" required><br>
			<label for="no_hp">No HP:</label><br>
				<input type="tel" id="no_hp" name="no_hp" required><br>
			<label for="makanan">Pilih Menu:</label><br>
			<select id="makanan" name="makanan" required>
                <option value="" disabled selected></option>
				<?php
					include 'koneksi.php';
					$sql = "SELECT * FROM tb_menu";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
						<option>Menu Habis</option>";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
						
						<option value='".$data['menu']."' data-harga='".$data['harga']."'>".$data['menu']."</option>";
					}
				?>
			</select><br>
			<label for="jumlah">Jumlah:</label><br> 
			<input type="number" id="jumlah" name="jumlah" min="1" required><br>
			<input class="pesanan" type="submit" id="pesanan" name="pesanan" value="pesanan">
			<input type="hidden" name="status" value="succes">
            <a href="index.php" class="btn" id="kembali">Kembali</a>
		</form>
	</div>
</body>
</html>