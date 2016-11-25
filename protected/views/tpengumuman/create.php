<?php
$this->breadcrumbs=array(
	'Tpengumumen'=>array('index'),
	'Create',
);

$this->menu=array(
//	array('label'=>'List Tpengumuman', 'url'=>array('index')),
);
?>

<h1>Create Tpengumuman</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>