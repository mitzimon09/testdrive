<?php
/* @var $this OrdenesSoporteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Soportes',
);

$this->menu=array(
	array('label'=>'Create OrdenesSoporte', 'url'=>array('create')),
	array('label'=>'Manage OrdenesSoporte', 'url'=>array('admin')),
);
?>

<h1>Ordenes Soportes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
