<?php
$this->breadcrumbs=array(
	'Materi Bidang'=>array('index'),
	$model->id,
);
If($model->user_id ==	Yii::app()->user->id || Yii::app()->user->id == 1)
{
	
$this->menu=array(
	array('label'=>'Daftar Materi Bidang', 'url'=>array('index')),
	array('label'=>'Tambah Materi Bidang', 'url'=>array('create')),
	array('label'=>'Ubah', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Anda yakin?')),
#	array('label'=>'Manage Tfiles', 'url'=>array('admin')),
);
}ELSE{
$this->menu=array(
	array('label'=>'Daftar Materi Bidang', 'url'=>array('index')),
	array('label'=>'Tambah Materi Bidang', 'url'=>array('create')),
);		
}
?>

<h1>View Tfiles #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bidang_id',
		'category_id',
		'user_dest',
		'no',
		'tahun',
		'tentang',
		'tag',
		'files',
		'user_id',
		'created',
		'updated',
	),
)); ?>

<?php 
IF(!in_array(substr($model->files, -4), array('.zip', '.rar', '.exe', 'tar', 'targz', 'php'))):
?>	

<!-- untuk preview -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.media.js">
	$('.media').media({
		width:     600,
		height:    800,
		autoplay:  true,
		src:       <?php echo Yii::app()->request->baseUrl.'/unggah/99/'.$model->bidang_id.'_'.$model->category_id.'_'.$model->no.'_'.$model->tahun.'_'.$model->files ; ?>,
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
        <param name="src"      value="<?php echo Yii::app()->request->baseUrl.'/unggah/99/'.$model->bidang_id.'_'.$model->category_id.'_'.$model->no.'_'.$model->tahun.'_'.$model->files ; ?>">
        <param name="autoplay" value="true">
        <param name="param1"   value="paramValue1">
        <param name="param2"   value="paramValue2">
        <embed width="600" height="800" src="<?php echo Yii::app()->request->baseUrl.'/unggah/99/'.$model->bidang_id.'_'.$model->category_id.'_'.$model->no.'_'.$model->tahun.'_'.$model->files ; ?>" autoplay="true"
            attr1="attrValue1" attr2="attrValue2" param1="paramValue1" param2="paramValue2"
            pluginspage="http://www.apple.com/quicktime/download/" > </embed>
    </object>
</div>

<!-- batas isi spoiler -->
</p>
</div><div id="hide"></div></div></div>

<?php endif;?>

