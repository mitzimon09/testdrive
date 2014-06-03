<?php
/* @var $this ProveedoresController */
/* @var $model proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->keyP=>array('view','id'=>$model->keyP),
	'Update',
);

$this->menu=array(
	array('label'=>'List proveedores', 'url'=>array('index')),
	array('label'=>'Create proveedores', 'url'=>array('create')),
	array('label'=>'View proveedores', 'url'=>array('view', 'id'=>$model->keyP)),
	array('label'=>'Manage proveedores', 'url'=>array('admin')),
);
?>

<h1>Update proveedores <?php echo $model->keyP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>