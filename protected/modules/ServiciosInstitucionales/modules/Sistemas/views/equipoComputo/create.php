<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EquipoComputo', 'url'=>array('index')),
	array('label'=>'Manage EquipoComputo', 'url'=>array('admin')),
);
?>

<h1>Create EquipoComputo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>