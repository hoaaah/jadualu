<?php
/* @var $this JadwalController */
/* @var $model JujianSkripsi */

$this->breadcrumbs=array(
	'Manage Ujian Skripsi'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage JujianSkripsi', 'url'=>array('index')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model, 'penguji1' => $penguji1, 'penguji2' => $penguji2, 'penguji3' => $penguji3)); ?>