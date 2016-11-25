<?php
$this->breadcrumbs=array(
	'Ref Cuti Jns'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List RefCutiJn', 'url'=>array('index')),
	array('label'=>'Create RefCutiJn', 'url'=>array('create')),
	array('label'=>'Update RefCutiJn', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RefCutiJn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RefCutiJn', 'url'=>array('admin')),
);
?>

<h1>View RefCutiJn #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
