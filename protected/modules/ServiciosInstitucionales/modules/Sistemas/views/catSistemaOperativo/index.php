<?php
/* @var $this CatSistemaOperativoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Sistema Operativos',
);

$this->menu=array(
	array('label'=>'Create CatSistemaOperativo', 'url'=>array('create')),
	array('label'=>'Manage CatSistemaOperativo', 'url'=>array('admin')),
);
?>

<h1>Cat Sistema Operativos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
