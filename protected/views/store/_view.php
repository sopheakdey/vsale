<?php
/* @var $this StoreController */
/* @var $data Store */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sto_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sto_id), array('view', 'id'=>$data->sto_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item')); ?>:</b>
	<?php echo CHtml::encode($data->item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitprice')); ?>:</b>
	<?php echo CHtml::encode($data->unitprice); ?>
	<br />


</div>