<?php
/* @var $this DosenController */
/* @var $data Dosen */
?>

<div class="view">
    <div class="col-lg-6 text-center">
        <div class="panel panel-default">
            <!--Tumbnail image
            <div class="col-lg-2 text-center" >
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img class="img-thumbnail" src="http://placehold.it/400x400" height="400px" width="400px" alt="">
                    </div>
                </div>
            </div>
            -->
            <div class="panel-body" align="left">

				<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
				<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
				<?php echo CHtml::encode($data->name); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('degree_titles')); ?>:</b>
				<?php echo CHtml::encode($data->degree_titles); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
				<?php echo CHtml::encode($data->nip); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('instansi')); ?>:</b>
				<?php echo CHtml::encode($data->instansi); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
				<?php echo CHtml::encode($data->contact); ?>
				<br />


            </div>
        </div>
    </div>
</div>
