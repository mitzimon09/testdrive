<?php
/* @var $this CargosCuentaPacienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cargos Cuenta Pacientes',
);

$this->menu=array(
	array('label'=>'Create CargosCuentaPaciente', 'url'=>array('create')),
	array('label'=>'Manage CargosCuentaPaciente', 'url'=>array('admin')),
);
?>

<h1>Cargos Cuenta Pacientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
