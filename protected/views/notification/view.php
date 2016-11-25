<?php
/* @var $this NotificationController */
/* @var $model Notification */

$this->breadcrumbs=array(
	'Notifications'=>array('index'),
	$model->id,
);
$this->menu=array(
	array('label'=>'List Notification', 'url'=>array('index')),
	array('label'=>'Create Notification', 'url'=>array('create')),
	array('label'=>'Update Notification', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Notification', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notification', 'url'=>array('admin')),
);
?>
<div class="page-header">
    <h1><?php echo CHtml::encode($model->tag); ?></h1>
    <i>Oleh <?php echo CHtml::encode($model->userid->name).' ('.$model->tgl_mulai.')' ;?> </i>
</div>
<div class="col-lg-12 text-center">
    <div class="panel panel-default">
        <div class="panel-body" align="left">
            <?php echo $model->content ?>
        </div>
    </div>
</div>

