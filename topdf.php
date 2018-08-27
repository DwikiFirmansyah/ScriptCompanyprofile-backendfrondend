<?php
$judul = $_POST['judul'];
$gambar2 = $_POST['gambar'];
//$gambar = "2.jpg";
$isi = $_POST['isi'];

require_once("dompdf/dompdf_config.inc.php");
 
$html =
  '<html><body>'.
  '<h2>'.$judul.'</h2>'.
  '<h1>'.$gambar2.'</h1>'.
  '<img src="'.$gambar2.'" width="720" alt="" /><br>'.
  '<p>'.$isi.'</p>'.
  '</body></html>';
 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream(''.$judul.'.pdf');
 
?>