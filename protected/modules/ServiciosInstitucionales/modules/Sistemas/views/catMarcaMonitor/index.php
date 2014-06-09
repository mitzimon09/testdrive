<?php
/* @var $this CatMarcaMonitorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Marca Monitors',
);

$this->menu=array(
	array('label'=>'Create CatMarcaMonitor', 'url'=>array('create')),
	array('label'=>'Manage CatMarcaMonitor', 'url'=>array('admin')),
);
?>

<h1>Cat Marca Monitors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
