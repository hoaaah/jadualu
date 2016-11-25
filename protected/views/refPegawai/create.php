<?php
$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Pegawai', 'url'=>array('index')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Tambah Pegawai</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ref-pegawai-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pangkat'); ?>
		<?php  echo CHtml::activeDropDownList($model, 'pangkat', CHtml::listData(RefPgr::model()->findAll(),'pangkat',  'ruang', 'gol'), array('empty'=>'Pilih Pangkat')); ?>
		<?php echo $form->error($model,'pangkat'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'gol'); ?>
		<?php echo $form->textField($model,'gol',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'gol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruang'); ?>
		<?php echo $form->textField($model,'ruang',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ruang'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'jabatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'satker'); ?>
		<?php  echo CHtml::activeDropDownList($model, 'satker', CHtml::listData(RefPerwakilan::model()->findAll(), 'name', 'name'), array('empty'=>'Pilih Satker')); ?>
		<?php echo $form->error($model,'satker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_id'); ?>
		<?php  echo CHtml::activeDropDownList($model, 'bidang_id', CHtml::listData(Refbidang::model()->findAll(), 'id', 'name'), array('empty'=>'Pilih Bidang')); ?>
		<?php  echo $form->error($model,'bidang_id'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'subbidang_id'); ?>
		<?php echo $form->textField($model,'subbidang_id'); ?>
		<?php echo $form->error($model,'subbidang_id'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'karpeg'); ?>
		<?php echo $form->textField($model,'karpeg',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'karpeg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo CHtml::activeDropDownList($model, 'sex', array('L' => 'Laki-Laki', 'P' => 'Perempuan'), array('empty'=>'Pilih Jenis Kelamin')); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->textField($model,'agama',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'agama'); ?>
	</div>


     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tmt'); ?>
        <?php 
		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tmt',
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

	<div class="row">
		<?php echo $form->labelEx($model,'peran'); ?>
		<?php  echo CHtml::activeDropDownList($model, 'peran', CHtml::listData(RefPeran::model()->findAll(), 'id', 'name'), array('empty'=>'Pilih Peran')); ?>
		<?php echo $form->error($model,'peran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_ak'); ?>
		<?php echo $form->textField($model,'reg_ak',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'reg_ak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan_p'); ?>
		<?php echo $form->textField($model,'pendidikan_p',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pendidikan_p'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan'); ?>
		<?php  echo CHtml::activeDropDownList($model, 'pendidikan', CHtml::listData(RefPendidikan::model()->findAll(), 'id', 'name'), array('empty'=>'Pendidikan Tertinggi')); ?>
		<?php echo $form->error($model,'pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stat'); ?>
		<?php echo $form->textField($model,'stat',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'stat'); ?>
	</div>

     <div class="row">
        <?php echo CHtml::activeLabelEx($model,'tgl_lahir'); ?>
        <?php 
		 $this->widget('zii.widgets.jui.CJuiDatePicker',
							array(
								'attribute' => 'tgl_lahir',
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

<!--BATAS USER ---------------------------------------------------------------------------------------------->

<!--BATAS USER ---------------------------------------------------------------------------------------------->
    <div class="row submit">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->