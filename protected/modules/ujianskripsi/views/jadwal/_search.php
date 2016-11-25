<?php
/* @var $this JadwalController */
/* @var $model JujianSkripsi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'periode_id'); ?>
		<?php echo CHtml::activeDropDownList($model, 'periode_id', CHtml::listData(Jperiode::model()->findAll(), 'id', 'periode'),['class' => 'form-control', 'empty' => 'Periode', 'placeholder' => 'Periode']);?>
	</div>

<?php /*	
	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periode_id'); ?>
		<?php echo $form->textField($model,'periode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skripsi_id'); ?>
		<?php echo $form->textField($model,'skripsi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mahasiswa_id'); ?>
		<?php echo $form->textField($model,'mahasiswa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_ujian'); ?>
		<?php echo $form->textField($model,'tanggal_ujian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_ujian'); ?>
		<?php echo $form->textField($model,'waktu_ujian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasi_ujian'); ?>
		<?php echo $form->textField($model,'lokasi_ujian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kelulusan'); ?>
		<?php echo $form->textField($model,'kelulusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_ujian_skripsi'); ?>
		<?php echo $form->textField($model,'nilai_ujian_skripsi',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_ujian_kompre'); ?>
		<?php echo $form->textField($model,'nilai_ujian_kompre',array('size'=>5,'maxlength'=>5)); ?>
	</div>
*/?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->