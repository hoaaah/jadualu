<?php
/* @var $this DosenController */
/* @var $data Dosen */
?>

<div class="view">
    <div class="col-lg-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?></h3>
        </div>
        <div class="panel-body">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::encode($data->nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instansi')); ?>:</b>
	<?php echo CHtml::encode($data->instansi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('degree_titles')); ?>:</b>
	<?php echo CHtml::encode($data->degree_titles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pros')); ?>:</b>
	<?php echo CHtml::encode($data->pros); ?>
	<br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('cons')); ?>:</b>
	<?php echo CHtml::encode($data->cons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spesialisasi')); ?>:</b>
	<?php echo CHtml::encode($data->spesialisasi); ?>
	<br />

	*/ ?>
	</div>
	</div>
    </div>
</div>