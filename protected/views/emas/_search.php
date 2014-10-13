<?php
/* @var $this EmasController */
/* @var $model Emas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEmas'); ?>
		<?php echo $form->textField($model,'idEmas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreEma'); ?>
		<?php echo $form->textField($model,'nombreEma',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latitudEma'); ?>
		<?php echo $form->textField($model,'latitudEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'longitudEma'); ?>
		<?php echo $form->textField($model,'longitudEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altitudEma'); ?>
		<?php echo $form->textField($model,'altitudEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'urlEma'); ?>
		<?php echo $form->textField($model,'urlEma',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateEma'); ?>
		<?php echo $form->textField($model,'dateEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeEma'); ?>
		<?php echo $form->textField($model,'timeEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'temperaturaEma'); ?>
		<?php echo $form->textField($model,'temperaturaEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'humedadEma'); ?>
		<?php echo $form->textField($model,'humedadEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dewPointEma'); ?>
		<?php echo $form->textField($model,'dewPointEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vientoEma'); ?>
		<?php echo $form->textField($model,'vientoEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dirVientoEma'); ?>
		<?php echo $form->textField($model,'dirVientoEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vientoRafagasEma'); ?>
		<?php echo $form->textField($model,'vientoRafagasEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presionEma'); ?>
		<?php echo $form->textField($model,'presionEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lluviaEma'); ?>
		<?php echo $form->textField($model,'lluviaEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoEma'); ?>
		<?php echo $form->textField($model,'codigoEma',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->