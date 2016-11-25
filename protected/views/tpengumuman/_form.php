<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tpengumuman-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php IF($this->log_pegawai['nip'] == 0) echo $form->labelEx($model,'bidang_id'); ?>
		<?php IF($this->log_pegawai['nip'] == 0)  echo CHtml::activeDropDownList($model, 'bidang_id', CHtml::listData(Refbidang::model()->findAll(), 'id', 'name'), array('empty'=>'Pilih Untuk Umum')); ?>
		<?php IF($this->log_pegawai['nip'] == 0)  echo $form->error($model,'bidang_id'); ?>
	</div>

     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tgl_mulai'); ?>
        <?php 
		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_mulai',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'yy-mm-dd',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							);
		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_selesai',
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
            </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->