<?php
/* @var $this CargosCuentaPacienteController */
/* @var $model CargosCuentaPaciente */

$this->breadcrumbs=array(
	'Cargos Cuenta Pacientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CargosCuentaPaciente', 'url'=>array('index')),
	array('label'=>'Create CargosCuentaPaciente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cargos-cuenta-paciente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cargos Cuenta Pacientes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cargos-cuenta-paciente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyCAP',
		'numeroE',
		'nCuenta',
		'codProcedimiento',
		'um',
		'cantidad',
		/*
		'precioVenta',
		'iva',
		'costoHospital',
		'seguro',
		'usuario',
		'hora1',
		'fecha1',
		'status',
		'almacen',
		'numCorte',
		'medico',
		'ctaMayor',
		'ctoCosto',
		'auxiliar',
		'ejercicio',
		'gpoProducto',
		'dia',
		'mes',
		'year',
		'diaNumerico',
		'tipoCobro',
		'credencial',
		'statusFactura',
		'statusUrgencias',
		'existencias',
		'almacenSolicitante',
		'almacenDestino',
		'prioridad',
		'tipoPaciente',
		'tipoPago',
		'horaSolicitud',
		'fechaSolicitud',
		'fechaCargo',
		'horaCargo',
		'usuarioCargo',
		'statusCargo',
		'referido',
		'laboratorioReferido',
		'tipoTransaccion',
		'fechaAlta',
		'horaAlta',
		'usuarioAlta',
		'naturaleza',
		'statusDeposito',
		'usuarioTraslado',
		'statusTraslado',
		'tipoCliente',
		'statusEstudio',
		'ruta',
		'statusDX',
		'statusAutorizacion',
		'statusCaja',
		'tipoConvenio',
		'cantidadParticular',
		'cantidadAseguradora',
		'entidad',
		'cargoAuto',
		'statusAuditoria',
		'usuarioSolicitudFactura',
		'horaSolicitudFactura',
		'fechaSolicitudFactura',
		'porcentajeVariable',
		'cargosHospitalarios',
		'numFactura',
		'descripcion',
		'keyClientesInternos',
		'motivo',
		'folioFactura',
		'keyRFC',
		'statusImpresion',
		'usuarioImpresion',
		'statusDevolucion',
		'paquete',
		'numRecibo',
		'statusDescuento',
		'folioVenta',
		'codigoCaja',
		'codigoTarjeta',
		'ultimosDigitos',
		'codigoAutorizacion',
		'numeroCheque',
		'bancoTransferencia',
		'bancoCheque',
		'numeroTransferencia',
		'bancoTC',
		'telefono',
		'banderaPC',
		'statusPC',
		'clientePrincipal',
		'folioAplicado',
		'folioDevolucion',
		'random',
		'keyE',
		'codigoPaquete',
		'ventasDirectas',
		'keyPA',
		'numeroConfirmacion',
		'statusCuenta',
		'ivaParticular',
		'ivaAseguradora',
		'tipoVentaArticulos',
		'usuarioFactura',
		'precioOriginal',
		'ivaOriginal',
		'usuarioDescuento',
		'fechaDescuento',
		'cargoModificable',
		'transferencia',
		'numSolicitud',
		'descripcionArticulo',
		'extension',
		'naturalezaCxC',
		'porcentajeIVA',
		'porcentajeParticular',
		'porcentajeAseguradora',
		'porcentajeIVAParticular',
		'porcentajeIVAAseguradora',
		'statusInventario',
		'clienteFacturacion',
		'tipoFacturacion',
		'tipoCuenta',
		'statusRegreso',
		'gpoDescuento',
		'seguroFacturacion',
		'facturacionEspecial',
		'responsableCuenta',
		'descripcionSeguroFacturacion',
		'fechaVencimiento',
		'descripcionTransaccion',
		'beneficencia',
		'statusRecepcion',
		'statusDescuentoGlobal',
		'descripcionDescuentoGlobal',
		'statusCortesia',
		'statusBeneficencia',
		'folioVentaOtros',
		'abonosCxC',
		'guia',
		'numMovimiento',
		'antibiotico',
		'id_proveedor',
		'id_factura',
		'fechaIngreso',
		'maquilado',
		'fechaCierre',
		'notaCredito',
		'pagoCxCKeyCAP',
		'fechaPagoCxC',
		'almacenIngreso',
		'descripcionAlmacen',
		'descripcionGrupoProducto',
		'descripcionClientePrincipal',
		'descripcionMedico',
		'primeraVez',
		'almacenTraspaso',
		'descripcionpaquete',
		'cantidadBeneficencia',
		'ivaBeneficencia',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
