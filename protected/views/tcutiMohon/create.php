<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Permohonan Cuti'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Cuti', 'url'=>array('view','pegawai_id'=>Yii::app()->session['ref_pegawai']['id'])),
#	array('label'=>'Manage TcutiMohon', 'url'=>array('admin')),
);
?>

<h1>Buat Permohonan Cuti</h1>
<p> Sisa cuti tahunan anda untuk tahun ini adalah <?php echo $sisa_cuti ;?> hari. Tanggal pengajuan cuti pada  <?php echo date('j M Y', strtotime(date('Y-m-d')))?>.<p>
<?php
#print_r(Yii::app()->session['ref_pegawai']['id']);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>