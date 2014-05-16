<?php
/* @var $this UsuariosController */
/* @var $model usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->folio=>array('view','id'=>$model->folio),
	'Update',
);

$this->menu=array(
	array('label'=>'List usuarios', 'url'=>array('index')),
	array('label'=>'Create usuarios', 'url'=>array('create')),
	array('label'=>'View usuarios', 'url'=>array('view', 'id'=>$model->folio)),
	array('label'=>'Manage usuarios', 'url'=>array('admin')),
);
?>

<h1>Update usuarios <?php echo $model->folio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>