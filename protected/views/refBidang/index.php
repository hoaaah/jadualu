<?php
$this->breadcrumbs=array(
	'Ref Bidangs',
);

$this->menu=array(
	array('label'=>'Create RefBidang', 'url'=>array('create')),
	array('label'=>'Manage RefBidang', 'url'=>array('admin')),
);
?>

<h1>Ref Bidangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
