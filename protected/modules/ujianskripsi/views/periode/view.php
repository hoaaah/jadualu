<?php
/* @var $this PeriodeController */
/* @var $model Jperiode */

$this->breadcrumbs=array(
	'Jperiodes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Jperiode', 'url'=>array('index')),
	array('label'=>'Create Jperiode', 'url'=>array('create')),
	array('label'=>'Update Jperiode', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Jperiode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jperiode', 'url'=>array('admin')),
);
?>

<h1>View Jperiode #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periode',
		'keterangan',
		'created_at',
		'updated_at',
		'user_id',
	),
)); ?>
