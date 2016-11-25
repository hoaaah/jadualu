<?php
/* @var $this JujianSkripsiController */
/* @var $model JujianSkripsi */

$this->breadcrumbs=array(
	'Jujian Skripsis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JujianSkripsi', 'url'=>array('index')),
	array('label'=>'Manage JujianSkripsi', 'url'=>array('admin')),
);
?>

<h1>Create JujianSkripsi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>