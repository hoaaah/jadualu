<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array('Cuti'=>array('/tcutiMohon'),
	'Saldo Cuti'=>array('index'),
	'Tambah',
);

$this->menu=array(
//	array('label'=>'List TsaldoCuti', 'url'=>array('index')),
	array('label'=>'Daftar Saldo Cuti', 'url'=>array('index')),
);
?>

<h1>Tambah Saldo Cuti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>