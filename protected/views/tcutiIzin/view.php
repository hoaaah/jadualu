<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Tcuti Izins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TcutiIzin', 'url'=>array('index')),
	array('label'=>'Create TcutiIzin', 'url'=>array('create')),
	array('label'=>'Update TcutiIzin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TcutiIzin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TcutiIzin', 'url'=>array('admin')),
);
?>

<h1>View TcutiIzin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mohon_id',
		'appr',
		'catatan',
		'keputusan',
		'user_id',
	),
)); ?>
