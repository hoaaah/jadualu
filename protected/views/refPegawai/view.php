<?php
$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Daftar Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Pegawai', 'url'=>array('create')),
	array('label'=>'Ubah Pegawai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>View Pegawai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'nip',
		'pangkat',
		'gol',
		'ruang',
		'jabatan',
		'satker',
		'bidang_id',
		'subbidang_id',
		'karpeg',
		'sex',
		'agama',
		'tmt',
		'peran',
		'reg_ak',
		'pendidikan_p',
		'pendidikan',
		'stat',
		'tgl_lahir',
	),
)); ?>
