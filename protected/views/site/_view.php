<?php
/* @var $this NotificationController */
/* @var $data Notification */
?>

<div class="view">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b><?php echo CHtml::link(CHtml::encode($data->tag), array('notification/view', 'id'=>$data->id)); ?></b></h3>
            Oleh <?php echo CHtml::encode($data->userid->name).' pada '.CHtml::encode($data->tgl_mulai); ?>
        </div>
        <div class="panel-body">
            <?php
                    echo substr($data->content, 0, 750);
                    IF(strlen($data->content) >750) echo CHtml::link('...<button type="button" class="btn btn-xs btn-default">Read More</button>', array('notification/view', 'id'=>$data->id));
             ?>
                
        </div>
    </div>
</div>