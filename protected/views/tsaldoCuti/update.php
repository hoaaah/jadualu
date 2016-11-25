<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Tsaldo Cutis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TsaldoCuti', 'url'=>array('index')),
	array('label'=>'Create TsaldoCuti', 'url'=>array('create')),
	array('label'=>'View TsaldoCuti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TsaldoCuti', 'url'=>array('admin')),
);
?>

<h1>Update TsaldoCuti <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>