<?php
$this->breadcrumbs=array(
	'Tsts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tst', 'url'=>array('index')),
	array('label'=>'Manage Tst', 'url'=>array('admin')),
);
?>

<h1>Create Tst</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>