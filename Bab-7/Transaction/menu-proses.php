<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $alamat = $_POST['alamat'];


    if (empty($nama) || empty($menu) || empty($jumlah) || empty($harga) || empty($alamat)) {
        echo "
            <script>
                alert('Masih Ada Data Yang Belum Anda Isi!');
                window.location = 'menu-transaksi.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_menu (nama, menu, jumlah, harga, alamat) 
                VALUES ('$nama', '$menu', '$jumlah', '$harga', '$alamat')";
        
        if (mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Inputan Anda Berhasil');
                    window.location = 'menu.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'menu-transaksi.php';
                </script>
            ";
        }
    }
} elseif (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $menu = $_POST['menu'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE tb_menu SET 
            nama = '$nama',
            menu = '$menu',
            jumlah = '$jumlah',
            harga = '$harga',
            alamat = '$alamat'
            WHERE nama = '$nama'";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'menu.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'menu-proses.php';
            </script>
        ";
    }
}
?>