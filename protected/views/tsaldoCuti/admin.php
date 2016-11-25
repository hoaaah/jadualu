<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array('Cuti'=>array('/tcutiMohon'),
//	'Izin Cuti'=>array('index'),
	'Saldo Cuti',
);

$this->menu=array(
//	array('label'=>'List TsaldoCuti', 'url'=>array('index')),
	array('label'=>'Tambah Saldo Cuti', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tsaldo-cuti-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Saldo Cuti</h1>

<p>
Anda dapat menambahkan operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
atau <b>=</b>) di depan filter pencarian.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tsaldo-cuti-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tahun',
		'ref_pegawai_id',
		'saldo_cuti',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
