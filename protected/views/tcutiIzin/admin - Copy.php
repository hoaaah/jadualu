<?php
$this->breadcrumbs=array('Cuti'=>array('/tcutiMohon'),
	'Izin Cuti'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Izin Cuti', 'url'=>array('index')),
//	array('label'=>'Create TcutiIzin', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tcuti-izin-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Semua Izin Cuti</h1>

<p>
Anda dapat menggunakan operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
, <b>=</b>) di depan filter.
</p>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tcuti-izin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'mohon_id',
		'appr',
		'catatan',
		'keputusan',
		'user_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
