<?php
/* @var $this EmasController */
/* @var $model Emas */

$this->breadcrumbs=array(
	'EMAs'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar EMAs', 'url'=>array('index')),
	array('label'=>'Administrar EMAs', 'url'=>array('admin')),
);
?>

<h1>Create Emas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>