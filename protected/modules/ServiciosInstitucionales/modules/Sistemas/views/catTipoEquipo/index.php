<?php
/* @var $this CatTipoEquipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Tipo Equipos',
);

$this->menu=array(
	array('label'=>'Create CatTipoEquipo', 'url'=>array('create')),
	array('label'=>'Manage CatTipoEquipo', 'url'=>array('admin')),
);
?>

<h1>Cat Tipo Equipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
