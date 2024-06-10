<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada data yang Terdeteksi');
        window.location = 'menu.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_transaksi WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../login.php');
	}
?>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="../css/transaction.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Transaction</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="ph ph-bowl-food"></i>
            <span class="logo_name">NusaFood</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="dashboard.php" class="active">
                    <i class="ph ph-speedometer"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../Menu/menu.php">
                    <i class="ph ph-book-open"></i>
                    <span class="links_name">Menu</span>
                </a>
            </li>
            <li>
                <a href="transaction.php">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Transaction</span>
                </a>
            </li>
            <li>
                <a href="../Feed/keluhan.php">
                    <i class="ph ph-mailbox"></i>
                    <span class="links_name">Feed Back</span>
                </a>
            </li>
            <li>
                <a href="../logout.php">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
           <div class="sidebar-button">
              <i class="bx bx-menu sidebarBtn"></i>
           </div>
           <div class="profile-details">
              <span class="admin_name">NusaFood Admin</span>
           </div>
        </nav>
        <div class="home-content">
        <form action='transaction-proses.php' class="transaksi-edit" method='POST' enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <label for="nama">Nama:</label><br>
				<input type="text" id="nama" name="nama" value="<?= $data['nama']?>"required><br>
			<label for="alamat">Alamat:</label><br>
				<input type="text" id="alamat" name="alamat" value="<?= $data['alamat']?>"required><br>
			<label for="no_hp">No HP:</label><br>
				<input type="text" id="no_hp" name="no_hp" value="<?= $data['no_hp']?>"required><br>
			<label for="makanan">Pilih Menu:</label><br>
			<select id="makanan" name="makanan" value="<?= $data['menu']?>"required>
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
						
						<option value='".$data['menu']."'harga='".$data['harga']."'>".$data['menu']."</option>";
					}
				?>
			</select><br>
			<label for="jumlah">Jumlah:</label><br> 
			<input type="number" id="jumlah" name="jumlah" min="1" value="<?= $data['jumlah']?>"required><br>
			<button class="pesanan" type="submit" id="edit" name="edit">Pesan</button>
			<input type="hidden" name="status" value="succes">
        </form>
        </div>
     </section>
     <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>
</html>