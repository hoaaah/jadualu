<?php
/* @var $this SkripsiController */
/* @var $model Jskripsi */

$this->breadcrumbs=array(
	'Skripsi'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Skripsi', 'url'=>array('index')),
);
?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periode.periode',
		'mahasiswa.npm',
		'mahasiswa.nama',
		'bidang_skripsi',
		'judul',
		'tahun',
		'tanggal_pengesahan',
		'created_at',
		'user_id',
		'dosen_materi',
		'dosen_teknis',
	),
)); ?>
