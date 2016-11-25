<?php
/* @var $this JadwalController */
/* @var $model JujianSkripsi */
/* @var $form CActiveForm */
?>

<div class="container-fluid">
<div class="col-md-12">
	<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'jujian-skripsi-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'periode_id'); ?>
			<?php echo $form->textField($model,'periode_id'); ?>
			<?php echo $form->error($model,'periode_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'skripsi_id'); ?>
			<?php echo $form->textField($model,'skripsi_id'); ?>
			<?php echo $form->error($model,'skripsi_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'mahasiswa_id'); ?>
			<?php echo $form->textField($model,'mahasiswa_id'); ?>
			<?php echo $form->error($model,'mahasiswa_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'tanggal_ujian'); ?>
			<?php echo $form->textField($model,'tanggal_ujian'); ?>
			<?php echo $form->error($model,'tanggal_ujian'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'waktu_ujian'); ?>
			<?php echo $form->textField($model,'waktu_ujian'); ?>
			<?php echo $form->error($model,'waktu_ujian'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'lokasi_ujian'); ?>
			<?php echo $form->textField($model,'lokasi_ujian'); ?>
			<?php echo $form->error($model,'lokasi_ujian'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'keterangan'); ?>
			<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'keterangan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'kelulusan'); ?>
			<?php echo $form->textField($model,'kelulusan'); ?>
			<?php echo $form->error($model,'kelulusan'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nilai_ujian_skripsi'); ?>
			<?php echo $form->textField($model,'nilai_ujian_skripsi',array('size'=>5,'maxlength'=>5)); ?>
			<?php echo $form->error($model,'nilai_ujian_skripsi'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'nilai_ujian_kompre'); ?>
			<?php echo $form->textField($model,'nilai_ujian_kompre',array('size'=>5,'maxlength'=>5)); ?>
			<?php echo $form->error($model,'nilai_ujian_kompre'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>

	<?php $this->endWidget(); ?>

	</div><!-- form -->
</div><!--col-md-->
</div><!--containerfl