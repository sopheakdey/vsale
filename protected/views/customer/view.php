<?php
$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->cus_id,
);

$this->menu=array(
	array('label'=>'List Customer','url'=>array('index')),
	array('label'=>'Create Customer','url'=>array('create')),
	array('label'=>'Update Customer','url'=>array('update','id'=>$model->cus_id)),
	array('label'=>'Delete Customer','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->cus_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customer','url'=>array('admin')),
);
?>

<h1>View Customer #<?php echo $model->cus_id; ?></h1>

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
