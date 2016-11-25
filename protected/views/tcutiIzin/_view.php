<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mohon_id')); ?>:</b>
	<?php echo CHtml::encode($data->mohon_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appr')); ?>:</b>
	<?php echo CHtml::encode($data->appr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keputusan')); ?>:</b>
	<?php echo CHtml::encode($data->keputusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>