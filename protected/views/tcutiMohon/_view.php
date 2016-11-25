<div class="view">
<!--


	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pegawai_id')); ?>:</b>
	<?php echo CHtml::encode($data->pegawai_id); ?>
	<br />
-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('cuti_id')); ?>:</b>
	<?php echo CHtml::encode($data->cutiid->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thn_cuti')); ?>:</b>
	<?php echo CHtml::encode($data->thn_cuti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_hari')); ?>:</b>
	<?php echo CHtml::encode($data->jml_hari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_selesai); ?>
	<br />

	<?php 
	$image = CHtml::Image(Yii::app()->baseUrl . '/images/print_button.png', 'Cetak Dokumen Permohonan');
    echo CHtml::Link($image, array('TcutiMohon/Cmohon&mohon_id='.$data->id), array('target'=>'_blank', 'title'=>'Cetak Surat Permohonan Cuti'));
#	echo CHtml::button('CETAK', array('submit' => array('TcutiMohon/Cmohon&mohon_id='.$data->id)))	;
	/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_aju')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_aju); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket')); ?>:</b>
	<?php echo CHtml::encode($data->ket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>
<?php
			$cek= Yii::app()->db->createCommand('SELECT a.id, b.name AS pegawai_id,b.NIP,b.pangkat, b.gol, b.ruang, c.name AS cuti_id, a.appr, a.thn_cuti, a.jml_hari, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, d.name AS user_id FROM
(
SELECT b.id, a.pegawai_id, a.cuti_id, a.thn_cuti, a.tgl_mulai, a.tgl_selesai, a.tgl_aju, a.alamat, a.ket, 
b.appr, b.jml_hari, b.catatan, b.tanggal, b.user_id
FROM tcuti_mohon a RIGHT OUTER JOIN tcuti_izin b ON a.id = b.mohon_id WHERE b.mohon_id = '.$data->id.'
)a 
INNER JOIN ref_pegawai b ON a.pegawai_id = b.id
INNER JOIN ref_cuti_jn c ON a.cuti_id = c.id
INNER JOIN users d ON a.user_id = d.id
WHERE thn_cuti = '.date('Y')
)->queryAll();
			IF($cek <> NULL){
				IF($cek['0']['appr'] == 1){
				echo CHtml::Link(CHtml::Image(Yii::app()->baseUrl . '/images/print_button_small_green.png', 'Cetak Dokumen Permohonan'), array('TcutiIzin/Cizin&izin_id='.$cek['0']['id']), array('target'=>'_blank', 'title'=>'Permohonan diterima, klik untuk mencetak surat izin'));			
				}ELSEIF($cek['0']['appr'] == 0 ){
				echo CHtml::Link(CHtml::Image(Yii::app()->baseUrl . '/images/print_button_small_red.png', 'Cetak Dokumen Permohonan'), array('#'), array('target'=>'_top', 'title'=>'Kami sangat menyesal permohonan ini ditolak.'));	
				}
			}
			
?>
</div>
