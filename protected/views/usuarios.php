<?php
/* @var $this usuariosController */
/* @var $model usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-usuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'llave'); ?>
		<?php echo $form->textField($model,'llave'); ?>
		<?php echo $form->error($model,'llave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language'); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip'); ?>
		<?php echo $form->textField($model,'ip'); ?>
		<?php echo $form->error($model,'ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roles'); ?>
		<?php echo $form->textField($model,'roles'); ?>
		<?php echo $form->error($model,'roles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenSoporteDefault'); ?>
		<?php echo $form->textField($model,'almacenSoporteDefault'); ?>
		<?php echo $form->error($model,'almacenSoporteDefault'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario'); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoUsuario'); ?>
		<?php echo $form->textField($model,'tipoUsuario'); ?>
		<?php echo $form->error($model,'tipoUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwd'); ?>
		<?php echo $form->textField($model,'passwd'); ?>
		<?php echo $form->error($model,'passwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre'); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aPaterno'); ?>
		<?php echo $form->textField($model,'aPaterno'); ?>
		<?php echo $form->error($model,'aPaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aMaterno'); ?>
		<?php echo $form->textField($model,'aMaterno'); ?>
		<?php echo $form->error($model,'aMaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico'); ?>
		<?php echo $form->textField($model,'medico'); ?>
		<?php echo $form->error($model,'medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ejercicio'); ?>
		<?php echo $form->textField($model,'ejercicio'); ?>
		<?php echo $form->error($model,'ejercicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaIngreso'); ?>
		<?php echo $form->textField($model,'fechaIngreso'); ?>
		<?php echo $form->error($model,'fechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaSalida'); ?>
		<?php echo $form->textField($model,'fechaSalida'); ?>
		<?php echo $form->error($model,'fechaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaIngreso'); ?>
		<?php echo $form->textField($model,'horaIngreso'); ?>
		<?php echo $form->error($model,'horaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaSalida'); ?>
		<?php echo $form->textField($model,'horaSalida'); ?>
		<?php echo $form->error($model,'horaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad'); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->