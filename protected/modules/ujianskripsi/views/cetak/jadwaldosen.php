<?php
Yii::import('application.extensions.fpdf.*');
require_once("fpdf.php");

function bulan($bulan){
	Switch ($bulan){
	    case 1 : $bulan="Januari";
	        Break;
	    case 2 : $bulan="Februari";
	        Break;
	    case 3 : $bulan="Maret";
	        Break;
	    case 4 : $bulan="April";
	        Break;
	    case 5 : $bulan="Mei";
	        Break;
	    case 6 : $bulan="Juni";
	        Break;
	    case 7 : $bulan="Juli";
	        Break;
	    case 8 : $bulan="Agustus";
	        Break;
	    case 9 : $bulan="September";
	        Break;
	    case 10 : $bulan="Oktober";
	        Break;
	    case 11 : $bulan="November";
	        Break;
	    case 12 : $bulan="Desember";
	        Break;
	    }
	return $bulan;
}


function nama_hari($hari){
	//$hari berformat DATE('w');
    switch($hari){      
        case 0 : {
                    $hari='Minggu';
                }break;
        case 1 : {
                    $hari='Senin';
                }break;
        case 2 : {
                    $hari='Selasa';
                }break;
        case 3 : {
                    $hari='Rabu';
                }break;
        case 4 : {
                    $hari='Kamis';
                }break;
        case 5 : {
                    $hari="Jumat";
                }break;
        case 6 : {
                    $hari='Sabtu';
                }break;
        default: {
                    $hari='UnKnown';
                }break;
    }	
    return $hari;
}

//print_r($data);
$pdf = new fpdf('A4','P','mm');
	
//
$pdf->AddPage("L","A4");
$pdf->SetAutoPageBreak(true, 10);
$pdf->AliasNbPages();
$pdf->setmargins(10,20);

$y = $pdf->GetY();
$pdf->SetXY(10, $y+5);
$pdf->SetFont('Arial','B',16); 
$pdf->MultiCell(277,5,'Jadwal Ujian Skripsi dan Komprehensif Program Studi Diploma IV Akuntansi', '', 'C', 0);
$pdf->Ln();

//bagian untuk tabel
// Column widths
$w = array(8, 30, 25, 25, 25, 30, 35, 10, 85);
/*isi ln dari string
30 = 14
40 = 18
15 = 7
*/
$header = array('No', 'Nama Penguji', 'Tanggal Ujian', 'Waktu Ujian', 'Peran', 'Tempat Ujian', 'Nama Mahasiswa', 'Kelas', 'Judul Skripsi');
$header2 = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
// Header
$pdf->SetX(10);
$pdf->SetFont('Arial','B',10); 
for($i=0;$i<count($header);$i++)
	$pdf->Cell($w[$i],5,$header[$i],1,0,'C');
$pdf->Ln();
for($i=0;$i<count($header2);$i++)
	$pdf->Cell($w[$i],5,$header2[$i],1,0,'C');
$pdf->Ln();

// Data

$pdf->SetFont('Arial','',10); 
$j = 1;
$tanggal = $waktu = $dosen = NULL;
$y = $yst = $y1 = $y2 = $y3 = $y4 = $y5 = $y6 = $y7 = $y8 = $y9 = $pdf->GetY();
$x = 10;
foreach ($data as $data ) {
	$height = array();
	$height[] = $y4 + ((strlen($data['ruang'])/12)*5);
	$height[] = $y5 + ((strlen($data['nama'])/12)*5);
	$height[] = $y6 + ((strlen($data['kelas'])/12)*5);
	$height[] = $y7 + ((strlen($data['judul'])/38)*5);
	$height[] = $y8 + ((strlen($data['dosen'])/12)*5);
	$height[] = $y9 + ((strlen($data['peran'])/12)*5);

	$t = max($height);

	IF($t > 190 ){
		$y = max($y4, $y5, $y6, $y7, $y8, $y9);
		$pdf->Rect($x,$yst, $w['0'], ($y-$yst));
		$pdf->Rect($x+$w['0'],$yst, $w['1'], ($y-$yst));
		$pdf->Rect($x+$w['0']+$w['1'],$yst, $w['2'], ($y-$yst));
		$pdf->Rect($x+$w['0']+$w['1']+$w['2'],$yst, $w['3'], ($y-$yst));
		$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3'],$yst, $w['4'], ($y-$yst));
		$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4'],$yst, $w['5'], ($y-$yst));
		$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4']+$w['5'],$yst, $w['6'], ($y-$yst));
		$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4']+$w['5']+$w['6'],$yst, $w['7'], ($y-$yst));
		$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4']+$w['5']+$w['6']+$w['7'],$yst, $w['8'], ($y-$yst));
		$pdf->AddPage("L","A4");
		$w = array(8, 30, 25, 25, 25, 30, 35, 10, 85);
		/*isi ln dari string
		30 = 14
		40 = 18
		15 = 7
		*/
		$header = array('No', 'Nama Penguji', 'Tanggal Ujian', 'Waktu Ujian', 'Peran', 'Tempat Ujian', 'Nama Mahasiswa', 'Kelas', 'Judul Skripsi');
		$header2 = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
		// Header
		$pdf->SetX(10);
		$pdf->SetFont('Arial','B',10); 
		for($i=0;$i<count($header);$i++)
			$pdf->Cell($w[$i],5,$header[$i],1,0,'C');
		$pdf->Ln();
		for($i=0;$i<count($header2);$i++)
			$pdf->Cell($w[$i],5,$header2[$i],1,0,'C');
		$pdf->Ln();

		// Data

		$pdf->SetFont('Arial','',10); 
		$tanggal = $waktu = $npm = NULL;
		$y = $yst = $y1 = $y2 = $y3 = $y4 = $y5 = $y6 = $y7 = $y8 = $y9 = $pdf->GetY();
		$x = 10;
	}



	IF($dosen == $data['dosen']){

		IF($tanggal == $data['tanggal']){
			IF($waktu == $data['waktu']){
				$y = max($y4,$y5, $y6, $y7, $y8, $y9);
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['0'], 5, '', '', 'C', 0);
				$x += $w['0'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['1'], 5, '', '', 'L', 0);		
				$x += $w['1'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['2'], 5, '', '', 'C', 0);		
				$x += $w['2'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['3'], 5, '', '', 'C', 0);
				$y4 = $pdf->GetY();		
				$x += $w['3'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['4'], 5, $data['peran'], 'T', 'L', 0);
				$y5 = $pdf->GetY();		
				$x += $w['4'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['5'], 5, $data['ruang'], 'T', 'C', 0);
				$y6 = $pdf->GetY();		
				$x += $w['5'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['6'], 5, $data['nama'], 'T', 'L', 0);
				$y7 = $pdf->GetY();		
				$x += $w['6'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['7'], 5, $data['kelas'], 'T', 'C', 0);
				$y8 = $pdf->GetY();		
				$x += $w['7'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['8'], 5, ucwords(strtolower($data['judul'])), 'T', 'L', 0);
				$y9 = $pdf->GetY();		

				$x = 10;
			}ELSE{
				$y = max($y4,$y5, $y6, $y7, $y8, $y9);
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['0'], 5, '', '', 'C', 0);
				$x += $w['0'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['1'], 5, '', '', 'L', 0);		
				$x += $w['1'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['2'], 5, '', '', 'C', 0);		
				$x += $w['2'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['3'], 5, $data['waktu'], 'T', 'C', 0);
				$y4 = $pdf->GetY();		
				$x += $w['3'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['4'], 5, $data['peran'], 'T', 'L', 0);
				$y5 = $pdf->GetY();		
				$x += $w['4'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['5'], 5, $data['ruang'], 'T', 'C', 0);
				$y6 = $pdf->GetY();		
				$x += $w['5'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['6'], 5, $data['nama'], 'T', 'L', 0);
				$y7 = $pdf->GetY();		
				$x += $w['6'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['7'], 5, $data['kelas'], 'T', 'C', 0);
				$y8 = $pdf->GetY();		
				$x += $w['7'];
				$pdf->SetXY($x, $y);
				$pdf->MultiCell($w['8'], 5, ucwords(strtolower($data['judul'])), 'T', 'L', 0);
				$y9 = $pdf->GetY();		

				$x = 10;			
			}

		}ELSE{

			$y = max($y4,$y5, $y6, $y7, $y8, $y9);
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['0'], 5, '', '', 'C', 0);
			$x += $w['0'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['1'], 5, '', '', 'L', 0);		
			$x += $w['1'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['2'], 5, nama_hari(DATE('w', strtotime($data['tanggal']))).', '.DATE('d-m-Y', strtotime($data['tanggal'])), 'T', 'L', 0);		
			$x += $w['2'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['3'], 5, $data['waktu'], 'T', 'C', 0);
			$y4 = $pdf->GetY();		
			$x += $w['3'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['4'], 5, $data['peran'], 'T', 'L', 0);
			$y5 = $pdf->GetY();		
			$x += $w['4'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['5'], 5, $data['ruang'], 'T', 'C', 0);
			$y6 = $pdf->GetY();		
			$x += $w['5'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['6'], 5, $data['nama'], 'T', 'L', 0);
			$y7 = $pdf->GetY();		
			$x += $w['6'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['7'], 5, $data['kelas'], 'T', 'C', 0);
			$y8 = $pdf->GetY();		
			$x += $w['7'];
			$pdf->SetXY($x, $y);
			$pdf->MultiCell($w['8'], 5, ucwords(strtolower($data['judul'])), 'T', 'L', 0);
			$y9 = $pdf->GetY();		

			$x = 10;

		}


	}ELSE{
		$y = max($y4, $y5, $y6, $y7, $y8, $y9);
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['0'], 5, $j, 'T', 'C', 0);
		$x += $w['0'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['1'], 5, $data['dosen'], 'T', 'L', 0);		
		$x += $w['1'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['2'], 5, nama_hari(DATE('w', strtotime($data['tanggal']))).', '.DATE('d-m-Y', strtotime($data['tanggal'])), 'T', 'L', 0);		
		$x += $w['2'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['3'], 5, $data['waktu'], 'T', 'C', 0);
		$y4 = $pdf->GetY();		
		$x += $w['3'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['4'], 5, $data['peran'], 'T', 'L', 0);
		$y5 = $pdf->GetY();		
		$x += $w['4'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['5'], 5, $data['ruang'], 'T', 'C', 0);
		$y6 = $pdf->GetY();		
		$x += $w['5'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['6'], 5, $data['nama'], 'T', 'L', 0);
		$y7 = $pdf->GetY();		
		$x += $w['6'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['7'], 5, $data['kelas'], 'T', 'C', 0);
		$y8 = $pdf->GetY();		
		$x += $w['7'];
		$pdf->SetXY($x, $y);
		$pdf->MultiCell($w['8'], 5, ucwords(strtolower($data['judul'])), 'T', 'L', 0);
		$y9 = $pdf->GetY();		

		$x = 10;
		$j++;
	}
	$dosen = $data['dosen'];
	$waktu = $data['waktu'];
	$tanggal = $data['tanggal'];
	
}

//Rect terakhir
$y = max($y4, $y5, $y6, $y7, $y8, $y9);
$pdf->Rect($x,$yst, $w['0'], ($y-$yst));
$pdf->Rect($x+$w['0'],$yst, $w['1'], ($y-$yst));
$pdf->Rect($x+$w['0']+$w['1'],$yst, $w['2'], ($y-$yst));
$pdf->Rect($x+$w['0']+$w['1']+$w['2'],$yst, $w['3'], ($y-$yst));
$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3'],$yst, $w['4'], ($y-$yst));
$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4'],$yst, $w['5'], ($y-$yst));
$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4']+$w['5'],$yst, $w['6'], ($y-$yst));
$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4']+$w['5']+$w['6'],$yst, $w['7'], ($y-$yst));
$pdf->Rect($x+$w['0']+$w['1']+$w['2']+$w['3']+$w['4']+$w['5']+$w['6']+$w['7'],$yst, $w['8'], ($y-$yst));
/*
// Closing line
$pdf->Ln();
$pdf->SetX(10);
$pdf->Cell(array_sum($w),0,'','T');
*/
	

//Untuk mengakhiri dokumen pdf, dan mengirip dokumen ke output
$pdf->Output();
exit;
?>