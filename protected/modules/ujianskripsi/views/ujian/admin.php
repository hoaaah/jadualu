<?php
/* @var $this UjianController */
/* @var $model JujianSkripsi */

$this->breadcrumbs=array(
	'Jujian Skripsis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JujianSkripsi', 'url'=>array('index')),
	array('label'=>'Create JujianSkripsi', 'url'=>array('create')),
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

<h1>Manage Jujian Skripsis</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jujian-skripsi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'periode_id',
		'skripsi_id',
		'mahasiswa_id',
		'tanggal_ujian',
		'waktu_ujian',
		/*
		'lokasi_ujian',
		'keterangan',
		'kelulusan',
		'nilai_ujian_skripsi',
		'nilai_ujian_kompre',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
