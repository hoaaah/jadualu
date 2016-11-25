<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array('Cuti'=>array('/tcutiMohon'),
	'Izin Cuti'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Izin Cuti', 'url'=>array('index')),
//	array('label'=>'Create TcutiIzin', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tcuti-izin-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Semua Izin Cuti</h1>
<!--
<p>
Anda dapat menggunakan operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
, <b>=</b>) di depan filter.
</p>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tcuti-izin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'mohon_id',
		'appr',
		'catatan',
		'keputusan',
		'user_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
-->

<p> Berikut adalah daftar permohonan Cuti yang belum ditindaklanjuti. Tekan tombol V untuk menyetujui permohonan atau X untuk menolak permohonan. <p>
	<table>
    <thead>
	<tr>
			<th>ID</th>
			<th>Nama Pegawai</th>
			<th>Jenis Cuti</th>
			<th>app</th>
			<th>Tgl-Cuti</th>
			<th>Ket</th>
			<th>User</th>
			<th class="actions">ACTIONS</th>
	</tr>
    </thead>
    <tbody>
    <?php
	foreach ($list as $list){
		echo'<tr>';
			echo '<td>'.$list['id'].'</td>';
			echo '<td>'.$list['pegawai_id'].'</td>';
			echo '<td>'.$list['cuti_id'].'</td>';
			echo '<td>'.$list['appr'].'</td>';
			echo '<td>'.date('d/m/Y', strtotime($list['tgl_mulai'])).' s/d '. date('d/m/Y', strtotime($list['tgl_selesai'])).'</td>';
			echo '<td>'.$list['ket'].'</td>';
			echo '<td>'.$list['user_id'].'</td>';
	$image = CHtml::Image(Yii::app()->baseUrl . '/images/print_button_small.png', 'Surat Izin Cuti Tahunan');
    

			echo '<td>'.

			CHtml::Link($image, array('TcutiIzin/Cizin&izin_id='.$list['id']), array('target'=>'_blank', 'title'=>'Surat Izin Cuti Tahunan')).
			CHtml::Link('edit', array('TcutiIzin/Update&id='.$list['id']), array('target'=>'_blank', 'title'=>'Surat Izin Cuti Tahunan')).
			'</td>';
																							
		echo'</tr>';	
	}
	?>
    </tbody>
    </table>
