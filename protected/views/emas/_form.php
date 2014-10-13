<?php
/* @var $this EmasController */
/* @var $model Emas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreEma'); ?>
		<?php echo $form->textField($model,'nombreEma',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitudEma'); ?>
		<?php echo $form->textField($model,'latitudEma'); ?>
		<?php echo $form->error($model,'latitudEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitudEma'); ?>
		<?php echo $form->textField($model,'longitudEma'); ?>
		<?php echo $form->error($model,'longitudEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altitudEma'); ?>
		<?php echo $form->textField($model,'altitudEma'); ?>
		<?php echo $form->error($model,'altitudEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urlEma'); ?>
		<?php echo $form->textField($model,'urlEma',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'urlEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateEma'); ?>
		<?php echo $form->textField($model,'dateEma'); ?>
		<?php echo $form->error($model,'dateEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeEma'); ?>
		<?php echo $form->textField($model,'timeEma'); ?>
		<?php echo $form->error($model,'timeEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temperaturaEma'); ?>
		<?php echo $form->textField($model,'temperaturaEma'); ?>
		<?php echo $form->error($model,'temperaturaEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'humedadEma'); ?>
		<?php echo $form->textField($model,'humedadEma'); ?>
		<?php echo $form->error($model,'humedadEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dewPointEma'); ?>
		<?php echo $form->textField($model,'dewPointEma'); ?>
		<?php echo $form->error($model,'dewPointEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vientoEma'); ?>
		<?php echo $form->textField($model,'vientoEma'); ?>
		<?php echo $form->error($model,'vientoEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dirVientoEma'); ?>
		<?php echo $form->textField($model,'dirVientoEma'); ?>
		<?php echo $form->error($model,'dirVientoEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vientoRafagasEma'); ?>
		<?php echo $form->textField($model,'vientoRafagasEma'); ?>
		<?php echo $form->error($model,'vientoRafagasEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presionEma'); ?>
		<?php echo $form->textField($model,'presionEma'); ?>
		<?php echo $form->error($model,'presionEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lluviaEma'); ?>
		<?php echo $form->textField($model,'lluviaEma'); ?>
		<?php echo $form->error($model,'lluviaEma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoEma'); ?>
		<?php echo $form->textField($model,'codigoEma',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigoEma'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->