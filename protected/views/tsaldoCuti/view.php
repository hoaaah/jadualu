<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Tsaldo Cutis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TsaldoCuti', 'url'=>array('index')),
	array('label'=>'Create TsaldoCuti', 'url'=>array('create')),
	array('label'=>'Update TsaldoCuti', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TsaldoCuti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TsaldoCuti', 'url'=>array('admin')),
);
?>

<h1>View TsaldoCuti #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tahun',
		'ref_pegawai_id',
		'saldo_cuti',
	),
)); ?>
