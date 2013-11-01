<?php
$this->breadcrumbs=array(
	'Customer Registers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerRegister','url'=>array('index')),
	array('label'=>'Manage CustomerRegister','url'=>array('admin')),
);
?>

<h1>Create CustomerRegister</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>