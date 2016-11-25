<?php
$this->breadcrumbs=array(
	'Tst Rincs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TstRinc', 'url'=>array('index')),
	array('label'=>'Create TstRinc', 'url'=>array('create')),
	array('label'=>'View TstRinc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TstRinc', 'url'=>array('admin')),
);
?>

<h1>Update TstRinc <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>