<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Izin Cuti'=>array('index'),
//	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
//	array('label'=>'List TcutiIzin', 'url'=>array('index')),
//	array('label'=>'Create TcutiIzin', 'url'=>array('create')),
//	array('label'=>'View TcutiIzin', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage TcutiIzin', 'url'=>array('admin')),
	array('label'=>'Izin Cuti', 'url'=>array('index')),	
	array('label'=>'Delete', 'url'=>array('delete', 'id'=>$model->id)),
);
?>

<h1>Ubah data realisasi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>