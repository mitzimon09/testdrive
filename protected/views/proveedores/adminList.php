<h1>Proveedores</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyP',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'keyP')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'id_proveedor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'id_proveedor')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'razonSocial',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'razonSocial')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'ciudad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'ciudad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'estado',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'estado')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'cp',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'cp')),
				'placement' => 'left',
			)
		),		/*

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'telefono',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'telefono')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'telefono1',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'telefono1')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'rfc',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'rfc')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'calle',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'calle')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'colonia',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'colonia')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'usuario',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'usuario')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fecha',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'fecha')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'hora',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'hora')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'status',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'status')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'tipoPersona',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'tipoPersona')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'curp',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'curp')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'ctaContable',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'ctaContable')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'copiaCedula',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'copiaCedula')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'copiaActa',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'copiaActa')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'copiaHacienda',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'copiaHacienda')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'comprobanteDomicilio',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'comprobanteDomicilio')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'retenciones',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'retenciones')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'tipoProveedor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'tipoProveedor')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'procedenciaProveedor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'procedenciaProveedor')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'entidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'entidad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'id_fiscal',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'id_fiscal')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'codigoPostal',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'codigoPostal')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite1',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'limite1')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite2',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'limite2')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite3',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'limite3')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite4',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('proveedores/updateEditable', array('model'=>'proveedores', 'field'=>'limite4')),
				'placement' => 'left',
			)
		),		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('proveedores/create', array('model'=>'proveedores')),)); ?>
</div>

