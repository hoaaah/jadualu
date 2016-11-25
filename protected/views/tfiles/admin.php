<?php
$this->breadcrumbs=array(
	'Materi Bidang',
);

$this->menu=array(
//	array('label'=>'List Tfiles', 'url'=>array('index')),
	array('label'=>'Tambah Materi Bidang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tfiles-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<p>
Anda dapat menambahkan operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
atau <b>=</b>) didepan value pencarian.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php 
	
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tfiles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
          array(            // display 'author.username' using an expression
              'name'=>'bidang_id',
              'value'=>'$data->bidangid->name',
			  'filter'=>Chtml::listData(RefBidang::model()->findAll(),'id', 'name'),			  
          ),
          array(            // display 'author.username' using an expression
              'name'=>'category_id',
              'value'=>'$data->categoryid->name',
			  'filter'=>Chtml::listData(RefCategory::model()->findAll(),'id', 'name'),			  
          ),	
/*		array(
			'name' =>'files',
			'value' => 'substr(filesize("/unggah/99/".$data->bidang_id."_".$data->category_id."_".$data->no."_".$data->tahun."_".$data->files)/1024/1024,0,5)',
		),		
*/			  
		'tentang',
		'files',
		/*
		'user_dest',
		'no',
		'tahun',		
		'tentang',
		'tag',

		'user_id',
		'created',
		'updated',
		*/
		array(
			'class'=>'CButtonColumn',
       		'buttons'=>array(
                        'download'=>array(
                             'label'=>'download', //hover text
                             'imageUrl'=> Yii::app()->request->baseUrl.'/images/download.jpg',//icon of the button					 
                             'url'=>'Yii::app()->request->baseUrl."/unggah/99/".CHtml::encode($data->bidang_id)."_".CHtml::encode($data->category_id)."_".CHtml::encode($data->no)."_".CHtml::encode($data->tahun)."_".CHtml::encode($data->files)', //target of the button							 
                        ),
					
						),
			'template'=>'{download} {view}'			
		),
	),
));

	?>
