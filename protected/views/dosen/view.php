<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosens'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Dosen', 'url'=>array('index')),
	array('label'=>'Create Dosen', 'url'=>array('create')),
	array('label'=>'Update Dosen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dosen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dosen', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'degree_titles',
		'nip',
		'instansi',
		'contact',
                'spesialisasi',
		array(
                    'name' => 'Testimoni',
                    'type' => 'raw',
                    'value' => $model->pros.'</br>'.$model->cons,
                ),
	),
)); ?>
<?php 
$dosen = explode(" ",$model->name);
$ppud = Yii::app()->db->createCommand('SELECT * FROM ppud WHERE pembimbing1 REGEXP "'.$dosen['0'].'|'.$dosen['1'].'" OR pembimbing2 REGEXP "'.$dosen['0'].'|'.$dosen['1'].'" OR ketua_penguji REGEXP "'.$dosen['0'].'|'.$dosen['1'].'" OR penguji1 REGEXP "'.$dosen['0'].'|'.$dosen['1'].'" OR penguji2 REGEXP "'.$dosen['0'].'|'.$dosen['1'].'"')->queryAll();
?>
<div class="panel panel-green">
    <div class="panel-heading">
        <h3 class="panel-title">Skripsi Terkait dosen ini</h3>
    </div>
    <div class="panel-body">
        <p>
        <?php foreach ($ppud as $c):?>
            <?php echo CHtml::link(CHtml::encode('['.$c['tahun'].'] '.$c['tentang'].' Oleh '.$c['nama']).' '.Chtml::image(Yii::app()->request->baseUrl.'/images/download.jpg'),
                                    array('Ppud/view', 'id' => $c['id'])); ?>
        </p>
        <?php endforeach;?>
    </div>
</div>