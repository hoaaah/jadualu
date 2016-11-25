<?php
$this->breadcrumbs=array(
	'Tcuti Tahunans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TcutiTahunan', 'url'=>array('index')),
	array('label'=>'Create TcutiTahunan', 'url'=>array('create')),
	array('label'=>'View TcutiTahunan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TcutiTahunan', 'url'=>array('admin')),
);
?>

<h1>Update TcutiTahunan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>