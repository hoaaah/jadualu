<?php
$judul ='Cuti';
$this->setPageTitle($judul.' - '.Yii::app()->name);

$this->breadcrumbs=array(
	'Cindo-Cuti',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
<?php
IF(Yii::app()->session['group_user']['bidang_id']==1 || Yii::app()->session['group_user']['bidang_id'] == 0)
{
echo(Yii::app()->session['group_user']['bidang_id']);
echo '<br>';echo '--------------------------------------------------------------- <br>';
}ELSE{
	print_r($_SESSION);
echo '<br>';echo '--------------------------------------------------------------- <br>';print_r($cek_cuti_tahunan['tahun']);
}
?>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
