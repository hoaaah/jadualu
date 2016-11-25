<?php
/* @var $this JadwalController */
/* @var $model JujianSkripsi */
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
	'Manage Jadwal Ujian'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Manage Jadwal Ujian', 'url'=>array('index')),
);
?>

<h1>View JujianSkripsi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periode.periode',
		'skripsi.judul',
		'mahasiswa.nama',
		'mahasiswa.npm',
		'tanggalUjian.tanggal',
		'waktuUjian.name',
		'lokasiUjian.ruang.kelas',
		'keterangan',
		'kelulusan',
		'nilai_ujian_skripsi',
		'nilai_ujian_kompre',
	),
)); ?>
<div class"col-lg-6">
	<div class="panel panel-green">
	    <div class="panel-heading">
	        <h3 class="panel-title">Petugas</h3>
	    </div>
	    <div class="panel-body">
	<?php foreach($duty as $duty): ?>    
			<b><?php echo CHtml::encode($duty->peran->peran); ?>:</b>
			<?php echo CHtml::encode($duty->dosen->name); ?>
			<br />
	<?php endforeach;?>		    
	    </div>
	</div>
</div>