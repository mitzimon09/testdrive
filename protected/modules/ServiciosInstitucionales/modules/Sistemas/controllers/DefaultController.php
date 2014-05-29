<?php

class DefaultController extends Controller
{

	public $layout='//layouts/column1';
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionCatalogoEquipos()
	{
		$this->render('catalogoEquipo');
		
		
	}
}
