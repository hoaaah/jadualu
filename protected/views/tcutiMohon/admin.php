<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Permohonan Cuti'=>array('index'),
	'Manage',
);

$this->menu=array(
//	array('label'=>'List TcutiMohon', 'url'=>array('index')),
	array('label'=>'Buat Permohonan Cuti', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tcuti-mohon-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Permohonan Cuti</h1>

<p>
Anda dapat memasukkan operasi (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) Di awal pencarian.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tcuti-mohon-grid',
#	'dataProvider'=>$model->search(),
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		'id',
          array(            // display 'author.username' using an expression
              'name'=>'pegawai_id',
              'value'=>'$data->pegawai->name',
//			  'filter'=>CHtml::activeTextField($model,'pegawai'),
          ),		
//		'pegawai_id',
          array(            // display 'author.username' using an expression
              'name'=>'cuti_id',
              'value'=>'$data->cutiid->name',
          ),	
//		'thn_cuti',
		'jml_hari',
		'tgl_mulai',

		/*
		'tgl_selesai',
		'tgl_aju',
		'alamat',
		'ket',
		          array(            // display 'author.username' using an expression
              'name'=>'user_id',
              'value'=>'$data->users->name',
          ),
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
