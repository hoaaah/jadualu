<?php
/* @var $this LokasiController */
/* @var $model JlokasiUjian */

$this->breadcrumbs=array(
	'Tanggal Ujian'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Lokasi Ujian', 'url'=>array('index')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>