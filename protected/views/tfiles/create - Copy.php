<?php
$this->breadcrumbs=array(
	'Materi Bidang'=>array('index'),
	'Tambah',
);

$this->menu=array(
	array('label'=>'Daftar Materi Bidang', 'url'=>array('index')),
//	array('label'=>'Atur Materi Bidang', 'url'=>array('admin')),
);
?>

<h1>Tambah Materi Bidang</h1>

<?php //  echo $this->renderPartial('_form', array('model'=>$model)); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formUpload',
	'enableAjaxValidation'=>true,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php IF($this->log_pegawai['nip'] == 0){
//			echo CHtml::activeDropDownList($model, 'category_id', CHtml::listData(RefCategory::model()->findAll(), 'id', 'name'));
		  echo CHtml::dropDownList('bidang_id','', 
		 CHtml::listData(RefBidang::model()->findAll(), 'id', 'name'),
		  array(
			'prompt'=>'Pilih Bidang',
			'ajax' => array(
			'type'=>'POST', 
			'url'=>Yii::app()->createUrl('Tfiles/loadcategory'), //or $this->createUrl('loadcities') if '$this' extends CController
			'update'=>'#category_id', //or 'success' => 'function(data){...handle the data in the way you want...}',
		  'data'=>array('bidang_id'=>'js:this.value'),
		  ))); 
			echo CHtml::dropDownList('category_id','', array(), array('prompt'=>'Pilih Kategori'));		  
		}ELSE{
			echo CHtml::activeDropDownList($model, 'category_id', CHtml::listData(RefCategory::model()->findAll(array("condition"=>"bidang_id = ".$this->log_pegawai['bidang_id'])), 'id', 'name'));			
		}
		?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no'); ?>
		<?php echo $form->textField($model,'no',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tentang'); ?>
        <?php echo $form->textArea($model,'tentang') ?>
		<?php echo $form->error($model,'tentang'); ?>        
    </div>  


     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'files'); ?>
        <?php echo $form->fileField($model,'files') ?>
		<?php echo $form->error($model,'files'); ?>        
    </div>  

     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tag'); ?>
        <?php echo $form->textArea($model,'tag') ?>
		<?php echo $form->error($model,'tag'); ?>        
    </div>  

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->