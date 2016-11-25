<?php
/* @var $this DosenController */
/* @var $model Dosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dosen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree_titles'); ?>
		<?php echo $form->textField($model,'degree_titles',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'degree_titles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'instansi'); ?>
		<?php echo $form->textField($model,'instansi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'instansi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pros'); ?>
		<?php echo $form->textField($model,'pros',array('size'=>60,'maxlength'=>10000)); ?>
		<?php echo $form->error($model,'pros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cons'); ?>
		<?php echo $form->textField($model,'cons',array('size'=>60,'maxlength'=>10000)); ?>
		<?php echo $form->error($model,'cons'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spesialisasi'); ?>
		<?php echo $form->textField($model,'spesialisasi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'spesialisasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->