<?php
/* @var $this SkripsiController */
/* @var $model Jskripsi */

$this->breadcrumbs=array(
	'Skripsi'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Skripsi', 'url'=>array('index')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>