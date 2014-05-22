<?php
/* @var $this UsuariosController */
/* @var $model usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
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
