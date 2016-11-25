<?php
/* @var $this JujianSkripsiController */
/* @var $model JujianSkripsi */

$this->breadcrumbs=array(
	'Jujian Skripsis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JujianSkripsi', 'url'=>array('index')),
	array('label'=>'Create JujianSkripsi', 'url'=>array('create')),
	array('label'=>'View JujianSkripsi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JujianSkripsi', 'url'=>array('admin')),
);
?>

<h1>Update JujianSkripsi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>