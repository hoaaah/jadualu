<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tfiles-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_id'); ?>
		<?php echo $form->textField($model,'bidang_id'); ?>
		<?php echo $form->error($model,'bidang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_dest'); ?>
		<?php echo $form->textField($model,'user_dest'); ?>
		<?php echo $form->error($model,'user_dest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no'); ?>
		<?php echo $form->textField($model,'no',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tentang'); ?>
		<?php echo $form->textField($model,'tentang',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'tentang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'files'); ?>
		<?php echo $form->textField($model,'files',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'files'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->