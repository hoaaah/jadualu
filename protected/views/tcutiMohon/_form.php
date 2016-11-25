<div class="form">
<?php  IF(Yii::app()->session['group_user']['bidang_id']==1 || Yii::app()->session['group_user']['bidang_id'] == 0): ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcuti-mohon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib Diisi</p> 

	<?php echo $form->errorSummary($model); ?>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'pegawai_id'); ?>
		<?php echo $form->textField($model,'pegawai_id'); ?>
		<?php echo $form->error($model,'pegawai_id'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'cuti_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'cuti_id', CHtml::listData(RefCutiJn::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'cuti_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_hari'); ?>
		<?php echo $form->textField($model,'jml_hari'); ?>
		<?php echo $form->error($model,'jml_hari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_mulai'); ?>
		<?php # echo $form->textField($model,'tgl_mulai'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_mulai',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_selesai'); ?>
		<?php # echo $form->textField($model,'tgl_selesai'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_selesai',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_selesai'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'tgl_aju'); ?>
		<?php # echo $form->textField($model,'tgl_aju'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_aju',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_aju'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket'); ?>
		<?php echo $form->textField($model,'ket',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ket'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'kabag_tu'); ?>
		<?php echo $form->checkBox($model,'kabag_tu',array('value' => 1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'kabag_tu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>


<?php ELSE: ?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcuti-mohon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib Diisi</p> 

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'cuti_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'cuti_id', CHtml::listData(RefCutiJn::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'cuti_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_hari'); ?>
		<?php echo $form->textField($model,'jml_hari'); ?>
		<?php echo $form->error($model,'jml_hari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_mulai'); ?>
		<?php # echo $form->textField($model,'tgl_mulai'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_mulai',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_selesai'); ?>
		<?php # echo $form->textField($model,'tgl_selesai'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_selesai',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_selesai'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'tgl_aju'); ?>
		<?php # echo $form->textField($model,'tgl_aju'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_aju',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_aju'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket'); ?>
		<?php echo $form->textField($model,'ket',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ket'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'kabag_tu'); ?>
		<?php echo $form->checkBox($model,'kabag_tu',array('value' => 1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'kabag_tu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>


<?php  ENDIF ;?>

</div><!-- form -->

<!-- ASLINYA COY, JANGAN DIHAPUS YA!!!
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcuti-mohon-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib Diisi</p> 

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pegawai_id'); ?>
		<?php echo $form->textField($model,'pegawai_id'); ?>
		<?php echo $form->error($model,'pegawai_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cuti_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'cuti_id', CHtml::listData(RefCutiJn::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'cuti_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thn_cuti'); ?>
		<?php echo $form->textField($model,'thn_cuti'); ?>
		<?php echo $form->error($model,'thn_cuti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_hari'); ?>
		<?php echo $form->textField($model,'jml_hari'); ?>
		<?php echo $form->error($model,'jml_hari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_mulai'); ?>
		<?php # echo $form->textField($model,'tgl_mulai'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_mulai',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_selesai'); ?>
		<?php # echo $form->textField($model,'tgl_selesai'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_selesai',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_aju'); ?>
		<?php # echo $form->textField($model,'tgl_aju'); ?>
		<?php 		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_aju',
								'language' => 'id',
								'model' => $model,
								'options' => array(
												'mode' => 'focus',
												'dateFormat' => 'dd-mm-yy',
												'showAnim' => 'slideDown',
											),
								'htmlOptions' => array('size' => 30, 'class' => 'date'),)
							); ?>         
		<?php echo $form->error($model,'tgl_aju'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket'); ?>
		<?php echo $form->textField($model,'ket',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
-->