<?php
$this->breadcrumbs=array(
	'Kategori Materi Bidang'=>array('index'),
	'Tambah',
);

$this->menu=array(
	array('label'=>'Daftar Kategori', 'url'=>array('index')),
);
?>

<h1>Tambah Kategori</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>