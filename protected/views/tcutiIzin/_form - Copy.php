<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcuti-izin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mohon_id'); ?>
		<?php echo $form->textField($model,'mohon_id'); ?>
		<?php echo $form->error($model,'mohon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appr'); ?>
		<?php echo $form->textField($model,'appr'); ?>
		<?php echo $form->error($model,'appr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catatan'); ?>
		<?php echo $form->textField($model,'catatan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'catatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keputusan'); ?>
		<?php echo $form->textField($model,'keputusan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'keputusan'); ?>
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