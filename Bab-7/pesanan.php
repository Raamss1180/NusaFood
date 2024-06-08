<!DOCTYPE html>
<html>
<head>
	<title>Food Ordering Form</title>
	<link rel="stylesheet" type="text/css" href="css/Pesanan.css">
</head>
<body>
	<div class="container">
		<h1>Food Ordering Form</h1>
		<form class="form" action="/submit_order" method="post">
			<label for="name">Nama:</label><br>
			<input type="text" id="name" name="name" required><br>
			<label for="address">Alamat:</label><br>
			<input type="text" id="address" name="address" required><br>
			<label for="phone">No HP:</label><br>
			<input type="tel" id="phone" name="phone" required><br>
			<label for="food">Pilih Menu:</label><br>
			<select id="food" name="food" required>
                <option value="" disabled selected></option>
				<option value="Sate">Sate</option>
				<option value="Rendang">Rendang</option>
				<option value="Soto">Soto</option>
			</select><br>
			<label for="quantity">Jumlah:</label><br>
			<input type="number" id="quantity" name="quantity" min="1" required><br>
			<input type="submit" id="pesanan" value="Pesan">
            <a href="index.php" class="btn" id="kembali">Kembali</a>
		</form>
	</div>
</body>
</html>