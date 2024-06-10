<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");
$html = '<center><h3>Data Penjualan</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Nomor HP</th>
                <th>Tanggal</th>
            </tr>';
$no = 1;
while ($cetak = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $cetak['nama'] . "</td>
                <td>" . $cetak['alamat'] . "</td>
                <td>" . $cetak['makanan'] . "</td>
                <td>" . $cetak['jumlah'] . "</td>
                <td>Rp. " . number_format($transaction['harga']) . "</td>
                <td>" . $cetak['nomor'] . "</td>
                <td>" . $cetak['tanggal'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-penjualan.pdf');
?>
