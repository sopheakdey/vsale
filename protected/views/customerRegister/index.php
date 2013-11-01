<?php
$this->breadcrumbs=array(
	'Customer Registers',
);

$this->menu=array(
	array('label'=>'Create CustomerRegister','url'=>array('create')),
	array('label'=>'Manage CustomerRegister','url'=>array('admin')),
);
?>

<h1>Customer Registers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
