<?php
/* @var $this EquipoComputoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Etiquetas',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#equipoLabels-list').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Equipo de Computo</h1>


<?php echo CHtml::link('Filtrar etiquetas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div>
<?php


	$this->widget('zii.widgets.CListView', array(
		'id'=>'equipoLabels-list',
		'dataProvider'=>$model->searchLabels(),
		'itemView'=>'_viewLabel',
	));
?>


</div>

