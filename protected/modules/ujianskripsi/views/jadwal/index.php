<?php
/* @var $this JadwalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jujian Skripsis',
);

$this->menu=array(
	array('label'=>'Create JujianSkripsi', 'url'=>array('create')),
	array('label'=>'Manage JujianSkripsi', 'url'=>array('admin')),
);
?>

<h1>Jujian Skripsis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
