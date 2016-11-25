<?php
$this->breadcrumbs=array(
	'Puuses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Puus', 'url'=>array('index')),
	array('label'=>'Create Puus', 'url'=>array('create')),
	array('label'=>'View Puus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Puus', 'url'=>array('admin')),
);
?>

<h1>Update Puus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>