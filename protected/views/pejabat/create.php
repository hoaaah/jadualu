<?php
$this->breadcrumbs=array(
	'Pejabats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pejabat', 'url'=>array('index')),
	array('label'=>'Manage Pejabat', 'url'=>array('admin')),
);
?>

<h1>Create Pejabat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>