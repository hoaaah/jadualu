<?php
$this->breadcrumbs=array(
	'Tfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tfiles', 'url'=>array('index')),
	array('label'=>'Create Tfiles', 'url'=>array('create')),
	array('label'=>'View Tfiles', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tfiles', 'url'=>array('admin')),
);
?>

<h1>Update Tfiles <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>