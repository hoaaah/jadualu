<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tst-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pwk_id'); ?>
		<?php echo $form->textField($model,'pwk_id'); ?>
		<?php echo $form->error($model,'pwk_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_id'); ?>
		<?php echo $form->textField($model,'bidang_id'); ?>
		<?php echo $form->error($model,'bidang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rkt_id'); ?>
		<?php echo $form->textField($model,'rkt_id'); ?>
		<?php echo $form->error($model,'rkt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rkt_ur'); ?>
		<?php echo $form->textField($model,'rkt_ur',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'rkt_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rkt_thn'); ?>
		<?php echo $form->textField($model,'rkt_thn'); ?>
		<?php echo $form->error($model,'rkt_thn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disposisi_id'); ?>
		<?php echo $form->textField($model,'disposisi_id'); ?>
		<?php echo $form->error($model,'disposisi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nkpt'); ?>
		<?php echo $form->textField($model,'nkpt',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nkpt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nkpt_tgl'); ?>
		<?php echo $form->textField($model,'nkpt_tgl'); ?>
		<?php echo $form->error($model,'nkpt_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objek'); ?>
		<?php echo $form->textField($model,'objek',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'objek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'objek_id'); ?>
		<?php echo $form->textField($model,'objek_id'); ?>
		<?php echo $form->error($model,'objek_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hal'); ?>
		<?php echo $form->textField($model,'hal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kp'); ?>
		<?php echo $form->textField($model,'kp',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'kp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kp_tgl'); ?>
		<?php echo $form->textField($model,'kp_tgl'); ?>
		<?php echo $form->error($model,'kp_tgl'); ?>
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
		<?php echo $form->labelEx($model,'tl1'); ?>
		<?php echo $form->textField($model,'tl1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_tl1'); ?>
		<?php echo $form->textField($model,'tgl_tl1'); ?>
		<?php echo $form->error($model,'tgl_tl1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_st'); ?>
		<?php echo $form->textField($model,'no_st',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'no_st'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl2'); ?>
		<?php echo $form->textField($model,'tl2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_tl2'); ?>
		<?php echo $form->textField($model,'tgl_tl2'); ?>
		<?php echo $form->error($model,'tgl_tl2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl3'); ?>
		<?php echo $form->textField($model,'tl3',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tl3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_tl3'); ?>
		<?php echo $form->textField($model,'tgl_tl3'); ?>
		<?php echo $form->error($model,'tgl_tl3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_st'); ?>
		<?php echo $form->textField($model,'tgl_st'); ?>
		<?php echo $form->error($model,'tgl_st'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembiayaan_penugasan'); ?>
		<?php echo $form->textField($model,'pembiayaan_penugasan'); ?>
		<?php echo $form->error($model,'pembiayaan_penugasan'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'no_SPD'); ?>
		<?php echo $form->textField($model,'no_SPD',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'no_SPD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_spd'); ?>
		<?php echo $form->textField($model,'tgl_spd'); ?>
		<?php echo $form->error($model,'tgl_spd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spd_rampung'); ?>
		<?php echo $form->textField($model,'spd_rampung'); ?>
		<?php echo $form->error($model,'spd_rampung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'input_siapda'); ?>
		<?php echo $form->textField($model,'input_siapda'); ?>
		<?php echo $form->error($model,'input_siapda'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->