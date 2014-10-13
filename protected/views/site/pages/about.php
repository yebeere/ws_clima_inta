<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>Acerca</h1>

<p>Este trabajo se realizó como complemento del Trabajo Final "CuentaGOTAS" de la carrera Tecnicatura Universitaria en Desarrollos Web de la Facultad de Informática de la UNComahue.</p>
<p>Los alumnos participantes del proyecto CuentaGOTAS
<ul>
    <li>
        <b>Lorena Gonzalez</b>
    </li>
    <li><b>Daniel Toth</b></li>
</ul>
<p>Tutor:  Lic. Pablo Kogan</p>
<p >
<div style=" margin: 0 auto">
    <img src="./images/fai.jpg" height="80" width="80" align="middle" ">
    <img src="./images/uncesp.jpg" height="80" width="80" align="middle">
    <img src="./images/logo_inta.png" height="80" width="80" align="middle">
</div></p>
<?php  // echo CHtml::image(Yii::app()->request->baseUrl.'/images/fai.jpg','Facultad de Informática',array('width'=>100,'height'=>100,'position'=>'absolute','text-align'=>'center','margin'=>'0 auto'));
     // echo CHtml::image(Yii::app()->request->baseUrl.'/images/uncesp.jpg','Universidad Nacional del Comahue',array('width'=>100,'height'=>100,'margin'=>'auto'));
?>
