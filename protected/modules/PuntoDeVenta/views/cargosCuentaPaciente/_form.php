<?php
/* @var $this CargosCuentaPacienteController */
/* @var $model CargosCuentaPaciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargos-cuenta-paciente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroE'); ?>
		<?php echo $form->textField($model,'numeroE'); ?>
		<?php echo $form->error($model,'numeroE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nCuenta'); ?>
		<?php echo $form->textField($model,'nCuenta'); ?>
		<?php echo $form->error($model,'nCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codProcedimiento'); ?>
		<?php echo $form->textField($model,'codProcedimiento',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'codProcedimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'um'); ?>
		<?php echo $form->textField($model,'um',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'um'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioVenta'); ?>
		<?php echo $form->textField($model,'precioVenta',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'precioVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iva'); ?>
		<?php echo $form->textField($model,'iva',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'iva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costoHospital'); ?>
		<?php echo $form->textField($model,'costoHospital',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'costoHospital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seguro'); ?>
		<?php echo $form->textField($model,'seguro',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'seguro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora1'); ?>
		<?php echo $form->textField($model,'hora1',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hora1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha1'); ?>
		<?php echo $form->textField($model,'fecha1',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacen'); ?>
		<?php echo $form->textField($model,'almacen',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'almacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numCorte'); ?>
		<?php echo $form->textField($model,'numCorte',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numCorte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico'); ?>
		<?php echo $form->textField($model,'medico',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctaMayor'); ?>
		<?php echo $form->textField($model,'ctaMayor',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ctaMayor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctoCosto'); ?>
		<?php echo $form->textField($model,'ctoCosto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ctoCosto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auxiliar'); ?>
		<?php echo $form->textField($model,'auxiliar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'auxiliar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ejercicio'); ?>
		<?php echo $form->textField($model,'ejercicio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ejercicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gpoProducto'); ?>
		<?php echo $form->textField($model,'gpoProducto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gpoProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diaNumerico'); ?>
		<?php echo $form->textField($model,'diaNumerico'); ?>
		<?php echo $form->error($model,'diaNumerico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoCobro'); ?>
		<?php echo $form->textField($model,'tipoCobro',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoCobro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credencial'); ?>
		<?php echo $form->textField($model,'credencial',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'credencial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusFactura'); ?>
		<?php echo $form->textField($model,'statusFactura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusUrgencias'); ?>
		<?php echo $form->textField($model,'statusUrgencias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusUrgencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'existencias'); ?>
		<?php echo $form->textField($model,'existencias'); ?>
		<?php echo $form->error($model,'existencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenSolicitante'); ?>
		<?php echo $form->textField($model,'almacenSolicitante',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'almacenSolicitante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenDestino'); ?>
		<?php echo $form->textField($model,'almacenDestino',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'almacenDestino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prioridad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoPaciente'); ?>
		<?php echo $form->textField($model,'tipoPaciente',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoPaciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoPago'); ?>
		<?php echo $form->textField($model,'tipoPago',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaSolicitud'); ?>
		<?php echo $form->textField($model,'horaSolicitud',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'horaSolicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaSolicitud'); ?>
		<?php echo $form->textField($model,'fechaSolicitud',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fechaSolicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCargo'); ?>
		<?php echo $form->textField($model,'fechaCargo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fechaCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaCargo'); ?>
		<?php echo $form->textField($model,'horaCargo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'horaCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioCargo'); ?>
		<?php echo $form->textField($model,'usuarioCargo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuarioCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusCargo'); ?>
		<?php echo $form->textField($model,'statusCargo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referido'); ?>
		<?php echo $form->textField($model,'referido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'referido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laboratorioReferido'); ?>
		<?php echo $form->textField($model,'laboratorioReferido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'laboratorioReferido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoTransaccion'); ?>
		<?php echo $form->textField($model,'tipoTransaccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoTransaccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaAlta'); ?>
		<?php echo $form->textField($model,'fechaAlta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fechaAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaAlta'); ?>
		<?php echo $form->textField($model,'horaAlta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'horaAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioAlta'); ?>
		<?php echo $form->textField($model,'usuarioAlta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuarioAlta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'naturaleza'); ?>
		<?php echo $form->textField($model,'naturaleza',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'naturaleza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusDeposito'); ?>
		<?php echo $form->textField($model,'statusDeposito',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusDeposito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioTraslado'); ?>
		<?php echo $form->textField($model,'usuarioTraslado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuarioTraslado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusTraslado'); ?>
		<?php echo $form->textField($model,'statusTraslado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusTraslado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoCliente'); ?>
		<?php echo $form->textField($model,'tipoCliente',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusEstudio'); ?>
		<?php echo $form->textField($model,'statusEstudio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusEstudio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta'); ?>
		<?php echo $form->textField($model,'ruta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusDX'); ?>
		<?php echo $form->textField($model,'statusDX',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusDX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusAutorizacion'); ?>
		<?php echo $form->textField($model,'statusAutorizacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusAutorizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusCaja'); ?>
		<?php echo $form->textField($model,'statusCaja',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoConvenio'); ?>
		<?php echo $form->textField($model,'tipoConvenio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoConvenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadParticular'); ?>
		<?php echo $form->textField($model,'cantidadParticular',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cantidadParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadAseguradora'); ?>
		<?php echo $form->textField($model,'cantidadAseguradora',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cantidadAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargoAuto'); ?>
		<?php echo $form->textField($model,'cargoAuto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargoAuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusAuditoria'); ?>
		<?php echo $form->textField($model,'statusAuditoria',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusAuditoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioSolicitudFactura'); ?>
		<?php echo $form->textField($model,'usuarioSolicitudFactura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuarioSolicitudFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaSolicitudFactura'); ?>
		<?php echo $form->textField($model,'horaSolicitudFactura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'horaSolicitudFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaSolicitudFactura'); ?>
		<?php echo $form->textField($model,'fechaSolicitudFactura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fechaSolicitudFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeVariable'); ?>
		<?php echo $form->textField($model,'porcentajeVariable'); ?>
		<?php echo $form->error($model,'porcentajeVariable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargosHospitalarios'); ?>
		<?php echo $form->textField($model,'cargosHospitalarios',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargosHospitalarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numFactura'); ?>
		<?php echo $form->textField($model,'numFactura',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'numFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyClientesInternos'); ?>
		<?php echo $form->textField($model,'keyClientesInternos',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'keyClientesInternos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folioFactura'); ?>
		<?php echo $form->textField($model,'folioFactura',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'folioFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyRFC'); ?>
		<?php echo $form->textField($model,'keyRFC',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'keyRFC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusImpresion'); ?>
		<?php echo $form->textField($model,'statusImpresion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusImpresion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioImpresion'); ?>
		<?php echo $form->textField($model,'usuarioImpresion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuarioImpresion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusDevolucion'); ?>
		<?php echo $form->textField($model,'statusDevolucion',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'statusDevolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paquete'); ?>
		<?php echo $form->textField($model,'paquete',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'paquete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numRecibo'); ?>
		<?php echo $form->textField($model,'numRecibo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numRecibo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusDescuento'); ?>
		<?php echo $form->textField($model,'statusDescuento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusDescuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folioVenta'); ?>
		<?php echo $form->textField($model,'folioVenta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'folioVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoCaja'); ?>
		<?php echo $form->textField($model,'codigoCaja'); ?>
		<?php echo $form->error($model,'codigoCaja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoTarjeta'); ?>
		<?php echo $form->textField($model,'codigoTarjeta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoTarjeta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ultimosDigitos'); ?>
		<?php echo $form->textField($model,'ultimosDigitos',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ultimosDigitos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoAutorizacion'); ?>
		<?php echo $form->textField($model,'codigoAutorizacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoAutorizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroCheque'); ?>
		<?php echo $form->textField($model,'numeroCheque',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'numeroCheque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bancoTransferencia'); ?>
		<?php echo $form->textField($model,'bancoTransferencia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bancoTransferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bancoCheque'); ?>
		<?php echo $form->textField($model,'bancoCheque',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bancoCheque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroTransferencia'); ?>
		<?php echo $form->textField($model,'numeroTransferencia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'numeroTransferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bancoTC'); ?>
		<?php echo $form->textField($model,'bancoTC',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bancoTC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banderaPC'); ?>
		<?php echo $form->textField($model,'banderaPC',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'banderaPC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusPC'); ?>
		<?php echo $form->textField($model,'statusPC',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusPC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientePrincipal'); ?>
		<?php echo $form->textField($model,'clientePrincipal',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'clientePrincipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folioAplicado'); ?>
		<?php echo $form->textField($model,'folioAplicado',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'folioAplicado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folioDevolucion'); ?>
		<?php echo $form->textField($model,'folioDevolucion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'folioDevolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'random'); ?>
		<?php echo $form->textField($model,'random',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'random'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyE'); ?>
		<?php echo $form->textField($model,'keyE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'keyE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoPaquete'); ?>
		<?php echo $form->textField($model,'codigoPaquete',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoPaquete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventasDirectas'); ?>
		<?php echo $form->textField($model,'ventasDirectas',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'ventasDirectas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyPA'); ?>
		<?php echo $form->textField($model,'keyPA',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'keyPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroConfirmacion'); ?>
		<?php echo $form->textField($model,'numeroConfirmacion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numeroConfirmacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusCuenta'); ?>
		<?php echo $form->textField($model,'statusCuenta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'statusCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ivaParticular'); ?>
		<?php echo $form->textField($model,'ivaParticular'); ?>
		<?php echo $form->error($model,'ivaParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ivaAseguradora'); ?>
		<?php echo $form->textField($model,'ivaAseguradora'); ?>
		<?php echo $form->error($model,'ivaAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoVentaArticulos'); ?>
		<?php echo $form->textField($model,'tipoVentaArticulos',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tipoVentaArticulos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioFactura'); ?>
		<?php echo $form->textField($model,'usuarioFactura',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuarioFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioOriginal'); ?>
		<?php echo $form->textField($model,'precioOriginal',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'precioOriginal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ivaOriginal'); ?>
		<?php echo $form->textField($model,'ivaOriginal',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ivaOriginal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioDescuento'); ?>
		<?php echo $form->textField($model,'usuarioDescuento',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'usuarioDescuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaDescuento'); ?>
		<?php echo $form->textField($model,'fechaDescuento',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'fechaDescuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargoModificable'); ?>
		<?php echo $form->textField($model,'cargoModificable',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cargoModificable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transferencia'); ?>
		<?php echo $form->textField($model,'transferencia',array('size'=>0,'maxlength'=>0)); ?>
		<?php echo $form->error($model,'transferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numSolicitud'); ?>
		<?php echo $form->textField($model,'numSolicitud',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numSolicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionArticulo'); ?>
		<?php echo $form->textField($model,'descripcionArticulo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcionArticulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension'); ?>
		<?php echo $form->textField($model,'extension'); ?>
		<?php echo $form->error($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'naturalezaCxC'); ?>
		<?php echo $form->textField($model,'naturalezaCxC',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'naturalezaCxC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeIVA'); ?>
		<?php echo $form->textField($model,'porcentajeIVA'); ?>
		<?php echo $form->error($model,'porcentajeIVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeParticular'); ?>
		<?php echo $form->textField($model,'porcentajeParticular'); ?>
		<?php echo $form->error($model,'porcentajeParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeAseguradora'); ?>
		<?php echo $form->textField($model,'porcentajeAseguradora'); ?>
		<?php echo $form->error($model,'porcentajeAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeIVAParticular'); ?>
		<?php echo $form->textField($model,'porcentajeIVAParticular'); ?>
		<?php echo $form->error($model,'porcentajeIVAParticular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajeIVAAseguradora'); ?>
		<?php echo $form->textField($model,'porcentajeIVAAseguradora'); ?>
		<?php echo $form->error($model,'porcentajeIVAAseguradora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusInventario'); ?>
		<?php echo $form->textField($model,'statusInventario',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'statusInventario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clienteFacturacion'); ?>
		<?php echo $form->textField($model,'clienteFacturacion',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'clienteFacturacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoFacturacion'); ?>
		<?php echo $form->textField($model,'tipoFacturacion',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'tipoFacturacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoCuenta'); ?>
		<?php echo $form->textField($model,'tipoCuenta',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tipoCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusRegreso'); ?>
		<?php echo $form->textField($model,'statusRegreso',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'statusRegreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gpoDescuento'); ?>
		<?php echo $form->textField($model,'gpoDescuento',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'gpoDescuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seguroFacturacion'); ?>
		<?php echo $form->textField($model,'seguroFacturacion',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'seguroFacturacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facturacionEspecial'); ?>
		<?php echo $form->textField($model,'facturacionEspecial',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'facturacionEspecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsableCuenta'); ?>
		<?php echo $form->textField($model,'responsableCuenta',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'responsableCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionSeguroFacturacion'); ?>
		<?php echo $form->textField($model,'descripcionSeguroFacturacion',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'descripcionSeguroFacturacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaVencimiento'); ?>
		<?php echo $form->textField($model,'fechaVencimiento',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'fechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionTransaccion'); ?>
		<?php echo $form->textField($model,'descripcionTransaccion',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'descripcionTransaccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficencia'); ?>
		<?php echo $form->textField($model,'beneficencia',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'beneficencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusRecepcion'); ?>
		<?php echo $form->textField($model,'statusRecepcion',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'statusRecepcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusDescuentoGlobal'); ?>
		<?php echo $form->textField($model,'statusDescuentoGlobal',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'statusDescuentoGlobal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionDescuentoGlobal'); ?>
		<?php echo $form->textField($model,'descripcionDescuentoGlobal',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'descripcionDescuentoGlobal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusCortesia'); ?>
		<?php echo $form->textField($model,'statusCortesia',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'statusCortesia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusBeneficencia'); ?>
		<?php echo $form->textField($model,'statusBeneficencia',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'statusBeneficencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folioVentaOtros'); ?>
		<?php echo $form->textField($model,'folioVentaOtros',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'folioVentaOtros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abonosCxC'); ?>
		<?php echo $form->textField($model,'abonosCxC',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'abonosCxC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'guia'); ?>
		<?php echo $form->textField($model,'guia'); ?>
		<?php echo $form->error($model,'guia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numMovimiento'); ?>
		<?php echo $form->textField($model,'numMovimiento',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'numMovimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antibiotico'); ?>
		<?php echo $form->textField($model,'antibiotico',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'antibiotico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_factura'); ?>
		<?php echo $form->textField($model,'id_factura',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'id_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaIngreso'); ?>
		<?php echo $form->textField($model,'fechaIngreso',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'fechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maquilado'); ?>
		<?php echo $form->textField($model,'maquilado',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'maquilado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCierre'); ?>
		<?php echo $form->textField($model,'fechaCierre',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'fechaCierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notaCredito'); ?>
		<?php echo $form->textField($model,'notaCredito',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'notaCredito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagoCxCKeyCAP'); ?>
		<?php echo $form->textField($model,'pagoCxCKeyCAP',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'pagoCxCKeyCAP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaPagoCxC'); ?>
		<?php echo $form->textField($model,'fechaPagoCxC',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fechaPagoCxC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenIngreso'); ?>
		<?php echo $form->textField($model,'almacenIngreso',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'almacenIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionAlmacen'); ?>
		<?php echo $form->textField($model,'descripcionAlmacen',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'descripcionAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionGrupoProducto'); ?>
		<?php echo $form->textField($model,'descripcionGrupoProducto',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'descripcionGrupoProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionClientePrincipal'); ?>
		<?php echo $form->textField($model,'descripcionClientePrincipal',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'descripcionClientePrincipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionMedico'); ?>
		<?php echo $form->textField($model,'descripcionMedico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcionMedico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primeraVez'); ?>
		<?php echo $form->textField($model,'primeraVez',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'primeraVez'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenTraspaso'); ?>
		<?php echo $form->textField($model,'almacenTraspaso',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'almacenTraspaso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionpaquete'); ?>
		<?php echo $form->textField($model,'descripcionpaquete',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcionpaquete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadBeneficencia'); ?>
		<?php echo $form->textField($model,'cantidadBeneficencia',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cantidadBeneficencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ivaBeneficencia'); ?>
		<?php echo $form->textField($model,'ivaBeneficencia',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ivaBeneficencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->