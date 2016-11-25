<?php
$this->breadcrumbs=array(
	'Tsts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tst', 'url'=>array('index')),
	array('label'=>'Create Tst', 'url'=>array('create')),
	array('label'=>'View Tst', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tst', 'url'=>array('admin')),
);
?>

<h1>Update Tst <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>