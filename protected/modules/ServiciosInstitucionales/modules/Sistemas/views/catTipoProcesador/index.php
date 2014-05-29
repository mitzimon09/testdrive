<?php
/* @var $this CatTipoProcesadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Tipo Procesadors',
);

$this->menu=array(
	array('label'=>'Create CatTipoProcesador', 'url'=>array('create')),
	array('label'=>'Manage CatTipoProcesador', 'url'=>array('admin')),
);
?>

<h1>Cat Tipo Procesadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
