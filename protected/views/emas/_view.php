<?php
/* @var $this EmasController */
/* @var $data Emas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEmas), array('view', 'id'=>$data->idEmas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreEma')); ?>:</b>
	<?php echo CHtml::encode($data->nombreEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitudEma')); ?>:</b>
	<?php echo CHtml::encode($data->latitudEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitudEma')); ?>:</b>
	<?php echo CHtml::encode($data->longitudEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altitudEma')); ?>:</b>
	<?php echo CHtml::encode($data->altitudEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urlEma')); ?>:</b>
	<?php echo CHtml::encode($data->urlEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateEma')); ?>:</b>
	<?php echo CHtml::encode($data->dateEma); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('timeEma')); ?>:</b>
	<?php echo CHtml::encode($data->timeEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temperaturaEma')); ?>:</b>
	<?php echo CHtml::encode($data->temperaturaEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('humedadEma')); ?>:</b>
	<?php echo CHtml::encode($data->humedadEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dewPointEma')); ?>:</b>
	<?php echo CHtml::encode($data->dewPointEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vientoEma')); ?>:</b>
	<?php echo CHtml::encode($data->vientoEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dirVientoEma')); ?>:</b>
	<?php echo CHtml::encode($data->dirVientoEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vientoRafagasEma')); ?>:</b>
	<?php echo CHtml::encode($data->vientoRafagasEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presionEma')); ?>:</b>
	<?php echo CHtml::encode($data->presionEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lluviaEma')); ?>:</b>
	<?php echo CHtml::encode($data->lluviaEma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoEma')); ?>:</b>
	<?php echo CHtml::encode($data->codigoEma); ?>
	<br />

	*/ ?>

</div>