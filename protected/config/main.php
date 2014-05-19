<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'theme'=>'bootstrap',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SIMA test en YII',

	// preloading 'log' component
	'preload'=>array(
		'log'//,
		//'bootstrap',
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.vendors.phpexcel.PHPExcel',
    	'ext.yiireport.*',
    	'application.modules.user.models.*',
		
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/**/
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'lacarlota',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
			'ipFilters'=>false,
			'generatorPaths'=>array(
                		'bootstrap.gii', // since 0.9.1
            		),
		),
		/**/
		'ServiciosInstitucionales',
		'Configuracion',
		'user' => array(
			'debug' => false,
			'userTable' => 'yiiuser',
			'translationTable' => 'yiitranslation',
			),
			'usergroup' => array(
			'usergroupTable' => 'yiiusergroup',
			'usergroupMessageTable' => 'yiiuser_group_message',
			),
			'membership' => array(
			'membershipTable' => 'yiimembership',
			'paymentTable' => 'yiipayment',
			),
			'friendship' => array(
			'friendshipTable' => 'yiifriendship',
			),
			'profile' => array(
			'privacySettingTable' => 'yiiprivacysetting',
			'profileFieldTable' => 'yiiprofile_field',
			'profileTable' => 'yiiprofile',
			'profileCommentTable' => 'yiiprofile_comment',
			'profileVisitTable' => 'yiiprofile_visit',
			),
			'role' => array(
			'roleTable' => 'yiirole',
			'userRoleTable' => 'yiiuser_role',
			'actionTable' => 'yiiaction',
			'permissionTable' => 'yiipermission',
			),
			'message' => array(
			'messageTable' => 'yiimessage',
			),
	),//end modules

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class' => 'application.modules.user.components.YumWebUser',
		   'loginUrl' => array('//user/user/login'),
		),
	   'cache' => array('class' => 'system.caching.CDummyCache'),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*//*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sima',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		/**/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/**/
				array(
					'class'=>'CWebLogRoute',
				 	'levels'=>'trace',
			    		'categories'=>'vardump',
				    	'showInFireBug'=>true
				),
				/**/
			),
		),
		'bootstrap'=>array(
            		//'class'=>'application.extensions.bootstrap.components.Bootstrap',
			'class'=>'bootstrap.components.Bootstrap',
       		),
       		
       		
       		'authManager'=>array(
        'class'=>'CDbAuthManager',
        'connectionID'=>'db',
        
    ),
	),
	
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
    'sourceLanguage'=>'en',
    'language'=>'es',
    
    
);
