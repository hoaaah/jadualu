<?php
$this->breadcrumbs=array(
	'Tcuti Tahunans',
);

$this->menu=array(
	array('label'=>'Create TcutiTahunan', 'url'=>array('create')),
	array('label'=>'Manage TcutiTahunan', 'url'=>array('admin')),
);
?>

<h1>Tcuti Tahunans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
