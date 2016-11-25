<?php
$this->breadcrumbs=array(
	'Tcuti Tahunans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TcutiTahunan', 'url'=>array('index')),
	array('label'=>'Manage TcutiTahunan', 'url'=>array('admin')),
);
?>

<h1>Create TcutiTahunan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>