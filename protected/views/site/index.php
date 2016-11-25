<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>Selamat datang STANERS!</h1>
    <p>Ini adalah portal repo yang memuat informasi Sidang Skripsi, Dosen Pembimbing, Dosen Penguji, Ujian Komprehensif, dan informasi lainnya seputar skripsi DIV. Silahkan pilih menu disamping untuk informasi yang anda butuhkan.</p>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>