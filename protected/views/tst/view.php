<?php
$this->breadcrumbs=array(
	'Tsts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tst', 'url'=>array('index')),
	array('label'=>'Create Tst', 'url'=>array('create')),
	array('label'=>'Update Tst', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tst', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tst', 'url'=>array('admin')),
);
?>

<h1>View Tst #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pwk_id',
		'bidang_id',
		'rkt_id',
		'rkt_ur',
		'rkt_thn',
		'disposisi_id',
		'nkpt',
		'nkpt_tgl',
		'objek',
		'objek_id',
		'hal',
		'kp',
		'kp_tgl',
		'hp',
		'tgl_mulai',
		'tgl_selesai',
		'tl1',
		'tgl_tl1',
		'no_st',
		'tl2',
		'tgl_tl2',
		'tl3',
		'tgl_tl3',
		'tgl_st',
		'pembiayaan_penugasan',
		'created',
		'updated',
		'user_id',
		'no_SPD',
		'tgl_spd',
		'spd_rampung',
		'input_siapda',
	),
)); ?>
