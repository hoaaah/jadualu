<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ppud-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note"><span class="required">*</span> Wajib Diisi</p> 

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php  echo CHtml::activeLabelEx($model,'puud', array('label' => 'Aturan')); ?>
        <?php echo CHtml::activeDropDownList($model, 'puud', CHtml::listData(Puus::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'puud'); ?>
	</div>
     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'puuddetail', array('label' => 'Detail')); ?>
        <?php echo $form->textField($model,'puuddetail', array('prompt'=>'Isi jika PUUD lainnya')) ?>
        <i><span class="required">Isi dengan detail kementrian atau daerah.</span></i>        
		<?php echo $form->error($model,'puuddetail'); ?>        
    </div>
	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'no', array('label' => 'No & Tahun') ); ?>
		<?php echo $form->textField($model,'no',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'no'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>4,'maxlength'=>4)); ?>   
		<?php echo $form->error($model,'tahun'); ?>             
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'tentang'); ?>
		<?php echo $form->textField($model,'tentang',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'tentang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'ditetapkan di');; ?>
		<?php echo $form->textField($model,'tetap_kabkot',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'tetap_kabkot'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tetap_tanggal',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?> 
		<?php echo $form->error($model,'tetap_tanggal'); ?>               
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->