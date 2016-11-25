<?php
/* @var $this MahasiswaController */
/* @var $model RefMahasiswa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ref-mahasiswa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">		
		<?php echo $form->textField($model,'nama',['class' => 'form-control', 'placeholder' => 'Nama' ,'size'=>60,'maxlength'=>100] ); ?>
		<?php echo $form->error($model,'nama'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelas',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">		
		<?php echo $form->textField($model,'kelas',array('class' => 'form-control', 'placeholder' => 'Kelas' , 'size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'kelas'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'npm',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">		
		<?php echo $form->textField($model,'npm',array('class' => 'form-control', 'placeholder' => 'Nomor Pokok Mahasiswa' , 'size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'npm'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_masuk',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">		
		<?php echo $form->textField($model,'tahun_masuk',array('class' => 'form-control', 'placeholder' => 'Tahun Masuk' ,'size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tahun_masuk'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_kelulusan',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">		
		<?php echo $form->textField($model,'tahun_kelulusan',array('class' => 'form-control', 'placeholder' => 'Tahun Lulus' ,'size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'tahun_kelulusan'); ?>
		</div>
	</div>
<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'jurusan_id',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">		
		<?php echo $form->textField($model,'jurusan_id'); ?>
		<?php echo $form->error($model,'jurusan_id'); ?>
		</div>
	</div>
*/
?>

	<div class="row">
		<?php echo $form->labelEx($model,'instansi',['class' => 'col-sm-2 control-label']); ?>
			<div class="col-sm-4">	
		<?php echo $form->textField($model,'instansi',array('class' => 'form-control', 'placeholder' => 'Instansi' ,'size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'instansi'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">		
		<?php echo $form->textField($model,'contact',array('class' => 'form-control', 'placeholder' => 'Contact' ,'size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contact'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip',['class' => 'col-sm-2 control-label']); ?>
		<div class="col-sm-4">	
		<?php echo $form->textField($model,'nip',array('class' => 'form-control', 'placeholder' => 'Nomor Induk Pegawai' ,'size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nip'); ?>
		</div>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->