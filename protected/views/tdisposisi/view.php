<?php
$this->breadcrumbs=array(
	'Tdisposisis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tdisposisi', 'url'=>array('index')),
	array('label'=>'Create Tdisposisi', 'url'=>array('create')),
	array('label'=>'Update Tdisposisi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tdisposisi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tdisposisi', 'url'=>array('admin')),
);
?>

<h1>View Tdisposisi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'kd_disposisi',
		'tgl_terima',
		'no_surat',
		'asal_id',
		'asal_ur',
		'hal',
		'lampiran',
		'tl1',
		'tl1_ur',
		'tl1_tgl',
		'tl1_tujuan',
		'tl2',
		'tl2_ur',
		'tl2_tgl',
		'tl2_tujuan',
		'tl3',
		'tl3_ur',
		'tl3_tgl',
		'tl3_tujuan',
		'tl_final',
		'tlg_tl_final',
		'files',
		'created',
		'updated',
		'user_id',
	),
)); ?>
