<?php
/* @var $this EmasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'EMAs',
);

$this->menu=array(
	array('label'=>'Crear EMAs', 'url'=>array('create')),
	array('label'=>'Administrar EMAs', 'url'=>array('admin')),
);
?>

<h1>Emases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
