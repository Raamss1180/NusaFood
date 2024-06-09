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
                <a href="menu.php">
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
           <a class="tambah-data" href="menu-transaksi.php">Tambah Data</a>
           <table class="table-data">
              <thead>
                 <tr>
                    <th >Menu</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th scope="col" style="width: 20%">Foto</th>
                    <th>Edit</th>
                 </tr>
              </thead>
              <tbody>
                 <?php
                    include '../koneksi.php'; // Sertakan file koneksi.php

                    // Query untuk mengambil data layanan dari database
                    $sql = "SELECT * FROM tb_menu";
                    $result = $koneksi->query($sql);
                    // Cek apakah ada data yang ditemukan
                    if ($result->num_rows > 0) {
                        // Tampilkan data layanan dalam bentuk tabel
                        while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                            <td> $row[menu] </td>
                            <td> $row[deskripsi] </td>
                            <td> $row[harga] </td>
                            <td>
                                <img src='../images-menu/$row[foto]' width='200px'>
                            </td>
                            <td class='aksyen'>
                            <form action='menu-edit.php' method='get' style='display: inline-block;'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <button type='submit' class='CRUD-edit'>Edit</button>
                            </form>
                            <form action='menu-hapus.php' method='post' style='display: inline-block;'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <button type='submit' class='CRUD-hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus layanan ini?\")'>Hapus</button>
                            </form>
                            </td>
                            </tr>
                        ";
                            }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada data menu yang tersedia</td></tr>";
                    }

                    // Tutup koneksi database
                    $koneksi->close();
                    ?>
              </tbody>
           </table>
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