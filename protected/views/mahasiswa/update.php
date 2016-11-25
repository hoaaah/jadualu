<?php
/* @var $this MahasiswaController */
/* @var $model RefMahasiswa */

$this->breadcrumbs=array(
	'Manage Mahasiswa'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Mahasiswa', 'url'=>array('index')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>