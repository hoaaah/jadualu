<?php
/* @var $this MahasiswaController */
/* @var $model RefMahasiswa */

$this->breadcrumbs=array(
	'Manage Mahasiswa'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Mahasiswa', 'url'=>array('create')),
);

?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
<?php echo $form->textField($model,'tahun_masuk',array('class' => 'form-control','size'=>4,'maxlength'=>4, 'placeholder' => 'Tahun Masuk')); ?>
</div>
<?php echo CHtml::submitButton($model->isNewRecord ? 'Cari' : 'Ubah', ['class' =>'btn btn-success']);?>


<?php $this->endWidget(); ?>

<?php
$this->widget(
    'booster.widgets.TbGridView',
    array(
        'type' => 'condensed',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'template' => "{items}\n{pager}",
        'columns' => [		
        	'id',	
        	'npm',
        	'nama',
        	'kelas',
			/*
			'tahun_masuk',
			'tahun_kelulusan',
			'jurusan_id',
			'instansi',
			'contact',
			'nip',
			'created_at',
			'updated_at',
			*/	
			[
				'header' => 'Aksi',
				'htmlOptions' => array('nowrap'=>'nowrap'),
				'class'=>'booster.widgets.TbButtonColumn',
				'viewButtonUrl'=>'Yii::app()->createUrl("/mahasiswa/view", array("id"=>$data["id"]))',
				'updateButtonUrl'=>'Yii::app()->createUrl("/mahasiswa/update", array("id"=>$data["id"]))',
				'deleteButtonUrl'=>null,
			],				
        ],
    )
);
?>
