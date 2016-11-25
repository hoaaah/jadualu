<?php
/* @var $this SkripsiController */
/* @var $model Jskripsi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periode_id'); ?>
		<?php echo $form->textField($model,'periode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mahasiswa_id'); ?>
		<?php echo $form->textField($model,'mahasiswa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bidang_skripsi'); ?>
		<?php echo $form->textField($model,'bidang_skripsi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textArea($model,'judul',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_pengesahan'); ?>
		<?php echo $form->textField($model,'tanggal_pengesahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dosen_materi'); ?>
		<?php echo $form->textField($model,'dosen_materi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dosen_teknis'); ?>
		<?php echo $form->textField($model,'dosen_teknis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->