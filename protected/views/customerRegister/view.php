<?php
$this->breadcrumbs=array(
	'Customer Registers'=>array('index'),
	$model->cus_id,
);

$this->menu=array(
	array('label'=>'List CustomerRegister','url'=>array('index')),
	array('label'=>'Create CustomerRegister','url'=>array('create')),
	array('label'=>'Update CustomerRegister','url'=>array('update','id'=>$model->cus_id)),
	array('label'=>'Delete CustomerRegister','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->cus_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerRegister','url'=>array('admin')),
);
?>

<h1>View CustomerRegister #<?php echo $model->cus_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'cus_id',
		'cus_name',
		'gender',
		'email',
		'password',
		'phone',
		'address',
	),
)); ?>
