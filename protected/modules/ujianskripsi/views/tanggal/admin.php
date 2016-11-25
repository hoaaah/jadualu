<?php
/* @var $this LokasiController */
/* @var $model JlokasiUjian */
function nama_hari($hari){
    //$hari berformat DATE('w');
    switch($hari){      
        case 0 : {
                    $hari='Minggu';
                }break;
        case 1 : {
                    $hari='Senin';
                }break;
        case 2 : {
                    $hari='Selasa';
                }break;
        case 3 : {
                    $hari='Rabu';
                }break;
        case 4 : {
                    $hari='Kamis';
                }break;
        case 5 : {
                    $hari="Jumat";
                }break;
        case 6 : {
                    $hari='Sabtu';
                }break;
        default: {
                    $hari='UnKnown';
                }break;
    }   
    return $hari;
}


$this->breadcrumbs=array(
	'Tanggal Ujian'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Tambah Lokasi', 'url'=>array('create')),
);
?>

<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="alert alert-' . $key . '">' . $message . "</div>\n";
    }
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
<?php echo CHtml::activeDropDownList($model, 'periode_id', CHtml::listData(Jperiode::model()->findAll(), 'id', 'periode'),['class' => 'form-control', 'empty' => 'Periode', 'placeholder' => 'Periode']);?>
</div>
<?php echo CHtml::submitButton($model->isNewRecord ? 'Cari' : 'Ubah', ['class' =>'btn btn-success']);?>


<?php $this->endWidget(); ?>

<?php
$this->widget(
    'booster.widgets.TbGridView',
    array(
        'type' => 'condensed',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'template' => "{items}\n{pager}",
        'afterAjaxUpdate' => 'reinstallDatePicker',       
        'columns' => [		
        	'id',
        	'tahap',
            array(
                'name' => 'tanggal',
                'value' => 'nama_hari(date("w", strtotime($data->tanggal))).date(", d-m-y", strtotime($data->tanggal))',
                'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model, 
                    'attribute'=>'tanggal', 
                    'language' => 'id',
                    // 'i18nScriptFile' => 'jquery.ui.datepicker-ja.js', (#2)
                    'htmlOptions' => array(
                        'id' => 'tanggal',
                        'size' => '10',
                        'class' => 'form-control'
                    ),
                    'defaultOptions' => array(  // (#3)
                        'showOn' => 'focus', 
                        'dateFormat' => 'yy-mm-dd',
                        'showOtherMonths' => true,
                        'selectOtherMonths' => true,
                        'changeMonth' => true,
                        'changeYear' => true,
                        'showButtonPanel' => true,
                    )
                ), 
                true), // (#4)
            ),            
        	'keterangan',	
			[
				'header' => 'Aksi',
				'htmlOptions' => array('nowrap'=>'nowrap'),
				'class'=>'booster.widgets.TbButtonColumn',
				'viewButtonUrl'=>'Yii::app()->createUrl("/ujianskripsi/tanggal/view", array("id"=>$data["id"]))',
				'updateButtonUrl'=>'Yii::app()->createUrl("/ujianskripsi/tanggal/update", array("id"=>$data["id"]))',
				//'deleteButtonUrl'=>null,
			],			
        ],
    )
);
Yii::app()->clientScript->registerScript('re-install-date-picker', "
function reinstallDatePicker(id, data) {
        //use the same parameters that you had set in your widget else the datepicker will be refreshed by default
    $('#tanggal').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['id'],{'dateFormat':'yy-mm-dd'}));
}
");
?>

