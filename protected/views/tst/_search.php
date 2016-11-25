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
		<?php echo $form->label($model,'pwk_id'); ?>
		<?php echo $form->textField($model,'pwk_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bidang_id'); ?>
		<?php echo $form->textField($model,'bidang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rkt_id'); ?>
		<?php echo $form->textField($model,'rkt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rkt_ur'); ?>
		<?php echo $form->textField($model,'rkt_ur',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rkt_thn'); ?>
		<?php echo $form->textField($model,'rkt_thn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disposisi_id'); ?>
		<?php echo $form->textField($model,'disposisi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nkpt'); ?>
		<?php echo $form->textField($model,'nkpt',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nkpt_tgl'); ?>
		<?php echo $form->textField($model,'nkpt_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objek'); ?>
		<?php echo $form->textField($model,'objek',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'objek_id'); ?>
		<?php echo $form->textField($model,'objek_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hal'); ?>
		<?php echo $form->textField($model,'hal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kp'); ?>
		<?php echo $form->textField($model,'kp',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kp_tgl'); ?>
		<?php echo $form->textField($model,'kp_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hp'); ?>
		<?php echo $form->textField($model,'hp',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_mulai'); ?>
		<?php echo $form->textField($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_selesai'); ?>
		<?php echo $form->textField($model,'tgl_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl1'); ?>
		<?php echo $form->textField($model,'tl1',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_tl1'); ?>
		<?php echo $form->textField($model,'tgl_tl1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_st'); ?>
		<?php echo $form->textField($model,'no_st',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl2'); ?>
		<?php echo $form->textField($model,'tl2',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_tl2'); ?>
		<?php echo $form->textField($model,'tgl_tl2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tl3'); ?>
		<?php echo $form->textField($model,'tl3',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_tl3'); ?>
		<?php echo $form->textField($model,'tgl_tl3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_st'); ?>
		<?php echo $form->textField($model,'tgl_st'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pembiayaan_penugasan'); ?>
		<?php echo $form->textField($model,'pembiayaan_penugasan'); ?>
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

	<div class="row">
		<?php echo $form->label($model,'no_SPD'); ?>
		<?php echo $form->textField($model,'no_SPD',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_spd'); ?>
		<?php echo $form->textField($model,'tgl_spd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spd_rampung'); ?>
		<?php echo $form->textField($model,'spd_rampung'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'input_siapda'); ?>
		<?php echo $form->textField($model,'input_siapda'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->