<?php
/* @var $this JadwalController */
/* @var $model JujianSkripsi */

$this->breadcrumbs=array(
	'Manage Jadwal Ujian'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Jadwal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jujian-skripsi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
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
			//'id',
			/*
			[
			  'name'=>'periode_id',
			  'value'=>'$data->periode->periode',
			  'filter'=>Chtml::listData(Jperiode::model()->findAll(),'id', 'periode'),			  
			],
			*/				
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
			  'name'=>'tanggal_ujian',
			  'value'=>'$data->tanggalUjian->tanggal',
			  'filter'=>Chtml::listData(JtanggalUjian::model()->findAll(),'id', 'tanggal'),			  
			],			
			'tanggalUjian.tahap',
			[
			  'name'=>'waktu_ujian',
			  'header' => 'Sesi',
			  'value'=>'$data->waktuUjian->name',
			  'filter'=>Chtml::listData(Jsession::model()->findAll(),'id', 'name'),			  
			],				
			'lokasiUjian.ruang.kelas',
			'skripsi.judul',
			[
				//'name'=>'hapus', 
				'header'=>'Aksi', 
				'type' => 'raw', 
				'value' =>'CHtml::link("Ubah ".CHtml::image(Yii::app()->request->baseUrl."/images/update.png"),Yii::app()->createUrl("/ujianskripsi/jadwal/update", array("id"=>$data["id"])))." ".
					CHtml::link("Hapus ".CHtml::image(Yii::app()->request->baseUrl."/images/delete.png"),Yii::app()->createUrl("/ujianskripsi/jadwal/delete", array("id"=>$data["id"])))', 
				'htmlOptions'=>array('nowrap' =>'nowrap' /*, 'onclick' =>"return confirm('Anda yakin?');" */)
			],			
			/*
			[
			  'name'=>'skripsi_id',
			  'value'=>'$data->skripsi->judul',
			  'filter'=> $this->widget('ext.select2.Select2',[
					          'name'=>'skripsi_id',
					          'data'=>Chtml::listData(Jskripsi::model()->findAll(),'id', 'judul'),
					        ], true),		  
			],	
			*/				
			/*
			'lokasi_ujian',
			'keterangan',
			'kelulusan',
			'nilai_ujian_skripsi',
			'nilai_ujian_kompre',
			*/
        ],
    )
);
?>
