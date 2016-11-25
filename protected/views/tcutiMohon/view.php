<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Tcuti Mohons'=>array('index'),
	$model->id,
);
/*
$this->menu=array(
	array('label'=>'List TcutiMohon', 'url'=>array('index')),
	array('label'=>'Create TcutiMohon', 'url'=>array('create')),
	array('label'=>'Update TcutiMohon', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TcutiMohon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TcutiMohon', 'url'=>array('admin')),
);*/
?>

<h1>View TcutiMohon #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pegawai_id',
		'cuti_id',
		'thn_cuti',
		'jml_hari',
		'tgl_mulai',
		'tgl_selesai',
		'tgl_aju',
		'alamat',
		'ket',
		'user_id',
	),
)); ?>
