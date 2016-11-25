<?php
Yii::import('ext.select2.Select2');
/* @var $this UjianController */
/* @var $dataProvider CActiveDataProvider */

function bulan($bulan){
    Switch ($bulan){
        case 1 : $bulan="Januari";
            Break;
        case 2 : $bulan="Februari";
            Break;
        case 3 : $bulan="Maret";
            Break;
        case 4 : $bulan="April";
            Break;
        case 5 : $bulan="Mei";
            Break;
        case 6 : $bulan="Juni";
            Break;
        case 7 : $bulan="Juli";
            Break;
        case 8 : $bulan="Agustus";
            Break;
        case 9 : $bulan="September";
            Break;
        case 10 : $bulan="Oktober";
            Break;
        case 11 : $bulan="November";
            Break;
        case 12 : $bulan="Desember";
            Break;
        }
    return $bulan;
}


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
	'Jadwal Mahasiswa',
);

$this->menu=array(
);
?>

<h1>Daftar Mahasiswa Ujian Skripsi Periode Ini</h1>

<?php 
Yii::app()->clientScript->registerScript('search',
    "var ajaxUpdateTimeout;
    var ajaxRequest;
    $('input#string').keyup(function(){
        ajaxRequest = $(this).serialize();
        clearTimeout(ajaxUpdateTimeout);
        ajaxUpdateTimeout = setTimeout(function () {
            $.fn.yiiListView.update(
// this is the id of the CListView
                'ajaxListView',
                {data: ajaxRequest}
            )
        },
// this is the delay
        300);
    });"
);
$mahasiswa = CHtml::listData(RefMahasiswa::model()->findAll(), 'id', 'nama');
echo CHtml::beginForm(CHtml::normalizeUrl(array('ujian/index')), 'get', array('id'=>'filter-form'))
	. Select2::dropDownList('string', '', 
                $mahasiswa,
                array('empty'=>'','id'=>'string' ,'style'=>'width:25%',
                    'select2Options'=>array(
                        'allowClear'=>true,
                        'placeholder'=>'Mahasiswa',
                        'onTrigger'=>array(
                            'select2-selecting'=>new CJavaScriptExpression('function(e) { console.log(e.object.id);}'),
                            "select2-removed"=>new CJavaScriptExpression('function(e) { console.log(e.choice.text);}'),
                        )
                        ),

                    )
                )
    //. CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id'=>'string'))
    . CHtml::submitButton('Search', array('name'=>'', 'class'=>'btn btn-md btn-primary'))
    . CHtml::endForm();
?>
<?php
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    //'viewData'=>array('category'=>$category),	
    'sortableAttributes'=>array(
        'id'=>'id',
        'mahasiswa_id'
    ),
    'id'=>'ajaxListView',	
)); ?>
