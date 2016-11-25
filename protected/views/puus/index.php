<?php
$this->breadcrumbs=array(
	'Puuses',
);

$this->menu=array(
	array('label'=>'Create Puus', 'url'=>array('create')),
	array('label'=>'Manage Puus', 'url'=>array('admin')),
);
?>

<h1>Puuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
