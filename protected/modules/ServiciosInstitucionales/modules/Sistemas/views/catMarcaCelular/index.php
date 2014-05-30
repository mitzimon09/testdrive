<?php
/* @var $this CatMarcaCelularController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Marca Celulars',
);

$this->menu=array(
	array('label'=>'Create CatMarcaCelular', 'url'=>array('create')),
	array('label'=>'Manage CatMarcaCelular', 'url'=>array('admin')),
);
?>

<h1>Cat Marca Celulars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
