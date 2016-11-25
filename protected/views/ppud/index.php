<?php
$this->breadcrumbs=array(
	'Skripsi',
);

	$this->menu=array(
		array('label'=>'Upload Skripsi', 'url'=>array('create')),
		array('label'=>'Search and Filter', 'url'=>array('admin')),
);
?>
<?php 
$puus= Yii::app()->db->createCommand('SELECT * FROM puus'
)->queryAll();
IF($this->action->Id == 'index'){
    echo CHtml::link('<button type="button" class="btn btn-sm btn-primary">Semua Bidang</button>', array('ppud/'));
}ELSE{
    echo CHtml::link('<button type="button" class="btn btn-sm btn-default">Semua Bidang</button>', array('ppud/'));
}
foreach($puus as $p)
    IF(isset($id) && $p['id'] == $id){
        echo CHtml::link('<button type="button" class="btn btn-xs btn-primary">'.$p['name'].'</button>', array('ppud/bidang', 'id'=>$p['id']));        
    }ELSE{
        echo CHtml::link('<button type="button" class="btn btn-xs btn-default">'.$p['name'].'</button>', array('ppud/bidang', 'id'=>$p['id']));
    }

?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
