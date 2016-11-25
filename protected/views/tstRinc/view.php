<?php
$this->breadcrumbs=array(
	'Tst Rincs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TstRinc', 'url'=>array('index')),
	array('label'=>'Create TstRinc', 'url'=>array('create')),
	array('label'=>'Update TstRinc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TstRinc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TstRinc', 'url'=>array('admin')),
);
?>

<h1>View TstRinc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'st_id',
		'pegawai_id',
		'peran_id',
		'peran_ur',
		'hp',
		'tgl_mulai',
		'tgl_selesai',
		'created',
		'updated',
		'user_id',
	),
)); ?>
