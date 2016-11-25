<?php
$this->breadcrumbs=array(
	'Tdisposisis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tdisposisi', 'url'=>array('index')),
	array('label'=>'Create Tdisposisi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tdisposisi-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tdisposisis</h1>

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
	'id'=>'tdisposisi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'kd_disposisi',
		'tgl_terima',
		'no_surat',
		'asal_id',
		'asal_ur',
		/*
		'hal',
		'lampiran',
		'tl1',
		'tl1_ur',
		'tl1_tgl',
		'tl1_tujuan',
		'tl2',
		'tl2_ur',
		'tl2_tgl',
		'tl2_tujuan',
		'tl3',
		'tl3_ur',
		'tl3_tgl',
		'tl3_tujuan',
		'tl_final',
		'tlg_tl_final',
		'files',
		'created',
		'updated',
		'user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
