<?php
/* @var $this EquipoComputoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Equipo Computos',
);

$this->menu=array(
	array('label'=>'Create EquipoComputo', 'url'=>array('create')),
	array('label'=>'Manage EquipoComputo', 'url'=>array('admin')),
);
?>

<h1>Equipo Computos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
