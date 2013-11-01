<?php
$this->breadcrumbs=array(
	'Customer Logins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerLogin','url'=>array('index')),
	array('label'=>'Manage CustomerLogin','url'=>array('admin')),
);
?>

<h1>Create CustomerLogin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>