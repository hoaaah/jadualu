<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tdisposisi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_disposisi'); ?>
		<?php echo $form->textField($model,'kd_disposisi'); ?>
		<?php echo $form->error($model,'kd_disposisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_terima'); ?>
		<?php echo $form->textField($model,'tgl_terima'); ?>
		<?php echo $form->error($model,'tgl_terima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_surat'); ?>
		<?php echo $form->textField($model,'no_surat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'no_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_id'); ?>
		<?php echo $form->textField($model,'asal_id'); ?>
		<?php echo $form->error($model,'asal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_ur'); ?>
		<?php echo $form->textField($model,'asal_ur',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'asal_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hal'); ?>
		<?php echo $form->textField($model,'hal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1'); ?>
		<?php echo $form->textField($model,'tl1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1_ur'); ?>
		<?php echo $form->textField($model,'tl1_ur',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'tl1_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1_tgl'); ?>
		<?php echo $form->textField($model,'tl1_tgl'); ?>
		<?php echo $form->error($model,'tl1_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1_tujuan'); ?>
		<?php echo $form->textField($model,'tl1_tujuan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl1_tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl2'); ?>
		<?php echo $form->textField($model,'tl2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl2_ur'); ?>
		<?php echo $form->textField($model,'tl2_ur',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'tl2_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl2_tgl'); ?>
		<?php echo $form->textField($model,'tl2_tgl'); ?>
		<?php echo $form->error($model,'tl2_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl2_tujuan'); ?>
		<?php echo $form->textField($model,'tl2_tujuan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl2_tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl3'); ?>
		<?php echo $form->textField($model,'tl3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl3_ur'); ?>
		<?php echo $form->textField($model,'tl3_ur',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'tl3_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl3_tgl'); ?>
		<?php echo $form->textField($model,'tl3_tgl'); ?>
		<?php echo $form->error($model,'tl3_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl3_tujuan'); ?>
		<?php echo $form->textField($model,'tl3_tujuan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl3_tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl_final'); ?>
		<?php echo $form->textField($model,'tl_final',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tlg_tl_final'); ?>
		<?php echo $form->textField($model,'tlg_tl_final'); ?>
		<?php echo $form->error($model,'tlg_tl_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'files'); ?>
		<?php echo $form->textField($model,'files',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'files'); ?>
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