<?php

class EquipoComputoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
   {
      return array(array('CrugeAccessControlFilter'));
   }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new EquipoComputo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$model2 = new CatEntidad;
		$model->descripcionEntidad=$model2->findByPk($model->entidad)->descripcionEntidad;
		$model->usuario=Yii::app()->user->name;
		$model->fecha=date('Y-m-d', time());
		$model->hora=date('h:i a', time());
		
		if(isset($_POST['EquipoComputo']))
		{
			$model->attributes=$_POST['EquipoComputo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keyIE));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionCreateForm()
	{
		$model=new EquipoComputo;
		$form = new CForm('application.modules.ServiciosInstitucionales.modules.Sistemas.views.equipoComputo.crudForm', $model);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		
		$model2 = new CatEntidad;
		$model->descripcionEntidad=$model2->findByPk($model->entidad)->descripcionEntidad;
		$model->usuario=Yii::app()->user->name;
		$model->fecha=date('Y-m-d', time());
		$model->hora=date('h:i a', time());
		
		if(isset($_POST['EquipoComputo']))
		{
			$model->attributes=$_POST['EquipoComputo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keyIE));
		}

		/*$this->render('create',array(
			'model'=>$model,
		));*/
		
		$this->render('createForm', array('model'=>$model,'form'=>$form));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EquipoComputo']))
		{
			$model->attributes=$_POST['EquipoComputo'];
			
			
			$model2 = new CatEntidad;
			$model->descripcionEntidad=$model2->findByPk($model->entidad)->descripcionEntidad;
			$model->usuario=Yii::app()->user->name;
			$model->fecha=date('Y-m-d', time());
			$model->hora=date('h:i a', time());
			//$model->codigo="test2";
			if($model->save())
				$this->redirect(array('view','id'=>$model->keyIE));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionUpdateForm($id)
	{
		$model=$this->loadModel($id);
		$form = new CForm('application.modules.ServiciosInstitucionales.modules.Sistemas.views.equipoComputo.crudForm', $model);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EquipoComputo']))
		{
			$model->attributes=$_POST['EquipoComputo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keyIE));
		}

		/*$this->render('update',array(
			'model'=>$model,
		));*/
		$this->render('createForm', array('model'=>$model,'form'=>$form));
	}
	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EquipoComputo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EquipoComputo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EquipoComputo']))
			$model->attributes=$_GET['EquipoComputo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return EquipoComputo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=EquipoComputo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param EquipoComputo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='equipo-computo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/*
	*Guarda los cambios hechos con x-editable
	*
	*/
	public function actionUpdateEditable() {
		Yii::import('editable.EditableSaver');
		$es = new EditableSaver('EquipoComputo');
		$es->update();
	}
	
	public function actionGetTipoEquipoList()
	{
 		echo CJSON::encode(Editable::source(CatTipoEquipo::model()->findAll(), 'keyTE', 'descripcion')); 
	}
	
	public function actionGetMarcaList()
	{
 		echo CJSON::encode(Editable::source(CatMarca::model()->findAll(), 'keyMA', 'descripcion')); 
	}
	
	public function actionGetMarcaMonitorList()
	{
 		echo CJSON::encode(Editable::source(CatMarcaMonitor::model()->findAll(), 'keyMAM', 'descripcion')); 
	}
	
}
