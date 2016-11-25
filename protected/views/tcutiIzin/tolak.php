<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array('Cuti'=>array('/tcutiMohon'),
	'Izin Cuti'=>array('index'),
	'Tolak',
);

$this->menu=array(
	array('label'=>'Daftar Izin Cuti', 'url'=>array('index')),
//	array('label'=>'Manage TcutiIzin', 'url'=>array('admin')),
);
?>

<h1>Penolakan Izin</h1>
<?php
//print_r($list);
echo '<p>Anda akan menolak permohonan '.$list['0']['cuti_id'].' atas '.$list['0']['pegawai_id'].' selama '.$list['0']['jml_hari'].' hari tanggal '.date('d/m/Y', strtotime($list['0']['tgl_mulai'])).' s/d '. date('d/m/Y', strtotime($list['0']['tgl_selesai'])).'</p>';
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcuti-izin-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Isian dengan <span class="required">*</span> wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan'); ?>
		<?php echo $form->error($model,'catatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keputusan'); ?>
		<?php echo $form->textField($model,'keputusan',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'keputusan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tolak' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->