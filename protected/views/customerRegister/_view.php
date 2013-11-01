<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cus_id),array('view','id'=>$data->cus_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_name')); ?>:</b>
	<?php echo CHtml::encode($data->cus_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />


</div>