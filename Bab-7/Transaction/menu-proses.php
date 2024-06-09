<?php
include '../koneksi.php';

function upload() {
    $namaFile = $_FILES['foto']['name'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'menu-transaksi.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                // window.location = 'menu-transaksi.php';
            </script>
        ";

        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, '../images-menu/' . $namaFileBaru);
    return $namaFileBaru;

}

if (isset($_POST['simpan'])) {
    $menu = $_POST['menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $foto = upload();

    if(!$foto) {
        return false;
    }
    var_dump($menu, $deskripsi, $harga, $foto);

    if (empty($menu) || empty($deskripsi) || empty($harga) || empty($foto)) {
        echo "
            <script>
                alert('Masih Ada Data Yang Belum Anda Isi!');
                window.location = 'menu-transaksi.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_menu (menu, deskripsi, harga, foto) 
                VALUES ('$menu', '$deskripsi', '$harga', '$foto')";
        
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
    $id   = $_POST['id'];
    $menu = $_POST['menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $fotoSblm = $_POST['fotoSblm'];

    // cek apakah user pilih gambar atau tidak
    if($_FILES['foto']['error']) {
        $foto = $fotoSblm;
    }else {
        // foto lama akan dihapus dan diganti foto baru
        unlink('../images-menu/' . $fotoSblm);
        $foto = upload();
    }

    $sql = "UPDATE tb_menu SET 
            menu = '$menu',
            deskripsi = '$deskripsi',
            harga = '$harga',
            foto = '$foto'
            WHERE id = '$id'";

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