<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Tsaldo Cutis',
);

$this->menu=array(
	array('label'=>'Create TsaldoCuti', 'url'=>array('create')),
	array('label'=>'Manage TsaldoCuti', 'url'=>array('admin')),
);
?>

<h1>Tsaldo Cutis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
