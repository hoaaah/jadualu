<?php
$this->breadcrumbs=array(
	'Kategori materi bidang'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Ubah',
);

$this->menu=array(
	array('label'=>'Daftar Category', 'url'=>array('index')),
	array('label'=>'Tambah Category', 'url'=>array('create')),
	array('label'=>'View Category', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Ubah kategori <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>