<?php
/* @var $this EmasController */
/* @var $model Emas */

$this->breadcrumbs=array(
	'EMAs'=>array('index'),
	$model->idEmas=>array('view','id'=>$model->idEmas),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar EMAs', 'url'=>array('index')),
	array('label'=>'Crear EMAs', 'url'=>array('create')),
	array('label'=>'Ver EMAs', 'url'=>array('view', 'id'=>$model->idEmas)),
	array('label'=>'Administrar EMAs', 'url'=>array('admin')),
);
?>

<h1>Update Emas <?php echo $model->idEmas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>