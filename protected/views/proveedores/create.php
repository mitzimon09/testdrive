<?php
/* @var $this ProveedoresController */
/* @var $model proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List proveedores', 'url'=>array('index')),
	array('label'=>'Manage proveedores', 'url'=>array('admin')),
);
?>

<h1>Create proveedores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>