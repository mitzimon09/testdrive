<?php
/* @var $this CatEntidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Entidads',
);

$this->menu=array(
	array('label'=>'Create CatEntidad', 'url'=>array('create')),
	array('label'=>'Manage CatEntidad', 'url'=>array('admin')),
);
?>

<h1>Cat Entidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
