<?php
/* @var $this MahasiswaController */
/* @var $model RefMahasiswa */

$this->breadcrumbs=array(
	'Manage Mahasiswa'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Mahasiswa', 'url'=>array('index')),
);
?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'nama',
		'kelas',
		'npm',
		'tahun_masuk',
		'tahun_kelulusan',
		'jurusan_id',
		'instansi',
		'contact',
		'nip',
		'created_at',
		'updated_at',
	),
)); ?>
