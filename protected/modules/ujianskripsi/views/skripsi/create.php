<?php
/* @var $this SkripsiController */
/* @var $model Jskripsi */

$this->breadcrumbs=array(
	'Skripsi'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Skripsi', 'url'=>array('index')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>