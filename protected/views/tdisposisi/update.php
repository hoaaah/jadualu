<?php
$this->breadcrumbs=array(
	'Tdisposisis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tdisposisi', 'url'=>array('index')),
	array('label'=>'Create Tdisposisi', 'url'=>array('create')),
	array('label'=>'View Tdisposisi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tdisposisi', 'url'=>array('admin')),
);
?>

<h1>Update Tdisposisi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>