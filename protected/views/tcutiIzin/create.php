<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Tcuti Izins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TcutiIzin', 'url'=>array('index')),
	array('label'=>'Manage TcutiIzin', 'url'=>array('admin')),
);
?>

<h1>Create TcutiIzin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>