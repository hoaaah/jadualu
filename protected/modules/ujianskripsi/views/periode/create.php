<?php
/* @var $this PeriodeController */
/* @var $model Jperiode */

$this->breadcrumbs=array(
	'Jperiodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jperiode', 'url'=>array('index')),
	array('label'=>'Manage Jperiode', 'url'=>array('admin')),
);
?>

<h1>Create Jperiode</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>