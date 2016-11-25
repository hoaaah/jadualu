<?php
$this->breadcrumbs=array('Parameter',
	'Kategori Materi Bidang'=>array('index'),
	);

$this->menu=array(
	array('label'=>'Buat Kategori Baru', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ref-category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kategori dalam materi bidang</h1>

<p>
Berikut adalah klasifikasi dalam materi berbagi file bidang.</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
IF($this->log_pegawai['nip'] == 0){
	
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'ref-category-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'bidang_id',
			'no_urut',
			'name',
			array(
				'class'=>'CButtonColumn',
			),
		),
	));
}ELSE{
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'ref-category-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'no_urut',
			'name',
			array(
				'class'=>'CButtonColumn',
			),
		),
	));
}
 ?>
