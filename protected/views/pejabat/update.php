<?php
$this->breadcrumbs=array(
	'Pejabats'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pejabat', 'url'=>array('index')),
	array('label'=>'Create Pejabat', 'url'=>array('create')),
	array('label'=>'View Pejabat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pejabat', 'url'=>array('admin')),
);
?>

<h1>Update Pejabat <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>