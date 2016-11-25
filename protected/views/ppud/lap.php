<?php
Yii::import('application.extensions.fpdf.*');
require_once("fpdf.php");
$pdf = new fpdf('A4','P','mm');
$pdf->Open('Pernyataan_upload.pdf');
$pdf->AddPage("P","A4");

$pdf->Image('images/bpkp.jpg',25.4,10,40,20,'','http://www.belajararief.com');
$pdf->Image('images/simoku_stamp.png',25.4,200,50,30,'','http://www.belajararief.com');

$pdf->SetXY(65.4,10);
$pdf->SetFont('Arial','B',13); 
$pdf->MultiCell(135,7,'BADAN PENGAWASAN KEUANGAN DAN PEMBANGUNAN', '', 'C', 0);
$pdf->SetXY(65.4,15);
$pdf->SetFont('Arial','B',12); 
$pdf->MultiCell(135,7,'PERWAKILAN PROVINSI SUMATERA SELATAN', '', 'C', 0);
$pdf->SetXY(65.4,20);
$pdf->SetFont('Arial','',10); 
$pdf->MultiCell(135,7,'Jalan Bank Raya 2,  Demang Lebar Daun, Palembang 30128', '', 'C', 0);
$pdf->SetXY(65.4,25);
$pdf->SetFont('Arial','',10); 
$pdf->MultiCell(135,7,'Telepon 0711- 311154, 355034  Faksimile 374987', '', 'C', 0);
$pdf->SetXY(65.4,30);
$pdf->SetFont('Arial','',10); 
$pdf->MultiCell(135,7,'E-mail : sumsel@bpkp.go.id', '', 'C', 0);
$pdf->SetXY(25.4,36);
$pdf->SetFont('Arial','',10); 
$pdf->MultiCell(173,7,'', '', 'C', 0);
$pdf->SetLineWidth(0.7);
$pdf->Line(25.4,36,199.1,36);


//ISI 
$pdf->SetXY(25.4,40);
$pdf->SetFont('Arial','',12); 
$pdf->MultiCell(173,7,'Palembang, '.$tgl_cetak, '', 'R', 0);
$pdf->SetXY(25.4,55);
$pdf->MultiCell(173,7,'Dalam rangka mendukung terciptanya transfer of knowledge dalam lingkungan Perwakilan BPKP Provinsi Sumatera Selatan, maka dibutuhkan sebuah wadah informasi sebagai pusat data yang menghimpun informasi dan materi mengenai pengembangan profesi di lingkungan kerja.', '', 'L', 0);

$pdf->SetX(25.4);
$pdf->MultiCell(173,7,'Untuk mendukung hal tersebut saya yang bertanda tangan di bawah ini telah mengupload file berupa materi PPM pada aplikasi SIMOKU dengan rincian sebagai berikut:', '', 'L', 0);
$pdf->Ln();
$pdf->SetX(50);
$pdf->SetFont('Arial','I',12); 
$pdf->MultiCell(150,7,'Nota Dinas '.$list['0']['no'], '', 'L', 0);
$pdf->SetX(50);
$pdf->MultiCell(150,7,'Dengan Materi PPM '.$list['0']['tentang'], '', 'L', 0);
$pdf->SetX(50);
$pdf->MultiCell(150,7,'Dokumen yang diupload '.$list['0']['files'], '', 'L', 0);

$pdf->SetFont('Arial','',12); 
$pdf->Ln();
$pdf->SetX(25.4);
$pdf->MultiCell(173,7,'Demikian surat pernyataan ini dibuat semata-mata untuk mendukung terciptanya transfer of knowledge dalam lingkungan unit kerja saya. Saya menyatakan bertanggung jawab terhadap dokumen yang saya upload tersebut beserta penggunaanya menjadi tanggung jawab user yang mengunduh untuk dapat digunakan dengan bijak.', '', 'L', 0);

//ketentuan cuti disini bisa berubah tergantung tipe cuti

	$pdf->SetXY(120, 188);
	$pdf->MultiCell(60,7,'Pengunggah,', '', 'C', 0);
	$pdf->SetXY(120, 218);
	$pdf->MultiCell(60,7,$list['0']['name'], '', 'C', 0);	
	$pdf->SetXY(120, 223);
	$pdf->MultiCell(60,7,'NIP '.$list['0']['nip'], '', 'C', 0);	


$pdf->Output();
Yii::app()->end();
?>
