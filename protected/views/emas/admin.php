<?php
/* @var $this EmasController */
/* @var $model Emas */

$this->breadcrumbs=array(
	'EMAs'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar EMAs', 'url'=>array('index')),
	array('label'=>'Crear EMAs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#emas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Emases</h1>

<p>
 Opcionalmente Ud. puede ingresar un operador de comparaci�n(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'emas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idEmas',
		'nombreEma',
		'latitudEma',
		'longitudEma',
		'altitudEma',
		'urlEma',
		/*
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
		*/'codigoEma',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
