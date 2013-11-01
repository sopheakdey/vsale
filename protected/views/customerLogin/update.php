<?php
$this->breadcrumbs=array(
	'Customer Logins'=>array('index'),
	$model->cus_id=>array('view','id'=>$model->cus_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerLogin','url'=>array('index')),
	array('label'=>'Create CustomerLogin','url'=>array('create')),
	array('label'=>'View CustomerLogin','url'=>array('view','id'=>$model->cus_id)),
	array('label'=>'Manage CustomerLogin','url'=>array('admin')),
);
?>

<h1>Update CustomerLogin <?php echo $model->cus_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>