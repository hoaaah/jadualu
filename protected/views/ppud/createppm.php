<?php
$judul ='SIMOKU';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Ppuds'=>array('index'),
	'Tambah PPM',
);

$this->menu=array(
	array('label'=>'List Aturan', 'url'=>array('index')),
	array('label'=>'Manage Ppud', 'url'=>array('admin')),
);
?>

<h1>Tambah Data PPM</h1>

<?php # echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php # print_r($puus) ; echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>';
	  #print_r($model); 'postID=:postID', array(':postID'=>10)
 ?>
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
        <?php echo CHtml::activeLabelEx($model,'puud', array('label' => 'Aturan'));
		echo CHtml::activeDropDownList($model, 'puud', CHtml::listData(Puus::model()->findAll(array("condition"=>"id =  19","order"=>"id")), 'id', 'name'));
		
		//versi lengkap dari mengambil dropdownlist dengan condition dan attributenya
		//echo CHtml::activeDropDownList($model, 'puud', CHtml::listData(Puus::model()->findAll('id=:id',array(':id' => 1 )), 'id', 'name'), array('prompt'=>'--pilih salah satu--'));		
		 ?>                
		<?php echo $form->error($model,'puud'); ?>                                                 
    </div>
 <!--    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'puuddetail', array('label' => 'Detail')); ?>
        <?php echo $form->textField($model,'puuddetail', array('prompt'=>'Isi jika PUUD lainnya')) ?>
        <i><span class="required">Isi dengan detail kementrian atau daerah.</span></i>
		<?php echo $form->error($model,'puuddetail'); ?>        
    </div>
 -->
    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'no', array('label' => 'ND & Tahun') ); ?>
        <?php echo $form->textField($model,'no') ?>
		<?php echo $form->error($model,'no'); ?>        
        <?php echo $form->textField($model,'tahun') ?>   
		<?php echo $form->error($model,'tahun'); ?>             
    </div>
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'Judul PPM'); ?>
        <?php echo $form->textArea($model,'tentang') ?>
		<?php echo $form->error($model,'tentang'); ?>        
    </div>  
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'files'); ?>
        <?php echo $form->fileField($model,'files') ?>
		<?php echo $form->error($model,'files'); ?>        
    </div>  
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'Tanggal'); ?>
        <?php # echo $form->textField($model,'tetap_kabkot'); # echo $form->textField($model,'tetap_tanggal')  ;
		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tetap_tanggal',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'yy-mm-dd',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							);
			?>
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tag'); ?>
        <?php echo $form->textArea($model,'tag') ?>
		<?php echo $form->error($model,'tag'); ?>        
    </div>         
    </div>                  
    <div class="row submit">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/datepickerh.js"></script>