<?php
/* @var $this UsuariosSimaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios Sima',
);

$this->menu=array(
	array('label'=>'Create UsuariosSima', 'url'=>array('create')),
	array('label'=>'Manage UsuariosSima', 'url'=>array('admin')),
);
?>

<h1>Usuarios Simas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
