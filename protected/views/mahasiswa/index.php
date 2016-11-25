<?php
/* @var $this MahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ref Mahasiswas',
);

$this->menu=array(
	array('label'=>'Create RefMahasiswa', 'url'=>array('create')),
	array('label'=>'Manage RefMahasiswa', 'url'=>array('admin')),
);
?>

<h1>Ref Mahasiswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
