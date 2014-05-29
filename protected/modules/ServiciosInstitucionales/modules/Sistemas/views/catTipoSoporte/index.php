<?php
/* @var $this CatTipoSoporteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Tipo Soportes',
);

$this->menu=array(
	array('label'=>'Create CatTipoSoporte', 'url'=>array('create')),
	array('label'=>'Manage CatTipoSoporte', 'url'=>array('admin')),
);
?>

<h1>Cat Tipo Soportes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
