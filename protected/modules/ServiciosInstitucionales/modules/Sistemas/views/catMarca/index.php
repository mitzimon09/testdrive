<?php
/* @var $this CatMarcaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Marcas',
);

$this->menu=array(
	array('label'=>'Create CatMarca', 'url'=>array('create')),
	array('label'=>'Manage CatMarca', 'url'=>array('admin')),
);
?>

<h1>Cat Marcas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
