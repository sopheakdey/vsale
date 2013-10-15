<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	$model->sto_id=>array('view','id'=>$model->sto_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Store', 'url'=>array('index')),
	array('label'=>'Create Store', 'url'=>array('create')),
	array('label'=>'View Store', 'url'=>array('view', 'id'=>$model->sto_id)),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1>Update Store <?php echo $model->sto_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>