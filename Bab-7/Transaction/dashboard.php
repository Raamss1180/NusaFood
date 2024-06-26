<?php 
	session_start();
	if($_SESSION['username'] == null) {
		header('location:login.php');
	}
?>

<html>
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>NusaFood</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="ph ph-bowl-food"></i>
            <span class="logo_name">NusaFood</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
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
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Pesanan</div>
                        <div class="number">100</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span>Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-add'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Pemasukan</div>
                        <div class="number">Rp 500.000</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span>Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-wallet'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Menu</div>
                        <div class="number">50</div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span>Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-food-menu'></i>
                </div>
            </div>
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