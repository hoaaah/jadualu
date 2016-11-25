<?php
/* @var $this SkripsiController */
/* @var $model Jskripsi */

$this->breadcrumbs=array(
	'Skripsi'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah', 'url'=>array('create')),
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
</div><!-- search-form -->


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
			  'name'=>'mahasiswa_id',
			  'value'=>'$data->mahasiswa->nama',
			  'filter'=> Chtml::listData(RefMahasiswa::model()->findAll(),'id', 'nama')
			  				/*$this->widget('ext.select2.Select2',[
					          'name'=>'mahasiswa_id',
					          'data'=>Chtml::listData(RefMahasiswa::model()->findAll(),'id', 'nama'),
					        ], true),	*/	  
			],			
			[
			  'name'=>'bidang_skripsi',
			  'value'=>'isset($data->puus->name) ? $data->puus->name : "Belum diisi" ',
			  'filter'=> Chtml::listData(Puus::model()->findAll(),'id', 'name')
			  				/*$this->widget('ext.select2.Select2',[
					          'name'=>'mahasiswa_id',
					          'data'=>Chtml::listData(RefMahasiswa::model()->findAll(),'id', 'nama'),
					        ], true),	*/	  
			],	
			'judul',
			[
			  'name'=>'dosen_materi',
			  'value'=>'$data->dosenmateri->name',
			  'filter'=> Chtml::listData(Dosen::model()->findAll(),'id', 'name')
			  				/*$this->widget('ext.select2.Select2',[
					          'name'=>'mahasiswa_id',
					          'data'=>Chtml::listData(RefMahasiswa::model()->findAll(),'id', 'nama'),
					        ], true),	*/	  
			],			
			[
			  'name'=>'dosen_teknis',
			  'value'=>'$data->dosenteknis->name',
			  'filter'=> Chtml::listData(Dosen::model()->findAll(),'id', 'name')
			  				/*$this->widget('ext.select2.Select2',[
					          'name'=>'mahasiswa_id',
					          'data'=>Chtml::listData(RefMahasiswa::model()->findAll(),'id', 'nama'),
					        ], true),	*/	  
			],		
			/*
			'tahun',
			'tanggal_pengesahan',
			'created_at',
			'user_id',
			*/				
			[
				'header' => 'Aksi',
				'htmlOptions' => array('nowrap'=>'nowrap'),
				'class'=>'booster.widgets.TbButtonColumn',
				'viewButtonUrl'=>'Yii::app()->createUrl("/ujianskripsi/skripsi/view", array("id"=>$data["id"]))',
				'updateButtonUrl'=>'Yii::app()->createUrl("/ujianskripsi/skripsi/update", array("id"=>$data["id"]))',
				//'deleteButtonUrl'=>null,
			],			
        ],
    )
);
?>
