<?php
/* @var $this CargosCuentaPacienteController */
/* @var $model CargosCuentaPaciente */

$this->breadcrumbs=array(
	'Cargos Cuenta Pacientes'=>array('index'),
	$model->keyCAP=>array('view','id'=>$model->keyCAP),
	'Update',
);

$this->menu=array(
	array('label'=>'List CargosCuentaPaciente', 'url'=>array('index')),
	array('label'=>'Create CargosCuentaPaciente', 'url'=>array('create')),
	array('label'=>'View CargosCuentaPaciente', 'url'=>array('view', 'id'=>$model->keyCAP)),
	array('label'=>'Manage CargosCuentaPaciente', 'url'=>array('admin')),
);
?>

<h1>Update CargosCuentaPaciente <?php echo $model->keyCAP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>