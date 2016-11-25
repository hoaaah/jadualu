<?php
/* @var $this PeriodeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Periode',
);

$this->menu=array(
	array('label'=>'Create Periode', 'url'=>array('create')),
	array('label'=>'Manage Periode', 'url'=>array('admin')),
);
?>

<h1>Jperiodes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
