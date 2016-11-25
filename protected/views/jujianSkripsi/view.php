<?php
/* @var $this JujianSkripsiController */
/* @var $model JujianSkripsi */

$this->breadcrumbs=array(
	'Jujian Skripsis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JujianSkripsi', 'url'=>array('index')),
	array('label'=>'Create JujianSkripsi', 'url'=>array('create')),
	array('label'=>'Update JujianSkripsi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JujianSkripsi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JujianSkripsi', 'url'=>array('admin')),
);
?>

<h1>View JujianSkripsi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periode_id',
		'skripsi_id',
		'mahasiswa_id',
		'tanggal_ujian',
		'waktu_ujian',
		'lokasi_ujian',
		'keterangan',
		'kelulusan',
		'nilai_ujian_skripsi',
		'nilai_ujian_kompre',
	),
)); ?>
