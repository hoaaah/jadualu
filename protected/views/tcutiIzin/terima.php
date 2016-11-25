<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array('Cuti'=>array('/tcutiMohon'),
	'Izin Cuti'=>array('index'),
	'Terima',
);

$this->menu=array(
	array('label'=>'Daftar Izin Cuti', 'url'=>array('index')),
//	array('label'=>'Manage TcutiIzin', 'url'=>array('admin')),
);
?>

<h1>Persetujuan Izin</h1>
<?php
//print_r($list);
echo '<p>Anda akan menyetujui permohonan '.$list['0']['cuti_id'].' atas '.$list['0']['pegawai_id'].' selama '.$list['0']['jml_hari'].' hari tanggal '.date('d/m/Y', strtotime($list['0']['tgl_mulai'])).' s/d '. date('d/m/Y', strtotime($list['0']['tgl_selesai'])).'</p>';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>