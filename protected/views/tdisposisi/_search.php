<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_disposisi'); ?>
		<?php echo $form->textField($model,'kd_disposisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_terima'); ?>
		<?php echo $form->textField($model,'tgl_terima'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_surat'); ?>
		<?php echo $form->textField($model,'no_surat',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asal_id'); ?>
		<?php echo $form->textField($model,'asal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asal_ur'); ?>
		<?php echo $form->textField($model,'asal_ur',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hal'); ?>
		<?php echo $form->textField($model,'hal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl1'); ?>
		<?php echo $form->textField($model,'tl1',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl1_ur'); ?>
		<?php echo $form->textField($model,'tl1_ur',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl1_tgl'); ?>
		<?php echo $form->textField($model,'tl1_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl1_tujuan'); ?>
		<?php echo $form->textField($model,'tl1_tujuan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl2'); ?>
		<?php echo $form->textField($model,'tl2',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl2_ur'); ?>
		<?php echo $form->textField($model,'tl2_ur',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl2_tgl'); ?>
		<?php echo $form->textField($model,'tl2_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl2_tujuan'); ?>
		<?php echo $form->textField($model,'tl2_tujuan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl3'); ?>
		<?php echo $form->textField($model,'tl3',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl3_ur'); ?>
		<?php echo $form->textField($model,'tl3_ur',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl3_tgl'); ?>
		<?php echo $form->textField($model,'tl3_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl3_tujuan'); ?>
		<?php echo $form->textField($model,'tl3_tujuan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl_final'); ?>
		<?php echo $form->textField($model,'tl_final',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tlg_tl_final'); ?>
		<?php echo $form->textField($model,'tlg_tl_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'files'); ?>
		<?php echo $form->textField($model,'files',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated'); ?>
		<?php echo $form->textField($model,'updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->