<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Cuti Tahunan'=>array('index'),
	'Input',
);

$this->menu=array(
//	array('label'=>'List TcutiTahunan', 'url'=>array('index')),
//	array('label'=>'Manage TcutiTahunan', 'url'=>array('admin')),
	array('label'=>'Permohonan Cuti', 'url'=>array('TcutiMohon/')),		
	array('label'=>'Izin Cuti', 'url'=>array('TcutiIzin/')),	
	array('label'=>'Saldo Cuti', 'url'=>array('TsaldoCuti/')),		
);
// print_r(Yii::app()->user->returnUrl);
?>

<h1>Input Cuti Tahunan</h1>
<p> Silahkan input jumlah cuti tahunan setelah dikurangi Cuti Bersama. <p>
<p> Masukkan kembali jumlah cuti tahun yang bersangkutan apabila ada perubahan jumlah cuti bersama. <p>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>