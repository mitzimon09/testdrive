<?php
/* @var $this CatTipoPlanCelularController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Tipo Plan Celulars',
);

$this->menu=array(
	array('label'=>'Create CatTipoPlanCelular', 'url'=>array('create')),
	array('label'=>'Manage CatTipoPlanCelular', 'url'=>array('admin')),
);
?>

<h1>Cat Tipo Plan Celulars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
