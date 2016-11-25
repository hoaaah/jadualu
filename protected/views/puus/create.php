<?php
$this->breadcrumbs=array(
	'Puuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Puus', 'url'=>array('index')),
	array('label'=>'Manage Puus', 'url'=>array('admin')),
);
?>

<h1>Create Puus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>