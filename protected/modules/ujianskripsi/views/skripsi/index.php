<?php
/* @var $this SkripsiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Skripsi'=>array('index'),
);

$this->menu=array(
	array('label'=>'Create Jskripsi', 'url'=>array('create')),
	array('label'=>'Manage Jskripsi', 'url'=>array('admin')),
);
?>

<h1>Jskripsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
