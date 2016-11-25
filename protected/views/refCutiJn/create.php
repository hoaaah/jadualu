<?php
$this->breadcrumbs=array(
	'Ref Cuti Jns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RefCutiJn', 'url'=>array('index')),
	array('label'=>'Manage RefCutiJn', 'url'=>array('admin')),
);
?>

<h1>Create RefCutiJn</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>