<?php
/* @var $this EmasController */
/* @var $model Emas */

$this->breadcrumbs=array(
	'EMAs'=>array('index'),
	$model->idEmas,
);

$this->menu=array(
	array('label'=>'Listar EMAs', 'url'=>array('index')),
	array('label'=>'Crear EMAs', 'url'=>array('create')),
	array('label'=>'Actualizar EMAs', 'url'=>array('update', 'id'=>$model->idEmas)),
	array('label'=>'Borrar EMAs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEmas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar EMAs', 'url'=>array('admin')),
);
?>

<h1>View Emas #<?php echo $model->idEmas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEmas',
		'nombreEma',
		'latitudEma',
		'longitudEma',
		'altitudEma',
		'urlEma',
		'dateEma',
		'timeEma',
		'temperaturaEma',
		'humedadEma',
		'dewPointEma',
		'vientoEma',
		'dirVientoEma',
		'vientoRafagasEma',
		'presionEma',
		'lluviaEma',
		'codigoEma',
	),
)); ?>
