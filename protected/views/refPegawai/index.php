<?php
$this->breadcrumbs=array(
	'Pegawai',
);

$this->menu=array(
	array('label'=>'Tambah Pegawai', 'url'=>array('create')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
