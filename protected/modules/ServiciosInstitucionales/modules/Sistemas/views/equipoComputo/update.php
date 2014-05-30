<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computos'=>array('index'),
	$model->keyIE=>array('view','id'=>$model->keyIE),
	'Update',
);

$this->menu=array(
	array('label'=>'List EquipoComputo', 'url'=>array('index')),
	array('label'=>'Create EquipoComputo', 'url'=>array('create')),
	array('label'=>'View EquipoComputo', 'url'=>array('view', 'id'=>$model->keyIE)),
	array('label'=>'Manage EquipoComputo', 'url'=>array('admin')),
);
?>

<h1>Update EquipoComputo <?php echo $model->keyIE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>