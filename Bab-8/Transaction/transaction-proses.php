<?php
include '../koneksi.php';

if (isset($_POST['pesanan'])) { 
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['no_hp'];
    $makanan = $_POST['makanan'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $tanggal = date('Y-m-d');

    $sql = "SELECT harga FROM tb_menu WHERE menu = '$makanan'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
    $harga = $data['harga'];

    // Calculate the total harga
    $total_harga = $harga * $jumlah;

    if (empty($nama) || empty($alamat) || empty($nomor) ||  empty($makanan) || empty($jumlah)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../pesanan.php';
            </script>
        ";
    } else{
        $sql = "INSERT INTO tb_transaksi (nama, alamat, no_hp, makanan, jumlah, harga, tanggal, status)
            VALUES('$nama','$alamat','$nomor', '$makanan', '$jumlah','$total_harga','$tanggal','$status' )";
        if (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Transaction Berhasil');
                window.location = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../pesanan.php';
            </script>
        ";
        }
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['no_hp'];
    $makanan = $_POST['makanan'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $tanggal = date('Y-m-d');

    // Ambil harga dari tabel menu berdasarkan makanan yang dipilih
    $sql = "SELECT harga FROM tb_menu WHERE menu = '$makanan'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
    $harga = $data['harga'];

    // Hitung total harga
    $total_harga = $harga * $jumlah;

    // Validasi input
    if (empty($nama) || empty($alamat) || empty($nomor) || empty($makanan) || empty($jumlah)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'transaction-edit.php';
            </script>
        ";
    } else {
        $sql = "UPDATE tb_transaksi SET 
                nama = '$nama',
                alamat = '$alamat',
                no_hp = '$nomor',
                makanan = '$makanan',
                jumlah = '$jumlah',
                harga = '$total_harga',
                tanggal = '$tanggal'
                WHERE id = '$id'";

        if (mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Customer Berhasil Diubah');
                    window.location = 'transaction.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'transaction-edit.php';
                </script>
            ";
        }
    }
}
?>