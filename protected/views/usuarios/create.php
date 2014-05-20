<?php
/* @var $this UsuariosController */
/* @var $model usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List usuarios', 'url'=>array('index')),
	array('label'=>'Manage usuarios', 'url'=>array('admin')),
);
?>

<div id="usermenu">
<?php Yum::renderFlash(); ?>
<?php $this->renderMenu(); ?>
</div>

<h1>Create usuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
