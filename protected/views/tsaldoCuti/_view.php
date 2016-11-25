<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_pegawai_id')); ?>:</b>
	<?php echo CHtml::encode($data->ref_pegawai_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saldo_cuti')); ?>:</b>
	<?php echo CHtml::encode($data->saldo_cuti); ?>
	<br />


</div>