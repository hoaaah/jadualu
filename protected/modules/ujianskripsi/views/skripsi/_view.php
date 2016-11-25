<?php
/* @var $this SkripsiController */
/* @var $data Jskripsi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_id')); ?>:</b>
	<?php echo CHtml::encode($data->periode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mahasiswa_id')); ?>:</b>
	<?php echo CHtml::encode($data->mahasiswa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bidang_skripsi')); ?>:</b>
	<?php echo CHtml::encode($data->bidang_skripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pengesahan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_pengesahan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosen_materi')); ?>:</b>
	<?php echo CHtml::encode($data->dosen_materi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dosen_teknis')); ?>:</b>
	<?php echo CHtml::encode($data->dosen_teknis); ?>
	<br />

	*/ ?>

</div>