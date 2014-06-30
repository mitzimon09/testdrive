<?php
/* @var $this CargosCuentaPacienteController */
/* @var $model CargosCuentaPaciente */

$this->breadcrumbs=array(
	'Cargos Cuenta Pacientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CargosCuentaPaciente', 'url'=>array('index')),
	array('label'=>'Manage CargosCuentaPaciente', 'url'=>array('admin')),
);
?>

<h1>Create CargosCuentaPaciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>