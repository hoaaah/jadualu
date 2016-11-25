<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array('Cuti'=>array('/tcutiMohon'),
	'Izin Cuti',
);

$this->menu=array(
//	array('label'=>'Create TcutiIzin', 'url'=>array('create')),
	array('label'=>'Semua Izin', 'url'=>array('admin')),
	array('label'=>'Semua Permohonan', 'url'=>array('TcutiMohon/index')),	
);
?>

<h1>Izin Cuti</h1>
<p> Berikut adalah daftar permohonan Cuti yang belum ditindaklanjuti. Tekan tombol V untuk menyetujui permohonan atau X untuk menolak permohonan. <p>
	<table>
    <thead>
	<tr>
			<th>ID</th>
			<th>Nama Pegawai</th>
			<th>Jenis Cuti</th>
			<th>Jumlah Hari</th>
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
			echo '<td>'.$list['jml_hari'].'</td>';
			echo '<td>'.date('d/m/Y', strtotime($list['tgl_mulai'])).' s/d '. date('d/m/Y', strtotime($list['tgl_selesai'])).'</td>';
			echo '<td>'.$list['ket'].'</td>';
			echo '<td>'.$list['user_id'].'</td>';
			echo '<td>'.
//			CHtml::link(' v ',array('TcutiIzin/terima&mohon_id='.$list['id'])).
			CHtml::button('V', array('submit' => array('TcutiIzin/terima&mohon_id='.$list['id']))).
//			'   -   '.
//			CHtml::link(' x ',array('TcutiIzin/tolak&mohon_id='.$list['id'])).			
			CHtml::button('X', array('submit' => array('TcutiIzin/tolak&mohon_id='.$list['id']))).
			'</td>';
																							
		echo'</tr>';	
	}
	?>
    </tbody>
    </table>
<?php
/*
foreach ($list as $list){
echo $list['id'].$list['pegawai_id'].$list['cuti_id']; echo'<br>';
}
echo'<br> mantap yo<br>';

 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>
<?php
/*
print_r($model);
echo '<br>----------------------------------------------------------------------------------<br>';
print_r($list);
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'list-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'jml_hari',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); */?>