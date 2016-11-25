<?php
/* @var $this LokasiController */
/* @var $model JlokasiUjian */

$this->breadcrumbs=array(
	'Lokasi Ujian'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Lokasi Ujian', 'url'=>array('index')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periode.periode',
		'ruang.kelas',
		'keterangan'
	),
)); ?>
