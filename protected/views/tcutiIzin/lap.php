<?php
Yii::import('application.extensions.fpdf.*');
require_once("fpdf.php");

$pdf = new fpdf('A4','P','mm');
$pdf->AddPage("P","A4");

/*untuk footer buka */
class PDF extends FPDF
{
function Footer()
{
    // Go to 1.5 cm from bottom
    $pdf->SetXY(65.4,-150);
    // Select Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Print centered page number
 //   $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
	$pdf->MultiCell(135,7,'INI FOOTER', '', 'C', 0);
}
}

/*untuk footer tutup */
$pdf->Image('images/bpkp.jpg',25.4,10,40,20,'','http://www.fpdf.org');

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
/*
$pdf->MultiCell(173,7,'Palembang, '.$tgl_cetak, '', 'R', 0);
*/
$pdf->SetXY(25.4,55);
$pdf->SetFont('Arial','U',14); 
$pdf->MultiCell(173,7,'SURAT IZIN '.strtoupper($list['0']['cuti_id']), '', 'C', 0);
$pdf->SetXY(25.4,60);
$pdf->SetFont('Arial','',12); 
$pdf->MultiCell(173,7,'Nomor: '.$list['0']['nomor'], '', 'C', 0);

$pdf->SetXY(25.4, 80);
$pdf->SetFont('Arial','',12); 
$pdf->MultiCell(173,7,'Diberikan '.$list['0']['cuti_id'].' untuk tahun '.$list['0']['thn_cuti'].' kepada Pegawai Negeri Sipil:', '', 'L', 0);

$pdf->SetXY(25.4, 90);
$pdf->SetFont('Arial','',12); 
$pdf->Cell(45,7,'Nama', '', '', 'L');$pdf->Cell(3,7,': ', '', '', 'L');;$pdf->Cell(40,7, $list['0']['pegawai_id'], '', '', 'L');
$pdf->Ln();
$pdf->SetX(25.4);
$pdf->Cell(45,7,'NIP', '', '', 'L');$pdf->Cell(3,7,': ', '', '', 'L');;$pdf->Cell(40,7,substr($list['0']['NIP'],0,8).' '.substr($list['0']['NIP'],8,6).' '.substr($list['0']['NIP'],14,1).' '.substr($list['0']['NIP'],15,3), '', '', 'L');
$pdf->Ln();
$pdf->SetX(25.4);
$pdf->Cell(45,7,'Pangkat/Gol.Ruang', '', '', 'L');$pdf->Cell(3,7,': ', '', '', 'L');;$pdf->Cell(40,7,$list['0']['pangkat'].' / '.$list['0']['gol'].$list['0']['ruang'], '', '', 'L');
$pdf->Ln();
$pdf->SetX(25.4);
$pdf->Cell(45,7,'Jabatan', '', '', 'L');$pdf->Cell(3,7,': ', '', '', 'L');;$pdf->Cell(40,7,$list['0']['jabatan'], '', '', 'L');
$pdf->Ln();
$pdf->SetX(25.4);
$pdf->Cell(45,7,'Unit Organisasi', '', '', 'L');$pdf->Cell(3,7,': ', '', '', 'L');;$pdf->Cell(40,7,$list['0']['satker'], '', '', 'L');
$pdf->Ln();

$pdf->SetXY(25.4, 128);
$pdf->SetFont('Arial','',12); 
//[0] adalah tahun [1] adalah bulan [2] adalah tanggal
$tm = explode('-',$list['0']['tgl_mulai']);
IF($tm[1] == 1){
	$bm = 'Januari';
}ELSEIF($tm[1] == 2){
	$bm = 'Februari';
}ELSEIF($tm[1] == 3){
	$bm = 'Maret';
}ELSEIF($tm[1] == 4){
	$bm = 'April';
}ELSEIF($tm[1] == 5){
	$bm = 'Mei';
}ELSEIF($tm[1] == 6){
	$bm = 'Juni';
}ELSEIF($tm[1] == 7){
	$bm = 'Juli';
}ELSEIF($tm[1] == 8){
	$bm = 'Agustus';
}ELSEIF($tm[1] == 9){
	$bm = 'September';
}ELSEIF($tm[1] == 10){
	$bm = 'Oktober';
}ELSEIF($tm[1] == 11){
	$bm = 'November';
}ELSEIF($tm[1] == 12){
	$bm = 'Desember';
}
$ts = explode('-',$list['0']['tgl_selesai']);
IF($ts[1] == 1){
	$bs = 'Januari';
}ELSEIF($ts[1] == 2){
	$bs = 'Februari';
}ELSEIF($ts[1] == 3){
	$bs = 'Maret';
}ELSEIF($ts[1] == 4){
	$bs = 'April';
}ELSEIF($ts[1] == 5){
	$bs = 'Mei';
}ELSEIF($ts[1] == 6){
	$bs = 'Juni';
}ELSEIF($ts[1] == 7){
	$bs = 'Juli';
}ELSEIF($ts[1] == 8){
	$bs = 'Agustus';
}ELSEIF($ts[1] == 9){
	$bs = 'September';
}ELSEIF($ts[1] == 10){
	$bs = 'Oktober';
}ELSEIF($ts[1] == 11){
	$bs = 'November';
}ELSEIF($ts[1] == 12){
	$bs = 'Desember';
}
IF($tm[0] == $ts[0] && $tm[1] == $ts[1]){
	$pdf->MultiCell(173,7,'Selama '.$list['0']['jml_hari'].' hari kerja, terhitung mulai tanggal '.$tm[2].' s/d '. $ts[2] .' '. $bs.' '.$ts[0].' dengan ketentuan sebagai berikut:', '', 'L', 0);
}ELSEIF($tm[0] == $ts[0] &&  $tm[1] <> $ts[1]){
	$pdf->MultiCell(173,7,'Selama '.$list['0']['jml_hari'].' hari kerja, terhitung mulai tanggal '.$tm[2].' '. $bm.' s/d '. $ts[2] .' '. $bs.' '.$ts[0].' dengan ketentuan sebagai berikut:', '', 'L', 0);
}ELSE{
	$pdf->MultiCell(173,7,'Selama '.$list['0']['jml_hari'].' hari kerja, terhitung mulai tanggal '.$tm[2].' '. $bm.' '.$tm[0].' s/d '. $ts[2] .' '. $bs.' '.$ts[0].' dengan ketentuan sebagai berikut:', '', 'L', 0);
}

/*	

$pdf->MultiCell(173,7,'Selama '.$list['0']['jml_hari'].' hari kerja, terhitung mulai tanggal '.$tm[3].' '. $bm.' '.$tm[1].' s/d '. $ts[3] .' '. $bs.' '.$ts[1].' dengan ketentuan sebagai berikut:', '', 'L', 0);

$pdf->MultiCell(173,7,'Selama '.$list['0']['jml_hari'].' hari kerja, terhitung mulai tanggal '.date('j M Y', strtotime($list['0']['tgl_mulai'])).' s/d '. date('j M Y', strtotime($list['0']['tgl_selesai'])).' dengan ketentuan sebagai berikut:', '', 'L', 0);
*/

//ketentuan cuti disini bisa berubah tergantung tipe cuti
IF($list['0']['kd_cuti'] == 1){
	$pdf->SetXY(33,143);
	$pdf->MultiCell(8,7,'a. ', '', 'L', 0);
	$pdf->SetXY(39,143);
	$pdf->MultiCell(160.4,7,'Sebelum menjalankan Cuti Tahunan wajib menyerahkan pekerjaannya kepada atasan langsungnya.', '', 'L', 0);

	$pdf->SetXY(33,158);
	$pdf->MultiCell(8,7,'b. ', '', 'L', 0);
	$pdf->SetXY(39,158);
	$pdf->MultiCell(160.4,7,'Setelah selesai menjalankan Cuti Tahunan wajib melaporkan diri kepada atasan langsungnya dan bekerja kembali sebagaimana biasa.', '', 'L', 0);	
	
	$pdf->SetXY(25.4, 173);
	$pdf->MultiCell(173,7,'Demikian Surat Izin '.$list['0']['cuti_id'].' ini dibuat untuk dapat dipergunakan sebagaimana mestinya.', '', 'L', 0);
	$pdf->SetXY(115, 193);	$pdf->MultiCell(70,7,'Palembang, '.$tgl_cetak, '', 'C', 0);
	$pdf->SetXY(120, 198);	$pdf->MultiCell(60,5,$list['0']['jabatan_penandatangan'].',', '', 'C', 0);
	$pdf->SetXY(120, 228);	
	$pdf->MultiCell(60,7,$list['0']['penandatangan'], '', 'C', 0);	
	$pdf->SetXY(120, 233);	
	$pdf->MultiCell(60,7,'NIP '.$list['0']['nip_penandatangan'], '', 'C', 0);	}ELSEIF($list['0']['kd_cuti'] == 6){
	$pdf->SetXY(33,143);
	$pdf->MultiCell(8,7,'a. ', '', 'L', 0);
	$pdf->SetXY(39,143);
	$pdf->MultiCell(160.4,7,'Sebelum menjalankan Cuti Tahunan wajib menyerahkan pekerjaannya kepada atasan langsungnya.', '', 'L', 0);

	$pdf->SetXY(33,158);
	$pdf->MultiCell(8,6,'b. ', '', 'L', 0);
	$pdf->SetXY(39,158);
	$pdf->MultiCell(160.4,6,'Selama menjalankan '.$list['0']['cuti_id'].', tidak berhak atas semua penghasilan dari negara.', '', 'L', 0);	

	$pdf->SetXY(33,170);
	$pdf->MultiCell(8,7,'c. ', '', 'L', 0);
	$pdf->SetXY(39,170);
	$pdf->MultiCell(160.4,7,'Setelah menjalankan '.$list['0']['cuti_id'].' wajib melaporkan diri kepada atasan langsungnya dan bekerja kembali sebagaimana biasa.', '', 'L', 0);	
	
	$pdf->SetXY(25.4, 185);
	$pdf->MultiCell(173,7,'Demikian Surat Izin '.$list['0']['cuti_id'].' ini dibuat untuk dapat dipergunakan sebagaimana mestinya.', '', 'L', 0);

	$pdf->SetXY(120, 200);	
	$pdf->MultiCell(60,7,$list['0']['jabatan_penandatangan'].',', '', 'C', 0);
	$pdf->SetXY(120, 230);	
	$pdf->MultiCell(60,7,$list['0']['penandatangan'], '', 'C', 0);	
	$pdf->SetXY(120, 235);	$pdf->MultiCell(60,7,'NIP '.$list['0']['nip_penandatangan'], '', 'C', 0);	}ELSEIF($list['0']['kd_cuti'] == 2
		|| $list['0']['kd_cuti'] == 3
		|| $list['0']['kd_cuti'] == 4
		|| $list['0']['kd_cuti'] == 5
		){
	$pdf->SetXY(33,143);
	$pdf->MultiCell(8,7,'a. ', '', 'L', 0);
	$pdf->SetXY(39,143);
	$pdf->MultiCell(160.4,7,'Sebelum menjalankan Cuti Tahunan wajib menyerahkan pekerjaannya kepada atasan langsungnya.', '', 'L', 0);

	$pdf->SetXY(33,158);
	$pdf->MultiCell(8,7,'b. ', '', 'L', 0);
	$pdf->SetXY(39,158);
	$pdf->MultiCell(160.4,7,'Selama menjalankan '.$list['0']['cuti_id'].', tidak berhak atas tunjangan jabatan', '', 'L', 0);	

	$pdf->SetXY(33,165);
	$pdf->MultiCell(8,7,'c. ', '', 'L', 0);
	$pdf->SetXY(39,165);
	$pdf->MultiCell(160.4,7,'Setelah menjalankan '.$list['0']['cuti_id'].' wajib melaporkan diri kepada atasan langsungnya dan bekerja kembali sebagaimana biasa.', '', 'L', 0);	
	
	$pdf->SetXY(25.4, 180);
	$pdf->MultiCell(173,7,'Demikian Surat Izin '.$list['0']['cuti_id'].' ini dibuat untuk dapat dipergunakan sebagaimana mestinya.', '', 'L', 0);

	$pdf->SetXY(120, 195);	
	$pdf->MultiCell(60,7,$list['0']['jabatan_penandatangan'].',', '', 'C', 0);
	$pdf->SetXY(120, 225);	
	$pdf->MultiCell(60,7,$list['0']['penandatangan'], '', 'C', 0);	
	$pdf->SetXY(120, 230);	
	$pdf->MultiCell(60,7,'NIP '.$list['0']['nip_penandatangan'], '', 'C', 0);	}ELSE{
	$pdf->SetXY(25.4, 173);
	$pdf->MultiCell(173,7,'ADA YANG SALAH DENGAN DATA IZIN, PERIKSA KEMBALI JENIS CUTI', '', 'L', 0);
}



$pdf->Output();
Yii::app()->end();


 ?>
