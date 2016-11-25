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
		<?php echo $form->label($model,'pegawai_id'); ?>
		<?php echo $form->textField($model,'pegawai_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuti_id'); ?>
		<?php echo $form->textField($model,'cuti_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thn_cuti'); ?>
		<?php echo $form->textField($model,'thn_cuti'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_hari'); ?>
		<?php echo $form->textField($model,'jml_hari'); ?>
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
		<?php echo $form->label($model,'tgl_aju'); ?>
		<?php echo $form->textField($model,'tgl_aju'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ket'); ?>
		<?php echo $form->textField($model,'ket',array('size'=>60,'maxlength'=>100)); ?>
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