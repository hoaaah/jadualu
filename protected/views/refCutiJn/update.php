<?php
$this->breadcrumbs=array(
	'Ref Cuti Jns'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RefCutiJn', 'url'=>array('index')),
	array('label'=>'Create RefCutiJn', 'url'=>array('create')),
	array('label'=>'View RefCutiJn', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RefCutiJn', 'url'=>array('admin')),
);
?>

<h1>Update RefCutiJn <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>