<?php
$this->breadcrumbs=array(
	'Tsts',
);

$this->menu=array(
	array('label'=>'Create Tst', 'url'=>array('create')),
	array('label'=>'Manage Tst', 'url'=>array('admin')),
);
?>

<h1>Tsts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
