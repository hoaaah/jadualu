<?php
$judul ='SIMOKU';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	$judul,
);
$nama_user = Yii::app()->session['nama_user'];
#print_r(Yii::app()->session); echo(date('Y-m-d H:i:s')); echo(Yii::app()->user->Id); print_r($log_user_login);
if(!Yii::app()->user->isGuest){
	$this->menu=array(
		array('label'=>'Upload Skripsi', 'url'=>array('create')),
		array('label'=>'Skripsi', 'url'=>array('index')),
);	
}



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ppud-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php
/*
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
*/?>

<!-- batas clist view berikutnya cgridview -->
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
if(!Yii::app()->user->isGuest){
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ppud-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'tahun',		
          array(            
              'name'=>'puud',
              'value'=>'$data->puudid->name',
			  'filter'=>Chtml::listData(Puus::model()->findAll(),'id', 'name'),
          ),		
//		'puuddetail',		  
//		'puud',
		'nama',
		'no',
		'tentang',
/*		
		array(
		'name' =>'tentang',
		'value' => '$data->puudid->name." no  ".$data->no." tahun ".$data->tahun." tentang ".$data->tentang',
		),
*/
//		'files',
		/*
          array(            
              'name'=>'files',
              'value'=>'$data->files',
          ),	
		/*
		'tag',		

		'tetap_province',
		'tetap_kabkot',
		'tetap_tanggal',
		'user_id',
		'created',
		'updated',
		*/
		array(
			'name' =>'files',
			'value' => 'substr(filesize("unggah/".$data->puud."/".$data->files)/1024/1024,0,5)',
//			'value' => filesize('$data->puudid->name." no  ".$data->no." tahun ".$data->tahun." tentang ".$data->tentang'),
		),		
	
		array(
			'class'=>'CButtonColumn',
       		'buttons'=>array(
                        'download'=>array(
                             'label'=>'download', //hover text
                             'imageUrl'=> Yii::app()->request->baseUrl.'/images/download.jpg',//icon of the button
                             'url'=>'Yii::app()->request->baseUrl."/unggah/".CHtml::encode($data->puud)."/".CHtml::encode($data->files)', //target of the button							 
                        ),
					
						),
			'template'=>'{download} {view}'			
		),
	),
)); 
}ELSE{
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ppud-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
          array(            // display 'author.username' using an expression
              'name'=>'puud',
              'value'=>'$data->puudid->name',
			  'filter'=>Chtml::listData(puus::model()->findAll(),'id', 'name'),			  
          ),	
//		'puuddetail',		  	
//		'puud',
		'no',
		'tahun',
		array(
		'name' =>'tentang',
		'value' => '$data->puudid->name." no  ".$data->no." tahun ".$data->tahun." tentang ".$data->tentang',
		),
//		'files',
          array(            // display 'author.username' using an expression
              'name'=>'files',
              'value'=>'$data->files',
          ),	
		/*
		'tag',		

		'tetap_province',
		'tetap_kabkot',
		'tetap_tanggal',
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
                             'url'=>'Yii::app()->request->baseUrl."/unggah/".CHtml::encode($data->puud)."/".CHtml::encode($data->files)', //target of the button							 
                        ),
					
					),
			'template'=>'{view}'			
		),
	),
)); 	
}


?>
