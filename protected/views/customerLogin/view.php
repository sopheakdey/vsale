<?php
$this->breadcrumbs=array(
	'Customer Logins'=>array('index'),
	$model->cus_id,
);

$this->menu=array(
	array('label'=>'List CustomerLogin','url'=>array('index')),
	array('label'=>'Create CustomerLogin','url'=>array('create')),
	array('label'=>'Update CustomerLogin','url'=>array('update','id'=>$model->cus_id)),
	array('label'=>'Delete CustomerLogin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->cus_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerLogin','url'=>array('admin')),
);
?>

<h1>View CustomerLogin #<?php echo $model->cus_id; ?></h1>

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
