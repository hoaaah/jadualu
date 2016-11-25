<?php
/* @var $this LokasiController */
/* @var $model JlokasiUjian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jlokasi-ujian-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	            <?php echo $form->labelEx($model,'periode_id',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-4">
	              <?php echo CHtml::activeDropDownList($model, 'periode_id', CHtml::listData(Jperiode::model()->findAll(), 'id', 'periode'),['class' => 'form-control', 'empty' => 'Periode', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($model,'periode_id'); ?>
				</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruang_id',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">
		<?php echo CHtml::activeDropDownList($model, 'ruang_id', CHtml::listData(RKelas::model()->findAll(), 'id', 'kelas'),['class' => 'form-control', 'empty' => 'ruang', 'placeholder' => 'Periode']);?>
		<?php echo $form->error($model,'ruang_id'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-10">
		<?php echo $form->textField($model,'keterangan',array('class' => 'form-control', 'size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
		</div>
	</div>

	<div class="col-sm-12">
		<?php echo CHtml::tag('button', array(
				        'name'=>'btnSubmit',
				        'type'=>'submit',
				        'class' => 'btn btn-warning',
				      ), '<i class="glyphicon glyphicon-log-in"></i> Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->