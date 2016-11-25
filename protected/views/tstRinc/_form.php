<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tst-rinc-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id'); ?>
		<?php echo $form->error($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pegawai_id'); ?>
		<?php echo $form->textField($model,'pegawai_id',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'pegawai_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peran_id'); ?>
		<?php echo $form->textField($model,'peran_id'); ?>
		<?php echo $form->error($model,'peran_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peran_ur'); ?>
		<?php echo $form->textField($model,'peran_ur',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'peran_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hp'); ?>
		<?php echo $form->textField($model,'hp',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'hp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_mulai'); ?>
		<?php echo $form->textField($model,'tgl_mulai'); ?>
		<?php echo $form->error($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_selesai'); ?>
		<?php echo $form->textField($model,'tgl_selesai'); ?>
		<?php echo $form->error($model,'tgl_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated'); ?>
		<?php echo $form->textField($model,'updated'); ?>
		<?php echo $form->error($model,'updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->