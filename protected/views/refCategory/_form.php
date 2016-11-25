<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ref-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php IF($this->log_pegawai['nip'] == 0) echo $form->labelEx($model,'bidang_id'); ?>
		<?php IF($this->log_pegawai['nip'] == 0)  echo CHtml::activeDropDownList($model, 'bidang_id', CHtml::listData(RefBidang::model()->findAll(), 'id', 'name')); ?>
		<?php IF($this->log_pegawai['nip'] == 0)  echo $form->error($model,'bidang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_urut'); ?>
		<?php echo $form->textField($model,'no_urut'); ?>
		<?php echo $form->error($model,'no_urut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->