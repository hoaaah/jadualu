<?php
$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Pegawai', 'url'=>array('create')),
	array('label'=>'View Pegawai', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Ubah Pegawai <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>