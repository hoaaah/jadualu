<?php
$this->breadcrumbs=array(
	'Tst Rincs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TstRinc', 'url'=>array('index')),
	array('label'=>'Manage TstRinc', 'url'=>array('admin')),
);
?>

<h1>Create TstRinc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>