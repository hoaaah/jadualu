<?php
/* @var $this LokasiController */
/* @var $model JlokasiUjian */

$this->breadcrumbs=array(
	'Lokasi Ujian'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Lokasi', 'url'=>array('create')),
);
?>

<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
    }
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
<?php echo CHtml::activeDropDownList($model, 'periode_id', CHtml::listData(Jperiode::model()->findAll(), 'id', 'periode'),['class' => 'form-control', 'empty' => 'Periode', 'placeholder' => 'Periode']);?>
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
			[
			  'name'=>'ruang_id',
			  'value'=>'$data->ruang->kelas',
			  'filter'=> Chtml::listData(RKelas::model()->findAll(),'id', 'kelas')
			  				/*$this->widget('ext.select2.Select2',[
					          'name'=>'mahasiswa_id',
					          'data'=>Chtml::listData(RefMahasiswa::model()->findAll(),'id', 'nama'),
					        ], true),	*/	  
			],			
			'keterangan',	
			[
				'header' => 'Aksi',
				'htmlOptions' => array('nowrap'=>'nowrap'),
				'class'=>'booster.widgets.TbButtonColumn',
				'viewButtonUrl'=>'Yii::app()->createUrl("/ujianskripsi/lokasi/view", array("id"=>$data["id"]))',
				'updateButtonUrl'=>'Yii::app()->createUrl("/ujianskripsi/lokasi/update", array("id"=>$data["id"]))',
				
			],			
				//array('label'=>'Delete Notification', 'url'=>'#', "linkOptions"=>array("submit"=>array("delete","id"=>$data->id),"confirm"=>"Are you sure you want to delete this item?")),
        ],
    )
);
?>

