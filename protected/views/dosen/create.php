<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dosen', 'url'=>array('index')),
	array('label'=>'Manage Dosen', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>