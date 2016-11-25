<?php
/* @var $this UjianController */
/* @var $data JujianSkripsi */
?>

<div class="view">
    <div class="panel panel-green">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo CHtml::link(CHtml::encode($data->mahasiswa->nama).' - '.CHtml::encode($data->mahasiswa->npm), array('view', 'id'=>$data->id)); ?></h3>
        </div>
        <div class="panel-body">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_id')); ?>:</b>
	<?php echo CHtml::encode($data->periode->periode); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('mahasiswa_id')); ?>:</b>
	<?php echo CHtml::encode($data->mahasiswa->nama.' ('.$data->mahasiswa->npm.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skripsi_id')); ?>:</b>
	<?php echo CHtml::encode($data->skripsi->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_ujian')); ?>:</b>
	<?php echo CHtml::encode(nama_hari(date('w', strtotime($data->tanggalUjian->tanggal))).', '.date('d', strtotime($data->tanggalUjian->tanggal)).' '.bulan(date('m', strtotime($data->tanggalUjian->tanggal))).' '.date('Y', strtotime($data->tanggalUjian->tanggal)).' (Tahap '.$data->tanggalUjian->tahap.')'); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi_ujian')); ?>:</b>
	<?php // echo CHtml::encode($data->lokasiUjian->ruang->kelas); ?>
	<br />

	<?php /*
	<b><?php // echo CHtml::encode($data->getAttributeLabel('waktu_ujian')); ?>:</b>
	<?php // echo CHtml::encode($data->waktu_ujian); ?>
	<br />

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
    </div>
</div>