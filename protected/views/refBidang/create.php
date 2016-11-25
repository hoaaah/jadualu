<?php
$this->breadcrumbs=array(
	'Ref Bidangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RefBidang', 'url'=>array('index')),
	array('label'=>'Manage RefBidang', 'url'=>array('admin')),
);
?>

<h1>Create RefBidang</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>