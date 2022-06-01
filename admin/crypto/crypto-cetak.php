<?php
include('../../koneksi.php');
require '../../vendor/autoload.php';

use Dompdf\Dompdf;
$query = mysqli_query($koneksi, "select * from tb_crypto");
$dompdf = new Dompdf();
$html = '<center><h3>Daftar Crypto Item</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
			<tr>
				<th>No</th>
				<th>Crypto Item</th>
				<th>Price</th>
			</tr>';
			$no = 1;
			while ($row = mysqli_fetch_array($query)) {
				$html .= "<tr>
				<td>" . $no . "</td>
				<td>" . $row['name'] . "</td>
				<td>" . $row['price'] . "</td>
				</tr>";
				$no++;
			}
$html .= "</html>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-crypto.pdf');
