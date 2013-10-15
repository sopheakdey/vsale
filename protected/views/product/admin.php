<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'pro_id',
                array(
                    'header'=>'Product ID',
                      'name'=>'pro_id'
                    
                ),
		//'cat_id',
                 array(
                     'header'=>'categories',
                     'name'=>'cat_id',
                     'value'=>'$data->cat->cat_name'
                     
                 ),
		//'sto_id',
            array(
                     'header'=>'Product Name',
                     'name'=>'sto_id',
                     'value'=>'$data->store->item'
               ), 
                'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
