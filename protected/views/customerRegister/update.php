<?php
$this->breadcrumbs=array(
	'Customer Registers'=>array('index'),
	$model->cus_id=>array('view','id'=>$model->cus_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerRegister','url'=>array('index')),
	array('label'=>'Create CustomerRegister','url'=>array('create')),
	array('label'=>'View CustomerRegister','url'=>array('view','id'=>$model->cus_id)),
	array('label'=>'Manage CustomerRegister','url'=>array('admin')),
);
?>

<h1>Update CustomerRegister <?php echo $model->cus_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>