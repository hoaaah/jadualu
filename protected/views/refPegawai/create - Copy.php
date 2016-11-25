<?php
$this->breadcrumbs=array(
	'Ref Pegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RefPegawai', 'url'=>array('index')),
	array('label'=>'Manage RefPegawai', 'url'=>array('admin')),
);
?>

<h1>Create RefPegawai</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model1' => $model1)); ?>