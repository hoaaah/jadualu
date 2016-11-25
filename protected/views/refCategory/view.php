<?php
$this->breadcrumbs=array(
	'Kategori Materi Bidang'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Daftar Kategori', 'url'=>array('index')),
	array('label'=>'Tambah kategori', 'url'=>array('create')),
	array('label'=>'Ubah', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete kategori', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Kenaaaapaaa?')),
);
?>

<h1>View Kategori #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bidang_id',
		'no_urut',
		'name',
	),
)); ?>
