<?php
/* @var $this UsuariosController */
/* @var $model usuarios */
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List usuarios', 'url'=>array('index')),
	array('label'=>'Create usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Usuarioses</h1>

<p>
Puedes buscar con operadores de comparasión (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ó <b>=</b>) al principio de la búsqueda.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'folio',
		'usuario',
		/*'passwd',*/
		'nombre',
		'aPaterno',
		'aMaterno',
		/*
		'llave',
		'ejercicio',
		'fecha',
		'medico',
		'tipoUsuario',*/
		'status',
		/*'fechaIngreso',
		'fechaSalida',
		'horaIngreso',
		'horaSalida',
		'entidad',*/
		'email',
		/*'language',
		'ip',
		'roles',
		'almacenSoporteDefault',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


<br />
<br/>
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
<br/>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'usergrid',
    'itemsCssClass' => 'table-bordered items',
    'dataProvider' => $model->search(),
    'columns'=>array(
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'folio',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(    //editable section
                  'url'        => $this->createUrl('usuarios/updateUser'),
                  'placement'  => 'right',
              )               
        ),
        
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'nombre',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(    //editable section
                  'url'        => $this->createUrl('usuarios/updateUser'),
                  'placement'  => 'right',
              )               
        ),
        
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'aPaterno',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(    //editable section
                  'url'        => $this->createUrl('usuarios/updateUser'),
                  'placement'  => 'right',
              )               
        ),
        
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'aMaterno',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(    //editable section
                  'url'        => $this->createUrl('usuarios/updateUser'),
                  'placement'  => 'right',
              )               
        ),
        
        
        
        array(
           'class' => 'editable.EditableColumn',
           'name' => 'status',
           'headerHtmlOptions' => array('style' => 'width: 110px'),
           'editable' => array(    //editable section
           			'type'     => 'select',
           			'source'    => Editable::source(array('activo' => 'activo', 'inactivo' => 'inactivo')),
                  'url'        => $this->createUrl('usuarios/updateEditable'),
                  'placement'  => 'right',
              )               
        ),
        
        
        
        
        
      
         
         array( 
            'class' => 'editable.EditableColumn',
            'name' => 'email',
            'editable' => array(
                'type'      => 'text',
                'url'       => $this->createUrl('usuarios/updateEditable', array('model'=>'usuario', 'field'=>'email')),
                'placement' => 'left',
            )
          ),  
         
         //editable related attribute with sorting.
         //see http://www.yiiframework.com/wiki/281/searching-and-sorting-by-related-model-in-cgridview  
         /*array( 
            'class' => 'editable.EditableColumn',
            'name' => 'email',
            'value' => 'CHtml::value($data, "profile.language")',
            'editable' => array(
                'type'      => 'text',
                'attribute' => 'profile.language',
                'url'       => $this->createUrl('usuarios/updateProfile'),
                'placement' => 'left',
            )
        ), */
    ),
));
?>
