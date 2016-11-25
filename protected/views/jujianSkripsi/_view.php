<?php
/* @var $this JujianSkripsiController */
/* @var $data JujianSkripsi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_id')); ?>:</b>
	<?php echo CHtml::encode($data->periode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skripsi_id')); ?>:</b>
	<?php echo CHtml::encode($data->skripsi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mahasiswa_id')); ?>:</b>
	<?php echo CHtml::encode($data->mahasiswa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_ujian')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_ujian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ujian')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_ujian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi_ujian')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi_ujian); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelulusan')); ?>:</b>
	<?php echo CHtml::encode($data->kelulusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ujian_skripsi')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ujian_skripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_ujian_kompre')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_ujian_kompre); ?>
	<br />

	*/ ?>

</div>