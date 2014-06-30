<?php
/* @var $this CargosCuentaPacienteController */
/* @var $data CargosCuentaPaciente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyCAP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyCAP), array('view', 'id'=>$data->keyCAP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroE')); ?>:</b>
	<?php echo CHtml::encode($data->numeroE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->nCuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codProcedimiento')); ?>:</b>
	<?php echo CHtml::encode($data->codProcedimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('um')); ?>:</b>
	<?php echo CHtml::encode($data->um); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioVenta')); ?>:</b>
	<?php echo CHtml::encode($data->precioVenta); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costoHospital')); ?>:</b>
	<?php echo CHtml::encode($data->costoHospital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguro')); ?>:</b>
	<?php echo CHtml::encode($data->seguro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora1')); ?>:</b>
	<?php echo CHtml::encode($data->hora1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha1')); ?>:</b>
	<?php echo CHtml::encode($data->fecha1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacen')); ?>:</b>
	<?php echo CHtml::encode($data->almacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numCorte')); ?>:</b>
	<?php echo CHtml::encode($data->numCorte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico')); ?>:</b>
	<?php echo CHtml::encode($data->medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctaMayor')); ?>:</b>
	<?php echo CHtml::encode($data->ctaMayor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctoCosto')); ?>:</b>
	<?php echo CHtml::encode($data->ctoCosto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auxiliar')); ?>:</b>
	<?php echo CHtml::encode($data->auxiliar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ejercicio')); ?>:</b>
	<?php echo CHtml::encode($data->ejercicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpoProducto')); ?>:</b>
	<?php echo CHtml::encode($data->gpoProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diaNumerico')); ?>:</b>
	<?php echo CHtml::encode($data->diaNumerico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoCobro')); ?>:</b>
	<?php echo CHtml::encode($data->tipoCobro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credencial')); ?>:</b>
	<?php echo CHtml::encode($data->credencial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusFactura')); ?>:</b>
	<?php echo CHtml::encode($data->statusFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusUrgencias')); ?>:</b>
	<?php echo CHtml::encode($data->statusUrgencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('existencias')); ?>:</b>
	<?php echo CHtml::encode($data->existencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenSolicitante')); ?>:</b>
	<?php echo CHtml::encode($data->almacenSolicitante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenDestino')); ?>:</b>
	<?php echo CHtml::encode($data->almacenDestino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPaciente')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPaciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoPago')); ?>:</b>
	<?php echo CHtml::encode($data->tipoPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->horaSolicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fechaSolicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCargo')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaCargo')); ?>:</b>
	<?php echo CHtml::encode($data->horaCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCargo')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusCargo')); ?>:</b>
	<?php echo CHtml::encode($data->statusCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referido')); ?>:</b>
	<?php echo CHtml::encode($data->referido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laboratorioReferido')); ?>:</b>
	<?php echo CHtml::encode($data->laboratorioReferido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoTransaccion')); ?>:</b>
	<?php echo CHtml::encode($data->tipoTransaccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->fechaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaAlta')); ?>:</b>
	<?php echo CHtml::encode($data->horaAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioAlta')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioAlta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('naturaleza')); ?>:</b>
	<?php echo CHtml::encode($data->naturaleza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusDeposito')); ?>:</b>
	<?php echo CHtml::encode($data->statusDeposito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioTraslado')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioTraslado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusTraslado')); ?>:</b>
	<?php echo CHtml::encode($data->statusTraslado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoCliente')); ?>:</b>
	<?php echo CHtml::encode($data->tipoCliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusEstudio')); ?>:</b>
	<?php echo CHtml::encode($data->statusEstudio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta')); ?>:</b>
	<?php echo CHtml::encode($data->ruta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusDX')); ?>:</b>
	<?php echo CHtml::encode($data->statusDX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusAutorizacion')); ?>:</b>
	<?php echo CHtml::encode($data->statusAutorizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusCaja')); ?>:</b>
	<?php echo CHtml::encode($data->statusCaja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoConvenio')); ?>:</b>
	<?php echo CHtml::encode($data->tipoConvenio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadParticular')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadParticular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadAseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadAseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargoAuto')); ?>:</b>
	<?php echo CHtml::encode($data->cargoAuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusAuditoria')); ?>:</b>
	<?php echo CHtml::encode($data->statusAuditoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioSolicitudFactura')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioSolicitudFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaSolicitudFactura')); ?>:</b>
	<?php echo CHtml::encode($data->horaSolicitudFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaSolicitudFactura')); ?>:</b>
	<?php echo CHtml::encode($data->fechaSolicitudFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeVariable')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeVariable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargosHospitalarios')); ?>:</b>
	<?php echo CHtml::encode($data->cargosHospitalarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numFactura')); ?>:</b>
	<?php echo CHtml::encode($data->numFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyClientesInternos')); ?>:</b>
	<?php echo CHtml::encode($data->keyClientesInternos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioFactura')); ?>:</b>
	<?php echo CHtml::encode($data->folioFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyRFC')); ?>:</b>
	<?php echo CHtml::encode($data->keyRFC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusImpresion')); ?>:</b>
	<?php echo CHtml::encode($data->statusImpresion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioImpresion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioImpresion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusDevolucion')); ?>:</b>
	<?php echo CHtml::encode($data->statusDevolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paquete')); ?>:</b>
	<?php echo CHtml::encode($data->paquete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numRecibo')); ?>:</b>
	<?php echo CHtml::encode($data->numRecibo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusDescuento')); ?>:</b>
	<?php echo CHtml::encode($data->statusDescuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioVenta')); ?>:</b>
	<?php echo CHtml::encode($data->folioVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoCaja')); ?>:</b>
	<?php echo CHtml::encode($data->codigoCaja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoTarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->codigoTarjeta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ultimosDigitos')); ?>:</b>
	<?php echo CHtml::encode($data->ultimosDigitos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoAutorizacion')); ?>:</b>
	<?php echo CHtml::encode($data->codigoAutorizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroCheque')); ?>:</b>
	<?php echo CHtml::encode($data->numeroCheque); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bancoTransferencia')); ?>:</b>
	<?php echo CHtml::encode($data->bancoTransferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bancoCheque')); ?>:</b>
	<?php echo CHtml::encode($data->bancoCheque); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroTransferencia')); ?>:</b>
	<?php echo CHtml::encode($data->numeroTransferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bancoTC')); ?>:</b>
	<?php echo CHtml::encode($data->bancoTC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banderaPC')); ?>:</b>
	<?php echo CHtml::encode($data->banderaPC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusPC')); ?>:</b>
	<?php echo CHtml::encode($data->statusPC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientePrincipal')); ?>:</b>
	<?php echo CHtml::encode($data->clientePrincipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioAplicado')); ?>:</b>
	<?php echo CHtml::encode($data->folioAplicado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioDevolucion')); ?>:</b>
	<?php echo CHtml::encode($data->folioDevolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('random')); ?>:</b>
	<?php echo CHtml::encode($data->random); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyE')); ?>:</b>
	<?php echo CHtml::encode($data->keyE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoPaquete')); ?>:</b>
	<?php echo CHtml::encode($data->codigoPaquete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventasDirectas')); ?>:</b>
	<?php echo CHtml::encode($data->ventasDirectas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyPA')); ?>:</b>
	<?php echo CHtml::encode($data->keyPA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroConfirmacion')); ?>:</b>
	<?php echo CHtml::encode($data->numeroConfirmacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->statusCuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ivaParticular')); ?>:</b>
	<?php echo CHtml::encode($data->ivaParticular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ivaAseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->ivaAseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoVentaArticulos')); ?>:</b>
	<?php echo CHtml::encode($data->tipoVentaArticulos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioFactura')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioOriginal')); ?>:</b>
	<?php echo CHtml::encode($data->precioOriginal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ivaOriginal')); ?>:</b>
	<?php echo CHtml::encode($data->ivaOriginal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioDescuento')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioDescuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDescuento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDescuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargoModificable')); ?>:</b>
	<?php echo CHtml::encode($data->cargoModificable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transferencia')); ?>:</b>
	<?php echo CHtml::encode($data->transferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->numSolicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionArticulo')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionArticulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension')); ?>:</b>
	<?php echo CHtml::encode($data->extension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('naturalezaCxC')); ?>:</b>
	<?php echo CHtml::encode($data->naturalezaCxC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeIVA')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeIVA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeParticular')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeParticular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeAseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeAseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeIVAParticular')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeIVAParticular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajeIVAAseguradora')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajeIVAAseguradora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusInventario')); ?>:</b>
	<?php echo CHtml::encode($data->statusInventario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clienteFacturacion')); ?>:</b>
	<?php echo CHtml::encode($data->clienteFacturacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoFacturacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipoFacturacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->tipoCuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusRegreso')); ?>:</b>
	<?php echo CHtml::encode($data->statusRegreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpoDescuento')); ?>:</b>
	<?php echo CHtml::encode($data->gpoDescuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguroFacturacion')); ?>:</b>
	<?php echo CHtml::encode($data->seguroFacturacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facturacionEspecial')); ?>:</b>
	<?php echo CHtml::encode($data->facturacionEspecial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsableCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->responsableCuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionSeguroFacturacion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionSeguroFacturacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaVencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaVencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionTransaccion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionTransaccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficencia')); ?>:</b>
	<?php echo CHtml::encode($data->beneficencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusRecepcion')); ?>:</b>
	<?php echo CHtml::encode($data->statusRecepcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusDescuentoGlobal')); ?>:</b>
	<?php echo CHtml::encode($data->statusDescuentoGlobal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionDescuentoGlobal')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionDescuentoGlobal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusCortesia')); ?>:</b>
	<?php echo CHtml::encode($data->statusCortesia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusBeneficencia')); ?>:</b>
	<?php echo CHtml::encode($data->statusBeneficencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folioVentaOtros')); ?>:</b>
	<?php echo CHtml::encode($data->folioVentaOtros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abonosCxC')); ?>:</b>
	<?php echo CHtml::encode($data->abonosCxC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guia')); ?>:</b>
	<?php echo CHtml::encode($data->guia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numMovimiento')); ?>:</b>
	<?php echo CHtml::encode($data->numMovimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antibiotico')); ?>:</b>
	<?php echo CHtml::encode($data->antibiotico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->id_proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_factura')); ?>:</b>
	<?php echo CHtml::encode($data->id_factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->fechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maquilado')); ?>:</b>
	<?php echo CHtml::encode($data->maquilado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaCierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechaCierre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notaCredito')); ?>:</b>
	<?php echo CHtml::encode($data->notaCredito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagoCxCKeyCAP')); ?>:</b>
	<?php echo CHtml::encode($data->pagoCxCKeyCAP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPagoCxC')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPagoCxC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->almacenIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionGrupoProducto')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionGrupoProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionClientePrincipal')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionClientePrincipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionMedico')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionMedico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primeraVez')); ?>:</b>
	<?php echo CHtml::encode($data->primeraVez); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenTraspaso')); ?>:</b>
	<?php echo CHtml::encode($data->almacenTraspaso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionpaquete')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionpaquete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadBeneficencia')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadBeneficencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ivaBeneficencia')); ?>:</b>
	<?php echo CHtml::encode($data->ivaBeneficencia); ?>
	<br />

	*/ ?>

</div>