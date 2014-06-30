<?php
/* @var $this CargosCuentaPacienteController */
/* @var $model CargosCuentaPaciente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keyCAP'); ?>
		<?php echo $form->textField($model,'keyCAP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroE'); ?>
		<?php echo $form->textField($model,'numeroE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nCuenta'); ?>
		<?php echo $form->textField($model,'nCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codProcedimiento'); ?>
		<?php echo $form->textField($model,'codProcedimiento',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'um'); ?>
		<?php echo $form->textField($model,'um',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioVenta'); ?>
		<?php echo $form->textField($model,'precioVenta',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costoHospital'); ?>
		<?php echo $form->textField($model,'costoHospital',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seguro'); ?>
		<?php echo $form->textField($model,'seguro',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora1'); ?>
		<?php echo $form->textField($model,'hora1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha1'); ?>
		<?php echo $form->textField($model,'fecha1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacen'); ?>
		<?php echo $form->textField($model,'almacen',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numCorte'); ?>
		<?php echo $form->textField($model,'numCorte',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medico'); ?>
		<?php echo $form->textField($model,'medico',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctaMayor'); ?>
		<?php echo $form->textField($model,'ctaMayor',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctoCosto'); ?>
		<?php echo $form->textField($model,'ctoCosto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auxiliar'); ?>
		<?php echo $form->textField($model,'auxiliar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ejercicio'); ?>
		<?php echo $form->textField($model,'ejercicio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gpoProducto'); ?>
		<?php echo $form->textField($model,'gpoProducto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia'); ?>
		<?php echo $form->textField($model,'dia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diaNumerico'); ?>
		<?php echo $form->textField($model,'diaNumerico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoCobro'); ?>
		<?php echo $form->textField($model,'tipoCobro',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credencial'); ?>
		<?php echo $form->textField($model,'credencial',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusFactura'); ?>
		<?php echo $form->textField($model,'statusFactura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusUrgencias'); ?>
		<?php echo $form->textField($model,'statusUrgencias',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'existencias'); ?>
		<?php echo $form->textField($model,'existencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenSolicitante'); ?>
		<?php echo $form->textField($model,'almacenSolicitante',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenDestino'); ?>
		<?php echo $form->textField($model,'almacenDestino',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPaciente'); ?>
		<?php echo $form->textField($model,'tipoPaciente',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoPago'); ?>
		<?php echo $form->textField($model,'tipoPago',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaSolicitud'); ?>
		<?php echo $form->textField($model,'horaSolicitud',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaSolicitud'); ?>
		<?php echo $form->textField($model,'fechaSolicitud',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCargo'); ?>
		<?php echo $form->textField($model,'fechaCargo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaCargo'); ?>
		<?php echo $form->textField($model,'horaCargo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioCargo'); ?>
		<?php echo $form->textField($model,'usuarioCargo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusCargo'); ?>
		<?php echo $form->textField($model,'statusCargo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referido'); ?>
		<?php echo $form->textField($model,'referido',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laboratorioReferido'); ?>
		<?php echo $form->textField($model,'laboratorioReferido',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoTransaccion'); ?>
		<?php echo $form->textField($model,'tipoTransaccion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaAlta'); ?>
		<?php echo $form->textField($model,'fechaAlta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaAlta'); ?>
		<?php echo $form->textField($model,'horaAlta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioAlta'); ?>
		<?php echo $form->textField($model,'usuarioAlta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naturaleza'); ?>
		<?php echo $form->textField($model,'naturaleza',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusDeposito'); ?>
		<?php echo $form->textField($model,'statusDeposito',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioTraslado'); ?>
		<?php echo $form->textField($model,'usuarioTraslado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusTraslado'); ?>
		<?php echo $form->textField($model,'statusTraslado',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoCliente'); ?>
		<?php echo $form->textField($model,'tipoCliente',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusEstudio'); ?>
		<?php echo $form->textField($model,'statusEstudio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruta'); ?>
		<?php echo $form->textField($model,'ruta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusDX'); ?>
		<?php echo $form->textField($model,'statusDX',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusAutorizacion'); ?>
		<?php echo $form->textField($model,'statusAutorizacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusCaja'); ?>
		<?php echo $form->textField($model,'statusCaja',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoConvenio'); ?>
		<?php echo $form->textField($model,'tipoConvenio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidadParticular'); ?>
		<?php echo $form->textField($model,'cantidadParticular',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidadAseguradora'); ?>
		<?php echo $form->textField($model,'cantidadAseguradora',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargoAuto'); ?>
		<?php echo $form->textField($model,'cargoAuto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusAuditoria'); ?>
		<?php echo $form->textField($model,'statusAuditoria',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioSolicitudFactura'); ?>
		<?php echo $form->textField($model,'usuarioSolicitudFactura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaSolicitudFactura'); ?>
		<?php echo $form->textField($model,'horaSolicitudFactura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaSolicitudFactura'); ?>
		<?php echo $form->textField($model,'fechaSolicitudFactura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeVariable'); ?>
		<?php echo $form->textField($model,'porcentajeVariable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargosHospitalarios'); ?>
		<?php echo $form->textField($model,'cargosHospitalarios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numFactura'); ?>
		<?php echo $form->textField($model,'numFactura',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyClientesInternos'); ?>
		<?php echo $form->textField($model,'keyClientesInternos',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioFactura'); ?>
		<?php echo $form->textField($model,'folioFactura',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyRFC'); ?>
		<?php echo $form->textField($model,'keyRFC',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusImpresion'); ?>
		<?php echo $form->textField($model,'statusImpresion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioImpresion'); ?>
		<?php echo $form->textField($model,'usuarioImpresion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusDevolucion'); ?>
		<?php echo $form->textField($model,'statusDevolucion',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paquete'); ?>
		<?php echo $form->textField($model,'paquete',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numRecibo'); ?>
		<?php echo $form->textField($model,'numRecibo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusDescuento'); ?>
		<?php echo $form->textField($model,'statusDescuento',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioVenta'); ?>
		<?php echo $form->textField($model,'folioVenta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoCaja'); ?>
		<?php echo $form->textField($model,'codigoCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoTarjeta'); ?>
		<?php echo $form->textField($model,'codigoTarjeta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ultimosDigitos'); ?>
		<?php echo $form->textField($model,'ultimosDigitos',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoAutorizacion'); ?>
		<?php echo $form->textField($model,'codigoAutorizacion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroCheque'); ?>
		<?php echo $form->textField($model,'numeroCheque',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bancoTransferencia'); ?>
		<?php echo $form->textField($model,'bancoTransferencia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bancoCheque'); ?>
		<?php echo $form->textField($model,'bancoCheque',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroTransferencia'); ?>
		<?php echo $form->textField($model,'numeroTransferencia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bancoTC'); ?>
		<?php echo $form->textField($model,'bancoTC',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banderaPC'); ?>
		<?php echo $form->textField($model,'banderaPC',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusPC'); ?>
		<?php echo $form->textField($model,'statusPC',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientePrincipal'); ?>
		<?php echo $form->textField($model,'clientePrincipal',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioAplicado'); ?>
		<?php echo $form->textField($model,'folioAplicado',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioDevolucion'); ?>
		<?php echo $form->textField($model,'folioDevolucion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'random'); ?>
		<?php echo $form->textField($model,'random',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyE'); ?>
		<?php echo $form->textField($model,'keyE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoPaquete'); ?>
		<?php echo $form->textField($model,'codigoPaquete',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ventasDirectas'); ?>
		<?php echo $form->textField($model,'ventasDirectas',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyPA'); ?>
		<?php echo $form->textField($model,'keyPA',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroConfirmacion'); ?>
		<?php echo $form->textField($model,'numeroConfirmacion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusCuenta'); ?>
		<?php echo $form->textField($model,'statusCuenta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ivaParticular'); ?>
		<?php echo $form->textField($model,'ivaParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ivaAseguradora'); ?>
		<?php echo $form->textField($model,'ivaAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoVentaArticulos'); ?>
		<?php echo $form->textField($model,'tipoVentaArticulos',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioFactura'); ?>
		<?php echo $form->textField($model,'usuarioFactura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioOriginal'); ?>
		<?php echo $form->textField($model,'precioOriginal',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ivaOriginal'); ?>
		<?php echo $form->textField($model,'ivaOriginal',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioDescuento'); ?>
		<?php echo $form->textField($model,'usuarioDescuento',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaDescuento'); ?>
		<?php echo $form->textField($model,'fechaDescuento',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargoModificable'); ?>
		<?php echo $form->textField($model,'cargoModificable',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transferencia'); ?>
		<?php echo $form->textField($model,'transferencia',array('size'=>0,'maxlength'=>0)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numSolicitud'); ?>
		<?php echo $form->textField($model,'numSolicitud',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionArticulo'); ?>
		<?php echo $form->textField($model,'descripcionArticulo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension'); ?>
		<?php echo $form->textField($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naturalezaCxC'); ?>
		<?php echo $form->textField($model,'naturalezaCxC',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeIVA'); ?>
		<?php echo $form->textField($model,'porcentajeIVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeParticular'); ?>
		<?php echo $form->textField($model,'porcentajeParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeAseguradora'); ?>
		<?php echo $form->textField($model,'porcentajeAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeIVAParticular'); ?>
		<?php echo $form->textField($model,'porcentajeIVAParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajeIVAAseguradora'); ?>
		<?php echo $form->textField($model,'porcentajeIVAAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusInventario'); ?>
		<?php echo $form->textField($model,'statusInventario',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clienteFacturacion'); ?>
		<?php echo $form->textField($model,'clienteFacturacion',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoFacturacion'); ?>
		<?php echo $form->textField($model,'tipoFacturacion',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoCuenta'); ?>
		<?php echo $form->textField($model,'tipoCuenta',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusRegreso'); ?>
		<?php echo $form->textField($model,'statusRegreso',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gpoDescuento'); ?>
		<?php echo $form->textField($model,'gpoDescuento',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seguroFacturacion'); ?>
		<?php echo $form->textField($model,'seguroFacturacion',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facturacionEspecial'); ?>
		<?php echo $form->textField($model,'facturacionEspecial',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsableCuenta'); ?>
		<?php echo $form->textField($model,'responsableCuenta',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionSeguroFacturacion'); ?>
		<?php echo $form->textField($model,'descripcionSeguroFacturacion',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaVencimiento'); ?>
		<?php echo $form->textField($model,'fechaVencimiento',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionTransaccion'); ?>
		<?php echo $form->textField($model,'descripcionTransaccion',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beneficencia'); ?>
		<?php echo $form->textField($model,'beneficencia',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusRecepcion'); ?>
		<?php echo $form->textField($model,'statusRecepcion',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusDescuentoGlobal'); ?>
		<?php echo $form->textField($model,'statusDescuentoGlobal',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionDescuentoGlobal'); ?>
		<?php echo $form->textField($model,'descripcionDescuentoGlobal',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusCortesia'); ?>
		<?php echo $form->textField($model,'statusCortesia',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusBeneficencia'); ?>
		<?php echo $form->textField($model,'statusBeneficencia',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folioVentaOtros'); ?>
		<?php echo $form->textField($model,'folioVentaOtros',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abonosCxC'); ?>
		<?php echo $form->textField($model,'abonosCxC',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guia'); ?>
		<?php echo $form->textField($model,'guia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numMovimiento'); ?>
		<?php echo $form->textField($model,'numMovimiento',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antibiotico'); ?>
		<?php echo $form->textField($model,'antibiotico',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_factura'); ?>
		<?php echo $form->textField($model,'id_factura',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaIngreso'); ?>
		<?php echo $form->textField($model,'fechaIngreso',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maquilado'); ?>
		<?php echo $form->textField($model,'maquilado',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCierre'); ?>
		<?php echo $form->textField($model,'fechaCierre',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notaCredito'); ?>
		<?php echo $form->textField($model,'notaCredito',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagoCxCKeyCAP'); ?>
		<?php echo $form->textField($model,'pagoCxCKeyCAP',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaPagoCxC'); ?>
		<?php echo $form->textField($model,'fechaPagoCxC',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenIngreso'); ?>
		<?php echo $form->textField($model,'almacenIngreso',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionAlmacen'); ?>
		<?php echo $form->textField($model,'descripcionAlmacen',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionGrupoProducto'); ?>
		<?php echo $form->textField($model,'descripcionGrupoProducto',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionClientePrincipal'); ?>
		<?php echo $form->textField($model,'descripcionClientePrincipal',array('size'=>60,'maxlength'=>254)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionMedico'); ?>
		<?php echo $form->textField($model,'descripcionMedico',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primeraVez'); ?>
		<?php echo $form->textField($model,'primeraVez',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenTraspaso'); ?>
		<?php echo $form->textField($model,'almacenTraspaso',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionpaquete'); ?>
		<?php echo $form->textField($model,'descripcionpaquete',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidadBeneficencia'); ?>
		<?php echo $form->textField($model,'cantidadBeneficencia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ivaBeneficencia'); ?>
		<?php echo $form->textField($model,'ivaBeneficencia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->