<?php
$this->breadcrumbs=array(
	'Tpengumumen'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tpengumuman', 'url'=>array('index')),
	array('label'=>'Create Tpengumuman', 'url'=>array('create')),
	array('label'=>'View Tpengumuman', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tpengumuman', 'url'=>array('admin')),
);
?>

<h1>Update Tpengumuman <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>