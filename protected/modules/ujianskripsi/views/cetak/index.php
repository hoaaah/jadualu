<?php
/* @var $this CetakController */

$this->breadcrumbs=array(
	'Cetak',
);
?>
<h1>Silahkan klik untuk cetak dokumen berikut.</h1>

<p>
	<?php
	echo CHtml::link('<button type="button" class="btn btn-sm btn-primary">Jadwal Ujian Skripsi Menurut Tanggal Ujian</button>', ['rptjadwaltanggal'], ['onClick' => "return !window.open(this.href, 'SPH', 'width=1024,height=768')"]); 
	?>
</p>
<p>
	<?php
	echo CHtml::link('<button type="button" class="btn btn-sm btn-primary">Jadwal Ujian Skripsi Menurut Penguji</button>', ['rptjadwaldosen'], ['onClick' => "return !window.open(this.href, 'SPH', 'width=1024,height=768')"]); 
	?>	
</p>
