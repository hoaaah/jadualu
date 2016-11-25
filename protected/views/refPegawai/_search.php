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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pangkat'); ?>
		<?php echo $form->textField($model,'pangkat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gol'); ?>
		<?php echo $form->textField($model,'gol',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruang'); ?>
		<?php echo $form->textField($model,'ruang',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satker'); ?>
		<?php echo $form->textField($model,'satker',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bidang_id'); ?>
		<?php echo $form->textField($model,'bidang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subbidang_id'); ?>
		<?php echo $form->textField($model,'subbidang_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'karpeg'); ?>
		<?php echo $form->textField($model,'karpeg',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agama'); ?>
		<?php echo $form->textField($model,'agama',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tmt'); ?>
		<?php echo $form->textField($model,'tmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peran'); ?>
		<?php echo $form->textField($model,'peran',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_ak'); ?>
		<?php echo $form->textField($model,'reg_ak',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendidikan_p'); ?>
		<?php echo $form->textField($model,'pendidikan_p',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendidikan'); ?>
		<?php echo $form->textField($model,'pendidikan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stat'); ?>
		<?php echo $form->textField($model,'stat',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->