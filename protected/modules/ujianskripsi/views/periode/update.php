<?php
/* @var $this PeriodeController */
/* @var $model Jperiode */

$this->breadcrumbs=array(
	'Jperiodes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jperiode', 'url'=>array('index')),
	array('label'=>'Create Jperiode', 'url'=>array('create')),
	array('label'=>'View Jperiode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Jperiode', 'url'=>array('admin')),
);
?>

<h1>Update Jperiode <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>