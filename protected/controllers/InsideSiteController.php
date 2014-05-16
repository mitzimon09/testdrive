<?php

class InsideSiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/insideSite/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout = "main";
		$this->render('homeindex');
	}
	
	public function actionRolling(){
		$auth=Yii::app()->authManager;
 
		$auth->createOperation('viewInsideindex','view inside index');
		$auth->createOperation('doEverythingelse','do everything else');
		 
		$role=$auth->createRole('admin');
		$role->addChild('viewInsideindex');
		$role->addChild('doEverythingelse');
		 
		$role=$auth->createRole('user');
		$role->addChild('doEverythingelse');
		 
		 
		$auth->assign('admin','emartinez');
		$auth->assign('user','test');
		//echo "stuff";
		Yii::log('stuff done', CLogger::LEVEL_ERROR, '');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function filters()
    {
        return array(
            'accessControl',
        );
    }
	
	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to access 'index' and 'view' actions.
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),*/
			
			array('allow', // allow authenticated users to access all actions
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
}
