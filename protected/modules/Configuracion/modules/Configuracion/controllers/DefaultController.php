<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionAsd()
	{
		$this->render('index');
	}
	
	public function actionAdmin()
	{
		$model=new CatAlmacen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CatAlmacen']))
			$model->attributes=$_GET['CatAlmacen'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
}
