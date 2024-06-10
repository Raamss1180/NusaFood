<?php
include '../koneksi.php';

// Periksa apakah parameter id telah diterima melalui metode POST
if (isset($_POST['id'])) {
    // Hindari SQL injection dengan menggunakan prepared statement
    $id = $_POST['id'];
    $query = "DELETE FROM tb_menu WHERE id = ?";

    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Data berhasil dihapus";
        header("Location: menu.php");
    } else {
        echo "Error: Gagal menghapus data";
    }

    // Tutup prepared statement
    $stmt->close();
} else {
    echo "Error: ID Kosong";
}

// Tutup koneksi database
$koneksi->close();
?>