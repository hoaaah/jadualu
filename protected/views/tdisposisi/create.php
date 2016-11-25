<?php
$this->breadcrumbs=array(
	'Disposisi'=>array('index'),
	'Surat Masuk',
);

$this->menu=array(
	array('label'=>'Daftar Surat Masuk', 'url'=>array('index')),
//	array('label'=>'Manage Tdisposisi', 'url'=>array('admin')),
);
?>

<h1>Disposisi Surat (Surat Masuk)</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tdisposisi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Field dengan <span class="required">*</span> wajib diisi</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_disposisi'); ?>
		<?php echo CHtml::activeDropDownList($model,'kd_disposisi', array('1'=>'Butuh Balasan', '2' => 'Tidak Perlu Balasan')); ?>        
		<?php echo $form->error($model,'kd_disposisi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_terima'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_terima',
								'language' => 'id',
								'model' => $model,
								//'value'=> date('j-m-Y', date()),
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>        
		<?php echo $form->error($model,'tgl_terima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_surat'); ?>
		<?php echo $form->textField($model,'no_surat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'no_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_id'); ?>
        <?php
			$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
				'name'=>'Tdisposisi[asal_id]',
				'model'=>$model,
				'sourceUrl'=>array('RefPemda/aclist'),
				// additional javascript options for the autocomplete plugin
				'options'=>array(
					'minLength'=>'2',
				),
				'htmlOptions'=>array(
				//	'style'=>'height:20px;',
				),
			));		
		?>         
		<?php echo $form->error($model,'asal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_ur'); ?>
		<?php echo $form->textField($model,'asal_ur',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'asal_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hal'); ?>
		<?php echo $form->textArea($model,'hal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1'); ?>
		<?php // echo $form->textField($model,'tl1',array('size'=>30,'maxlength'=>30)); ?>
        <?php
			$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
				'name'=>'Tdisposisi[tl1]',
				'model'=>$model,
				'sourceUrl'=>array('RefPegawai/aclist'),
				// additional javascript options for the autocomplete plugin
				'options'=>array(
					'minLength'=>'2',
				),
				'htmlOptions'=>array(
				//	'style'=>'height:20px;',
				),
			));		
		?>     
		<?php echo $form->error($model,'tl1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1_ur'); ?>
		<?php echo $form->textField($model,'tl1_ur',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'tl1_ur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1_tgl'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tl1_tgl',
								'language' => 'id',
								'model' => $model,
								//'value'=> date('j-m-Y', date()),
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>        
		<?php echo $form->error($model,'tl1_tgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tl1_tujuan'); ?>
        <?php
			$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
				'name'=>'Tdisposisi[tl1_tujuan]',
				'model'=>$model,
				'sourceUrl'=>array('RefPegawai/aclist'),
				// additional javascript options for the autocomplete plugin
				'options'=>array(
					'minLength'=>'2',
				),
				'htmlOptions'=>array(
				//	'style'=>'height:20px;',
				),
			));		
		?> 
		<?php echo $form->error($model,'tl1_tujuan'); ?>
	</div>

     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'files'); ?>
        <?php echo $form->fileField($model,'files') ?>
		<?php echo $form->error($model,'files'); ?>        
    </div> 

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->