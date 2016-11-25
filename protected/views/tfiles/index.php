<?php
$this->breadcrumbs=array(
	'Materi Bidang',
);
/*
$this->menu=array(
	array('label'=>'Tambah Materi Bidang', 'url'=>array('create')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
*/
?>

<h1>Tfiles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
