<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Permohonan Cuti'=>array('index'),
	'Histori Cuti',
);

$this->menu=array(
	array('label'=>'Buat Permohonan', 'url'=>array('index')),
//	array('label'=>'Manage Pejabat', 'url'=>array('admin')),
);
?>

<h1>Histori Cuti</h1>

<?php
$i=1;
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
