<div class="view">
    <div class="panel panel-green">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo CHtml::link(CHtml::encode($data->tentang).' oleh '.CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?></h3>
        </div>
        <div class="panel-body">
		<b><?php echo CHtml::encode($data->getAttributeLabel('Tahun')); ?>:</b>
		<?php echo CHtml::encode($data->tahun);?>	</br>
		<b><?php echo CHtml::encode($data->getAttributeLabel('Bidang Skripsi')); ?>:</b>
		<?php echo CHtml::encode($data->puudid->name);?>	</br>
		<i><?php echo $data->tag; // Abstraksi skripsi?></i>
	</br>
    <?php echo CHtml::link(CHtml::encode($data->files), $url=Yii::app()->request->baseUrl . '/unggah/'.CHtml::encode($data->puud).'/'. CHtml::encode($data->files)); ?>
	
	</div>
    </div>
</div>

