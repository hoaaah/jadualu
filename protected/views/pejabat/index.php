<?php
$this->breadcrumbs=array(
	'Pejabats',
);

$this->menu=array(
	array('label'=>'Create Pejabat', 'url'=>array('create')),
	array('label'=>'Manage Pejabat', 'url'=>array('admin')),
);
?>

<h1>Pejabats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
