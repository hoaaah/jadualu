<?php
$this->breadcrumbs=array(
	'Kategori materi bidang',
);

$this->menu=array(
	array('label'=>'Tambah Category', 'url'=>array('create')),
);
?>

<h1>Ref Categories</h1>

	<table>
    <thead>
	<tr>
			<th width="40 px">ID</th>
			<th>Bidang</th>
			<th>No Urut</th>
            <th>Category</th>
			<th class="actions">ACTIONS</th>
	</tr>
    </thead>
    <tbody>
    <?php
	foreach ($list as $list){
		echo'<tr>';
			echo '<td>'.$list['id'].'</td>';
			echo '<td>'.$list['bidang_id'].'</td>';
			echo '<td>'.$list['no_urut'].'</td>';
			echo '<td>'.$list['name'].'</td>';			
			echo '<td>'.			'</td>';
																							
		echo'</tr>';	
	}
	?>
    </tbody>
    </table>
   
<?php /* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */ ?>

