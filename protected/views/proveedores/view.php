<?php
/* @var $this ProveedoresController */
/* @var $model proveedores */

$this->breadcrumbs=array(
	'Proveedores'=>array('index'),
	$model->keyP,
);

$this->menu=array(
	array('label'=>'List proveedores', 'url'=>array('index')),
	array('label'=>'Create proveedores', 'url'=>array('create')),
	array('label'=>'Update proveedores', 'url'=>array('update', 'id'=>$model->keyP)),
	array('label'=>'Delete proveedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage proveedores', 'url'=>array('admin')),
);
?>

<h1>View proveedores #<?php echo $model->keyP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyP',
		'id_proveedor',
		'razonSocial',
		'ciudad',
		'estado',
		'cp',
		'telefono',
		'telefono1',
		'rfc',
		'calle',
		'colonia',
		'usuario',
		'fecha',
		'hora',
		'status',
		'tipoPersona',
		'curp',
		'ctaContable',
		'copiaCedula',
		'copiaActa',
		'copiaHacienda',
		'comprobanteDomicilio',
		'retenciones',
		'tipoProveedor',
		'procedenciaProveedor',
		'entidad',
		'id_fiscal',
		'codigoPostal',
		'limite1',
		'limite2',
		'limite3',
		'limite4',
	),
)); ?>
