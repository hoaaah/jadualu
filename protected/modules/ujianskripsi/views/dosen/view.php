<?php
/* @var $this DosenController */
/* @var $model Dosen */

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

$this->breadcrumbs=array(
	'Jadwal Dosen'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Daftar Dosen', 'url'=>array('index')),
);
?>

<h1>Jadwal Dosen: <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nip',
		'instansi',
	),
)); ?>

<?php
$gridDataProvider = new CArrayDataProvider($tbl, array('keyField' => 'tanggal_ujian','pagination'=>array('pageSize'=> 10,)));
// $gridColumns
$gridColumns = array(
	array('name'=>'tanggal', 
			'header'=>'Tanggal',
			'htmlOptions'=>['style'=>'width: 150px'], 
			'value' =>'nama_hari(date_format(date_create($data["tanggal"]), "w")).", ".date_format(date_create($data["tanggal"]), "d-m-Y")'),
	array('name'=>'waktu', 'header'=>'Sesi'),
	array('name'=>'ruang', 'header'=>'Ruang'),
	array('name'=>'nama', 'header'=>'Nama Mahasiswa',
		'value' =>'ucwords(strtolower($data["nama"]))'
	),
	array('name'=>'judul', 'header'=>'Judul Skripsi','value' =>'ucwords(strtolower($data["judul"]))'),
	
	
);
$this->widget(
    'booster.widgets.TbGridView',
    array(
        'type' => 'condensed',
        'dataProvider' => $gridDataProvider,
        'template' => "{items}\n{pager}",
        'columns' => $gridColumns,
    )
);
?>