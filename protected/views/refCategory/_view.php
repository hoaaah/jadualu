<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bidang_id')); ?>:</b>
	<?php echo CHtml::encode($data->bidang_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_urut')); ?>:</b>
	<?php echo CHtml::encode($data->no_urut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>