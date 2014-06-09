<?php
/* @var $this CatCompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cat Companies',
);

$this->menu=array(
	array('label'=>'Create CatCompany', 'url'=>array('create')),
	array('label'=>'Manage CatCompany', 'url'=>array('admin')),
);
?>

<h1>Cat Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
