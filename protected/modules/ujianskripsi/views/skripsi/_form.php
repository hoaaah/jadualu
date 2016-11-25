<?php
/* @var $this SkripsiController */
/* @var $model Jskripsi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jskripsi-form',
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
	    <div class="col-sm-6">		
		<?php echo CHtml::activeDropDownList($model, 'periode_id', CHtml::listData(Jperiode::model()->findAll(), 'id', 'periode'),['class' => 'form-control', 'empty' => 'Periode', 'placeholder' => 'Periode']);?>
		<?php echo $form->error($model,'periode_id'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mahasiswa_id',['class' => 'col-sm-2 control-label']); ?>
	    <div class="col-sm-6">	
		<?php echo CHtml::activeDropDownList($model, 'mahasiswa_id', CHtml::listData(RefMahasiswa::model()->findAll(), 'id', 'npm'),['class' => 'form-control', 'empty' => 'NPM', 'placeholder' => 'Periode']);?>
		<?php echo $form->error($model,'mahasiswa_id'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_skripsi',['class' => 'col-sm-2 control-label']); ?>
	    <div class="col-sm-6">	
		<?php echo CHtml::activeDropDownList($model, 'bidang_skripsi', CHtml::listData(Puus::model()->findAll(), 'id', 'name'),['class' => 'form-control', 'placeholder' => 'Periode', 'empty' => 'Bidang Skripsi']);?>
		<?php echo $form->error($model,'bidang_skripsi'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul',['class' => 'col-sm-2 control-label']); ?>
	    <div class="col-sm-6">	
		<?php echo $form->textArea($model,'judul',array('class' => 'form-control', 'placeholder' => 'Periode', 'rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'judul'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun',['class' => 'col-sm-2 control-label']); ?>
	    <div class="col-sm-6">	
		<?php echo $form->textField($model,'tahun',array('class' => 'form-control', 'placeholder' => 'Periode', 'size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tahun'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_pengesahan',['class' => 'col-sm-2 control-label']); ?>
	    <div class="col-sm-6">	
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tanggal_pengesahan',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'yy-mm-dd',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'form-control'),)
							); ?> 		
		<?php echo $form->error($model,'tanggal_pengesahan'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosen_materi',['class' => 'col-sm-2 control-label']); ?>
	    <div class="col-sm-6">	
		<?php echo CHtml::activeDropDownList($model, 'dosen_materi', CHtml::listData(Dosen::model()->findAll(), 'id', 'name'),['class' => 'form-control', 'empty' => 'Dosen Pembimbing Materi', 'placeholder' => 'Periode']);?>
		<?php echo $form->error($model,'dosen_materi'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dosen_teknis',['class' => 'col-sm-2 control-label']); ?>
	    <div class="col-sm-6">	
		<?php echo CHtml::activeDropDownList($model, 'dosen_teknis', CHtml::listData(Dosen::model()->findAll(), 'id', 'name'),['class' => 'form-control', 'empty' => 'Dosen Pembimbing Teknis', 'placeholder' => 'Periode']);?>
		<?php echo $form->error($model,'dosen_teknis'); ?>
		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->