<?php
$this->breadcrumbs=array(
	'Tdisposisis',
);

$this->menu=array(
	array('label'=>'Create Tdisposisi', 'url'=>array('create')),
	array('label'=>'Manage Tdisposisi', 'url'=>array('admin')),
);
?>

<h1>Tdisposisis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
