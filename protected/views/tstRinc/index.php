<?php
$this->breadcrumbs=array(
	'Tst Rincs',
);

$this->menu=array(
	array('label'=>'Create TstRinc', 'url'=>array('create')),
	array('label'=>'Manage TstRinc', 'url'=>array('admin')),
);
?>

<h1>Tst Rincs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
