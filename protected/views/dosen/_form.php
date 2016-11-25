<?php
/* @var $this DosenController */
/* @var $model Dosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dosen-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree_titles'); ?>
		<?php echo $form->textField($model,'degree_titles',array('size'=>60,'maxlength'=>100, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'degree_titles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>18,'maxlength'=>18, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'instansi'); ?>
		<?php echo $form->textField($model,'instansi',array('size'=>50,'maxlength'=>50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'instansi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spesialisasi'); ?>
		<?php echo $form->textField($model,'spesialisasi',array('size'=>100,'maxlength'=>100, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'spesialisasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>30,'maxlength'=>30, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pros'); ?>
		<?php $this->widget('application.extensions.TheCKEditor.TheCKEditorWidget',array(
		    'model'=>$model,                # Data-Model (form model)
		    'attribute'=>'pros',         # Attribute in the Data-Model
		    'height'=>'200px',
		    'width'=>'100%',
		    'toolbarSet'=>'Basic',          # EXISTING(!) Toolbar (see: ckeditor.js)
		    'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
		                                    # Path to ckeditor.php
		    'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
		                                    # Relative Path to the Editor (from Web-Root)
		    'css' => Yii::app()->baseUrl.'/css/index.css',
		                                    # Additional Parameters
		) ); ?>  		

		<?php echo $form->error($model,'pros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cons'); ?>
		<?php $this->widget('application.extensions.TheCKEditor.TheCKEditorWidget',array(
		    'model'=>$model,                # Data-Model (form model)
		    'attribute'=>'cons',         # Attribute in the Data-Model
		    'height'=>'200px',
		    'width'=>'100%',
		    'toolbarSet'=>'Basic',          # EXISTING(!) Toolbar (see: ckeditor.js)
		    'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
		                                    # Path to ckeditor.php
		    'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
		                                    # Relative Path to the Editor (from Web-Root)
		    'css' => Yii::app()->baseUrl.'/css/index.css',
		                                    # Additional Parameters
		) ); ?>  		
		<?php echo $form->error($model,'cons'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
