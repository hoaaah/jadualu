<?php
/* @var $this JadwalController */
/* @var $model JujianSkripsi */

$this->breadcrumbs=array(
	'Jadwal Ujian'=>array('index'),
	($model->id." ".$model->mahasiswa->nama."-".$model->skripsi->judul)=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Manage Jadwal Ujian', 'url'=>array('index')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model, 'penguji1' => $penguji1, 'penguji2' => $penguji2, 'penguji3' => $penguji3)); ?>