<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<h1>Esto es <i><?php echo CHtml::encode(Yii::app()->name); ?></i> Filtrado por roles</h1>

<p>Esta es la página de inicio interior.</p>

<p>Se pueden filtrar las sigueintes cosas segun los roles</p>
<ul>
	<li><a href="http://www.yiiframework.com/forum/">Catálogos</a></li>
	<li><a href="http://www.yiiframework.com/forum/">Reportes</a></li>
	<li><a href="http://www.yiiframework.com/forum/">Transacciones</a></li>
	<li><a href="http://www.yiiframework.com/forum/">Otros</a></li>
	<li><a href="http://www.yiiframework.com/forum/">Ayuda</a></li>
</ul>
<div class="well">
<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
</div>

