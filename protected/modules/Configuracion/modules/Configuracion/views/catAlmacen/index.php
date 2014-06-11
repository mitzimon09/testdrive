<?php
/* @var $this CatAlmacenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Almacens',
);

$this->menu=array(
	array('label'=>'Create CatAlmacen', 'url'=>array('create')),
	array('label'=>'Manage CatAlmacen', 'url'=>array('admin')),
);
?>

<h1>Cat Almacens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
