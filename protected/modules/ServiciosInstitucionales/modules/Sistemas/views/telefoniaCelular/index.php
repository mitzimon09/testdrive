<?php
/* @var $this TelefoniaCelularController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Telefonía Celular',
);

$this->menu=array(
	array('label'=>'Create TelefoniaCelular', 'url'=>array('create')),
	array('label'=>'Manage TelefoniaCelular', 'url'=>array('admin')),
);
?>

<h1>Telefonia Celulars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
