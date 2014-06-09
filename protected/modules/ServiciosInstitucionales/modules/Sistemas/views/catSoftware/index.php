<?php
/* @var $this CatSoftwareController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Softwares',
);

$this->menu=array(
	array('label'=>'Create CatSoftware', 'url'=>array('create')),
	array('label'=>'Manage CatSoftware', 'url'=>array('admin')),
);
?>

<h1>Cat Softwares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
