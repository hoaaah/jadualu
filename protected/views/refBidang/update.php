<?php
$this->breadcrumbs=array(
	'Ref Bidangs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RefBidang', 'url'=>array('index')),
	array('label'=>'Create RefBidang', 'url'=>array('create')),
	array('label'=>'View RefBidang', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RefBidang', 'url'=>array('admin')),
);
?>

<h1>Update RefBidang <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>