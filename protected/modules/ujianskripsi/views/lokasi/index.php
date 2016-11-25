<?php
/* @var $this LokasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jlokasi Ujians',
);

$this->menu=array(
	array('label'=>'Create JlokasiUjian', 'url'=>array('create')),
	array('label'=>'Manage JlokasiUjian', 'url'=>array('admin')),
);
?>

<h1>Jlokasi Ujians</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
