<?php
/* @var $this MahasiswaController */
/* @var $data RefMahasiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelas')); ?>:</b>
	<?php echo CHtml::encode($data->kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('npm')); ?>:</b>
	<?php echo CHtml::encode($data->npm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_kelulusan')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_kelulusan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jurusan_id')); ?>:</b>
	<?php echo CHtml::encode($data->jurusan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instansi')); ?>:</b>
	<?php echo CHtml::encode($data->instansi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::encode($data->nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>