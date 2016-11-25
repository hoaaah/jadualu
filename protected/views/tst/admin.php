<?php
$this->breadcrumbs=array(
	'Tsts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tst', 'url'=>array('index')),
	array('label'=>'Create Tst', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tst-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tsts</h1>

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
	'id'=>'tst-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pwk_id',
		'bidang_id',
		'rkt_id',
		'rkt_ur',
		'rkt_thn',
		/*
		'disposisi_id',
		'nkpt',
		'nkpt_tgl',
		'objek',
		'objek_id',
		'hal',
		'kp',
		'kp_tgl',
		'hp',
		'tgl_mulai',
		'tgl_selesai',
		'tl1',
		'tgl_tl1',
		'no_st',
		'tl2',
		'tgl_tl2',
		'tl3',
		'tgl_tl3',
		'tgl_st',
		'pembiayaan_penugasan',
		'created',
		'updated',
		'user_id',
		'no_SPD',
		'tgl_spd',
		'spd_rampung',
		'input_siapda',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
