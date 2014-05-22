<?php
/* @var $this UsuariosController */
/* @var $model usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->folio,
);

$this->menu=array(
	array('label'=>'List usuarios', 'url'=>array('index')),
	array('label'=>'Create usuarios', 'url'=>array('create')),
	array('label'=>'Update usuarios', 'url'=>array('update', 'id'=>$model->folio)),
	array('label'=>'Delete usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->folio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage usuarios', 'url'=>array('admin')),
);
?>

<h1>View usuarios #<?php echo $model->folio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'folio',
		'usuario',
		'passwd',
		'nombre',
		'aPaterno',
		'aMaterno',
		'llave',
		'ejercicio',
		'fecha',
		'medico',
		'tipoUsuario',
		'status',
		'fechaIngreso',
		'fechaSalida',
		'horaIngreso',
		'horaSalida',
		'entidad',
		'email',
		'language',
		'ip',
		'roles',
		'almacenSoporteDefault',
	),
)); ?>
