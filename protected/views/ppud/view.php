<?php
$judul ='SIMOKU';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'SIMOKU'=>array('index'),
	$model->id,
);
#echo($model->id);Yii::app()->user->id
$tb_ppud=Ppud::model()->find(array(
	'select'=>'user_id',
	'condition'=>'id=:id',
	'params'=>array(':id'=>$model->id),
));
If($tb_ppud['user_id'] ==	Yii::app()->user->id || Yii::app()->user->id == 1)
{
	$this->menu=array(
		array('label'=>'Daftar Skripsi', 'url'=>array('index')),
		array('label'=>'Upload Skripsi', 'url'=>array('create')),
//		array('label'=>'Update Ppud', 'url'=>array('update', 'id'=>$model->id)),
		array('label'=>'Hapus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Cetak Pernyataan Upload', 'url'=>array('/ppud/Cppud&ppud_id='.$model->id), 'linkOptions'=>array('target'=>'_blank'),  'visible'=>!Yii::app()->user->isGuest),	
		array('label'=>'Download', 'url'=>'unggah/'.$model->puud.'/'.$model->files,'linkOptions'=>array('target'=>'_BLANK'), 'visible'=>!Yii::app()->user->isGuest),			
	#	array('label'=>'Manage Ppud', 'url'=>array('admin')),
	
	);
}ELSE{
				
	$this->menu=array(
		array('label'=>'Upload Skripsi', 'url'=>array('/ppud/create'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Cetak Pernyataan Upload', 'url'=>array('/ppud/Cppud&ppud_id='.$model->id), 'linkOptions'=>array('target'=>'_blank'),  'visible'=>!Yii::app()->user->isGuest),	
		array('label'=>'Download', 'url'=>'unggah/'.$model->puud.'/'.$model->files,'linkOptions'=>array('target'=>'_BLANK'), 'visible'=>!Yii::app()->user->isGuest),			
	
	);				
}
?>

<h1>Skripsi No #<?php echo $model->id; ?></h1>

<?php
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
//		'puud',
		 array(             
            'label'=>'Bidang Skripsi',
            'value'=>$model->puudid->name,
        ),	
		'nama',
		'no',
		'tahun',
		'tentang',
		'tag',
//		'files',
		array(
			'label' =>'Ukuran (MB)',
			'value' => substr(filesize("unggah/".$model->puud."/".$model->files)/1024/1024,0,5),
//			'value' => filesize('$data->puudid->name." no  ".$data->no." tahun ".$data->tahun." tentang ".$data->tentang'),
		),	
		'pembimbing1',
		'pembimbing2',
		'ketua_penguji',
		'penguji1',
		'penguji2',
//		'tetap_province',
//		'tetap_kabkot',
//		'tetap_tanggal',
//		'user_id',
/*		 array(             
            'label'=>'User',
            'value'=>$model->userid->name
        ),			
*/
		'created',
		'updated',
/*
		array(
		'label'=>'Cetak',
		'value'=> CHtml::Link(CHtml::Image(Yii::app()->baseUrl . '/images/print_button.png', 'Cetak Dokumen Permohonan'), array('Ppud/Cppud&ppud_id='.$model->id), array('target'=>'_blank', 'title'=>'Cetak pernyataan upload'))
		),
		*/
	),
)); 

?>

<?php 
IF(!in_array(substr($model->files, -4), array('.zip', '.rar', '.exe', 'tar', 'targz', 'php'))):
?>	

<!-- untuk preview -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.media.js">
	$('.media').media({
		width:     600,
		height:    800,
		autoplay:  true,
		src:       <?php echo 'unggah/'.$model->puud.'/'.$model->files ; ?>,
		attrs:     { attr1:  'attrValue1',  attr2:  'attrValue2' },  // object/embed attrs
		params:    { param1: 'paramValue1', param2: 'paramValue2' }, // object params/embed attrs
		caption:   false // supress caption text
	});
</script>



<div id="spoiler">
<div><input style="font-size: 11px; font-weight: bold; margin: 5px; padding: 0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = ''; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = 'none'; this.innerText = ''; this.value = 'TUTUP'; } else { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = 'none'; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = ''; this.innerText = ''; this.value = 'Preview'; }" name="button" type="button" value="Preview" /></div>
<div id="show" style="border: 1px solid white; display: none; margin: 5px; padding: 2px; width: 98%;">
<div style="color: #000000; background: none repeat scroll 0% 0% #ebf3fb; border: 1px solid #aaccee; padding: 7px; margin: 0px;">
<p style="text-align: justify;">

<!-- Isi spoiler -->

<div class="media" align="center" >
    <object width="600" height="800" attr1="attrValue1" attr2="attrValue2"
        codebase="http://www.apple.com/qtactivex/qtplugin.cab"
        classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B">
        <param name="src"      value="<?php echo 'unggah/'.$model->puud.'/'.$model->files ; ?>">
        <param name="autoplay" value="true">
        <param name="param1"   value="paramValue1">
        <param name="param2"   value="paramValue2">
        <embed width="600" height="800" src="<?php echo 'unggah/'.$model->puud.'/'.$model->files ; ?>" autoplay="true"
            attr1="attrValue1" attr2="attrValue2" param1="paramValue1" param2="paramValue2"
            pluginspage="http://www.apple.com/quicktime/download/" > </embed>
    </object>
</div>



<!-- batas isi spoiler -->
</p>
</div><div id="hide"></div></div></div>

<?php endif;?>
