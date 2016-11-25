<?php
$this->breadcrumbs=array(
	'Tpengumumen'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Buat Pengumuman', 'url'=>array('create')),
	array('label'=>'Manage Pengumuman', 'url'=>array('admin')),
);
?>

<h1>View Tpengumuman #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created',
		'name',
		'bidang_id',
		'user_id',
	),
)); ?>
