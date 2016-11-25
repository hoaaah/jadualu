<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Tcuti Mohons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TcutiMohon', 'url'=>array('index')),
	array('label'=>'Create TcutiMohon', 'url'=>array('create')),
	array('label'=>'View TcutiMohon', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TcutiMohon', 'url'=>array('admin')),
);
?>

<h1>Update TcutiMohon <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>