<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tsaldo-cuti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_pegawai_id'); ?>
		<?php echo $form->textField($model,'ref_pegawai_id'); ?>
		<?php echo $form->error($model,'ref_pegawai_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saldo_cuti'); ?>
		<?php echo $form->textField($model,'saldo_cuti',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'saldo_cuti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->