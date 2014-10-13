<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Ha ingresado al WebService de las estaciones Meteorológicas del Norte de la Patagonia Argentina</h1>


<p>Este servicio brinda los últimos datos de las Estaciones Meteorológicas Automáticas (EMA),
    el sistema se basa en la adquisición de datos de estaciones Meteorológicas Davis. Los datos se 
    actualizan cada 10 minutos. El sistema es abierto y para acceder se debe convocar con la siguiente instrucción:</p>.
<p><b><?php echo  Yii::app()->request->hostInfo; echo Yii::app()->getHomeUrl(); ?>?r=api/datosActuales&ema=INTACHANA</b></p>


<p>Las estaciones disponibles son:</p>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'emas-grid',
	'dataProvider'=>Emas::model()->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'codigoEma',
		'nombreEma',
		'latitudEma',
		'longitudEma',
                array(
                        'name'=>'Código/Link',
                        'type'=>'raw',
                         'value'=>'CHtml::link($data->codigoEma,array("api/datosActuales","ema"=>$data->codigoEma))'
                ), 
		//'altitudEma',
		//'urlEma',
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
		'codigoEma',
		*/
//		array(
//			'class'=>'CButtonColumn',
//		),
	),
)); ?>