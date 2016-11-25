<?php
$this->breadcrumbs=array(
	'Pejabats'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Pejabat', 'url'=>array('index')),
	array('label'=>'Create Pejabat', 'url'=>array('create')),
	array('label'=>'Update Pejabat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pejabat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pejabat', 'url'=>array('admin')),
);
?>

<h1>View Pejabat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tahun',
		'name',
		'NIP',
		'jabatan',
		'pegawai_id',
	),
)); ?>
