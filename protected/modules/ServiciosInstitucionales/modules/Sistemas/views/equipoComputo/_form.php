<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipo-computo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'registro'); ?>
		<?php echo $form->textField($model,'registro',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->textField($model,'departamento',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyTE'); ?>
		<?php echo $form->textField($model,'keyTE'); ?>
		<?php echo $form->error($model,'keyTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyMA'); ?>
		<?php echo $form->textField($model,'keyMA'); ?>
		<?php echo $form->error($model,'keyMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motherboard'); ?>
		<?php echo $form->textField($model,'motherboard',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'motherboard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drives'); ?>
		<?php echo $form->textField($model,'drives',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'drives'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harddisk'); ?>
		<?php echo $form->textField($model,'harddisk'); ?>
		<?php echo $form->error($model,'harddisk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memoriaRam'); ?>
		<?php echo $form->textField($model,'memoriaRam'); ?>
		<?php echo $form->error($model,'memoriaRam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyMAM'); ?>
		<?php echo $form->textField($model,'keyMAM'); ?>
		<?php echo $form->error($model,'keyMAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionUbicacion'); ?>
		<?php echo $form->textField($model,'descripcionUbicacion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcionUbicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monitor'); ?>
		<?php echo $form->textField($model,'monitor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'monitor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitud'); ?>
		<?php echo $form->textField($model,'solicitud',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionEntidad'); ?>
		<?php echo $form->textField($model,'descripcionEntidad',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcionEntidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionAlmacen'); ?>
		<?php echo $form->textField($model,'descripcionAlmacen',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcionAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoProcesador'); ?>
		<?php echo $form->textField($model,'tipoProcesador'); ?>
		<?php echo $form->error($model,'tipoProcesador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'velocidadProcesador'); ?>
		<?php echo $form->textField($model,'velocidadProcesador',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'velocidadProcesador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->