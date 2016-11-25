<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcuti-izin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nomor'); ?>
		<?php echo $form->textField($model,'nomor',array('size'=>60)); ?>
		<?php echo $form->error($model,'nomor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_hari'); ?>
		<?php echo $form->textField($model,'jml_hari'); ?>
		<?php echo $form->error($model,'jml_hari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan'); ?>
		<?php echo $form->error($model,'catatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keputusan'); ?>
		<?php echo $form->textField($model,'keputusan',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'keputusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan_penandatangan'); ?>
		<?php echo $form->textField($model,'jabatan_penandatangan',array('size'=>60)); ?>
		<?php echo $form->error($model,'jabatan_penandatangan'); ?>
	</div>
   
   	<div class="row">
		<?php echo $form->labelEx($model,'penandatangan'); ?>
		<?php echo $form->textField($model,'penandatangan',array('size'=>60)); ?>
		<?php echo $form->error($model,'penandatangan'); ?>
	</div>
    
   	<div class="row">
		<?php echo $form->labelEx($model,'nip_penandatangan'); ?>
		<?php echo $form->textField($model,'nip_penandatangan',array('size'=>60)); ?>
		<?php echo $form->error($model,'nip_penandatangan'); ?>
	</div>    

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Setuju' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->