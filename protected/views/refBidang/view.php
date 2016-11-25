<?php
$this->breadcrumbs=array(
	'Ref Bidangs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List RefBidang', 'url'=>array('index')),
	array('label'=>'Create RefBidang', 'url'=>array('create')),
	array('label'=>'Update RefBidang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RefBidang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RefBidang', 'url'=>array('admin')),
);
?>

<h1>View RefBidang #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'keterangan',
	),
)); ?>
