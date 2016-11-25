<?php
$this->breadcrumbs=array(
	'Ppuds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aturan', 'url'=>array('index')),
	array('label'=>'Tambah Aturan', 'url'=>array('create')),
	array('label'=>'View Aturan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ppud', 'url'=>array('admin')),
);
?>

<h1>Update Ppud <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>