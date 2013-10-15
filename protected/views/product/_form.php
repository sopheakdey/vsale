<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_id'); ?>
		<?php echo $form->textField($model,'pro_id'); ?>
		<?php echo $form->error($model,'pro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model,'cat_id', Category::model()->getCategories());  ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sto_id'); ?>
		<?php echo $form->dropDownList($model,'sto_id', Store::model()->getProductname()); ?>
		<?php echo $form->error($model,'sto_id'); ?>
	</div>
        <div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->checkbox($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->