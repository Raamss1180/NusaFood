<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>NusaFood</title>
</head>
<body>
    <header>
    <a href="#" class ="logo">NusaFood</a>
    <div class ="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar" >
        <li><a href="#home">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#kontak">Kontak</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</header>
<!----home start-->
<section class="home" id="home">
    <div class="home-text">
    <h1>NusaFood</h1>
    <h2>Kumpulan Makanan Nusantara <br> You will love it ❤️</h2>
    <a href="#menu" class="btn">Menu</a>
</div>

<div class="home-img">
    <img src="Images/home.png">
</div>

</section>
<section class="about" id="about">

    <!-- Carousel -->
<div class="carousel">
    <div class="carousel-container">
        <div class="carousel-item"><img src="images/LogoNusaFood.png" alt="image 1"></div>
        <div class="carousel-item"><img src="images/Gambar1.jpg" alt="Image 2"></div>
        <div class="carousel-item"><img src="images/ayam.jpg" alt="Image 3"></div>
        <div class="carousel-item"><img src="images/sate.jpg" alt="Image 4"></div>
    </div>
    <button class="carousel-button prev" onclick="prevSlide()">&#10094; </button>
    <button class="carousel-button next" onclick="nextSlide()"> &#10095;</button>
</div>

    <!-- <div class="about-img">
        <img src="images/LogoNusaFood.png">
    </div> -->
    <div class="about-text">
   <span> Tentang Kami</span>
   <h2>Cita Rasa <br> Masakan Rumah</h2>
   <p>Didirikan sejak 5491SM, NusaFood adalah restoran yang menyajikan seluruh masakan kuliner di Indonesia. Restoran pertama dengan menu saji masakan otentik lengkap Nusantara pertama di Indonesia, NusaFood berkomitmen untuk menyajikan bahan-bahan premium, resep khas, dan pengalaman makan yang ramah keluarga. Komitmen ini telah menjadi ciri khas merek kami selama lebih dari 5000 tahun SM. yang sukses.</p>
    </div>
</section>
<section class="menu" id="menu">
    <div class="heading">
        <span>Menu Pilihan</span>
        <h2>Masakan Nusantara Terpopuler</h2>
    </div>
    <div class="menu-container">
    <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM tb_menu";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "
        <h2 style='text-align: center; color: red;'>Menu Habis</h3>";
    }
    while ($data = mysqli_fetch_assoc($result)) {
        echo "
       <div class='box'>
            <div class='box-img'>
                <img src='images-menu/$data[foto]' alt='Gambarnya gada' />
            </div>
                <h2>$data[menu]</h2>
                <h3>$data[deskripsi]</h3>
                <span>Rp. $data[harga] </span>
                <a href='pesanan.php' class='bx bx-cart-alt'></a>
        </div>";
        }
    ?>
    </div>
</section>
<section class="services" id="services">
    <div class="services">
        <span class="s-span">Pelayanan</span>
        <h2>We provide Best Quality Dood </h2>
    </div>
    <div class="service-container">
    <div class="s-box">
        <img src="Images/s1.png">
        <h3>Pemesanan</h3>
        <p> Anda bisa memesan makanan kesukaan anda hanya dengan lewat website kami Dan dapat dinikmati dirumah</p> 
        <h6><p>*S&K Berlaku</p></h6>

    </div>
    <div class="s-box">
        <img src="Images/s3.png">
        <h3>Pengemasan</h3>
        <p>Setelah memesan kami akan segera menyiapkan makanan anda</p>

    </div>
    <div class="s-box">
        <img src="Images/s2.png">
        <h3>Pengiriman</h3>
        <p>Mohon menunggu sebentar dan kami akan segera mengirimkan ke alamat sesuai pesanan anda</p>
    </div>
</div>
</section> 

<!-- Add a popup container -->
<div class="popup-container" id="popup-container">
    <div class="popup">
        <h2>Hubungi Kami</h2>
        <form>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="message">Pesan:</label>
            <textarea id="message" name="message"></textarea><br><br>
            <input type="submit" value="Kirim">
        </form>
        <button class="close-btn" id="close-btn">Tutup</button>
    </div>
</div>
<section class="cta" id="kontak">
    <h2>Kami Menyiapkan Makanan Berkualitas <br> Setiap Hari✨</h2>
    <!-- <h3>Punya keluhan?</h3> -->
    <a href="#contact" class="btn" id="contact-btn">Hubungi Kami</a>
</section>

<section id="contact">
    <div class="footer">
        <div class="main">
            <div class="col">
                <h4>Menu Links</h4>
                <ul>
                    <li><a href="#">Home</a>
                     <li><a href="#">Tentang Kami</a>
                     <li><a href="#">Menu</a>
                     <li><a href="#">Pelayanan</a>
                     <li><a href="#">Kontak</a>
                </ul>
            </div>
            <div class="col">
                <h4>Outlet</h4>
                <ul>
                    <li><a href="#contact">Aceh</a>
                     <li><a href="#contact">Jabodetabek</a>
                     <li><a href="#contact">Bali</a>
                     <li><a href="#contact">Bandung</a>
                     <li><a href="#contact">Solo</a>
                     <li><a href="#contact">Surabaya</a>
                     <li><a href="#contact">Malang</a>
                </ul>
            </div>

            <div class="col">
                <h4>Legal</h4>
                <ul>
                    <li><a href="#">About us</a>
                     <li><a href="#">Delivery Information</a>
                     <li><a href="#">Privacy Policy</a>
                     <li><a href="#">Terms & Condition</a>
                </ul>
            </div>
            <div class="col">
                <h4>Hubungi Kami</h4>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>                  
            </div>
        </div>
    </div>
</section>
<script src="JavaScript/Corousel.js"></script>
<script src="JavaScript/DOM.js"></script>
<script src="JavaScript/PopUP.js"></script>
</body>
</html>