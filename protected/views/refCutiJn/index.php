<?php
$this->breadcrumbs=array(
	'Ref Cuti Jns',
);

$this->menu=array(
	array('label'=>'Create RefCutiJn', 'url'=>array('create')),
	array('label'=>'Manage RefCutiJn', 'url'=>array('admin')),
);
?>

<h1>Ref Cuti Jns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
