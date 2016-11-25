<?php
$judul ='SIMOKU';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'simoku'=>array('index'),
	'Tambah',
);

$this->menu=array(
//	array('label'=>'List Aturan', 'url'=>array('index')),
//	array('label'=>'Manage Ppud', 'url'=>array('admin')),
);
?>

<h1>Upload Skripsi</h1>
	<p class="note">Harap <span class="required">cek kembali file </span> sebelum mengunggah. Sangat diutamakan halaman pengesahan dan persetujuan yang ditandatangani oleh Dosen Penguji dan Dosen Pembimbing dilampirkan sebagai hasil scan, bukan bagian tanpa tanda tangan.</p>

<div class="form">
<?php // $form=$this->beginWidget('CActiveForm'); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formUpload',
	'enableAjaxValidation'=>true,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
	<p class="note"><span class="required">*</span> Wajib Diisi</p> 
    <?php echo $form->errorSummary($model); ?>
 
    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'puud', array('label' => 'Bidang Skripsi'));
		echo CHtml::activeDropDownList($model, 'puud', CHtml::listData(Puus::model()->findAll(), 'id', 'name'));
		
		//versi lengkap dari mengambil dropdownlist dengan condition dan attributenya
		//echo CHtml::activeDropDownList($model, 'puud', CHtml::listData(Puus::model()->findAll('id=:id',array(':id' => 1 )), 'id', 'name'), array('prompt'=>'--pilih salah satu--'));		
		 ?>                
		<?php echo $form->error($model,'puud'); ?>                                                 
    </div>
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tahun'); ?>
        <?php echo $form->textField($model,'tahun') ?>
		<?php echo $form->error($model,'tahun'); ?>        
    </div>  
    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'no', array('label' => 'Nama dan NPM') ); ?>
        <?php echo $form->textField($model,'nama') ?>
		<?php echo $form->error($model,'nama'); ?>        
        <?php echo $form->textField($model,'no') ?>   
		<?php echo $form->error($model,'no'); ?>             
    </div>	
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tentang'); ?>
        <?php echo $form->textArea($model,'tentang',  array('maxlength' => 500, 'rows' => 2, 'cols' => 100)) ?>
		<?php echo $form->error($model,'tentang'); ?>        
    </div>  
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tag'); ?>
        <?php echo $form->textArea($model,'tag',  array('maxlength' => 1000, 'rows' => 4, 'cols' => 100)) ?>
		<?php echo $form->error($model,'tag'); ?>        
    </div>
	<div class="row">
        <?php echo CHtml::activeLabelEx($model,'files'); ?>
        <?php echo $form->fileField($model,'files') ?>
		<?php echo $form->error($model,'files'); ?>        
    </div>  
    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'pembimbing1', array('label' => 'Dosen Pembimbing') ); ?>
        <?php echo $form->textField($model,'pembimbing1') ?>
		<?php echo $form->error($model,'pembimbing1'); ?>        
        <?php echo $form->textField($model,'pembimbing2') ?>   
		<?php echo $form->error($model,'pembimbing2'); ?>             
    </div>
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'ketua_penguji'); ?>
        <?php echo $form->textField($model,'ketua_penguji') ?>
		<?php echo $form->error($model,'ketua_penguji'); ?>        
    </div>
    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'penguji1', array('label' => 'Anggota Penguji') ); ?>
        <?php echo $form->textField($model,'penguji1') ?>
		<?php echo $form->error($model,'penguji1'); ?>        
        <?php echo $form->textField($model,'penguji2') ?>   
		<?php echo $form->error($model,'penguji2'); ?>             
    </div>   
    <div class="row submit">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/datepickerh.js"></script>