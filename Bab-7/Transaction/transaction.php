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
           <h3>Transaction</h3>
           <table class="table-data">
              <thead>
                 <tr>
                    <th>Nama</th>
                    <th>alamat</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td>Gaisani</td>
                    <td>jl.pattimura no 1</td>
                    <td>Sate padang</td>
                    <td>15000</td>
                    <td>20-09-2021</td>
                    <td>
                       <p class="success">Success</p>
                    </td>
                    <td>
                       <button class="btn_detail"
                          onclick="showDetails('Gaisani', 'jl.pattimura no 1', 'Sate padang', '15000', '20-09-2021', 'Success')">Detail</button>
                    </td>
                 </tr>
                 <!-- Add more rows as needed -->
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
        function showDetails(nama, alamat, menu, harga, tanggal, status) {
            alert(`Nama: ${nama}\nAlamat: ${alamat}\nMenu: ${menu}\nHarga: ${harga}\nTanggal: ${tanggal}\nStatus: ${status}`);
      }
    </script>
</body>
</html>