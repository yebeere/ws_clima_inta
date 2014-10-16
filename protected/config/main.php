<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'WebService Estaciones Meteorológicas Nor-Patagónicas',
        'language'=>'es',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1234',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
            
                'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'emas/<idEmas:\d+>/<Descripcion:.*?>'=>'emas/view',
                		//'<api/<:\w+>/<action:\w+>/<id:\w+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                 // REST patterns
                                array('api/listaEmas', 'pattern'=>'api/<model:\w+>', 'verb'=>'GET'),
                                //array('api/datosActuales', 'pattern'=>'api/<model:\w+>/<codigoEma:\w+>', 'verb'=>'GET'),
                                array('<controller>/datosActuales', 'pattern' => '<controller:\w+>/<id:\d+>', 'verb' => 'GET'),
                                array('api/update', 'pattern'=>'api/<model:\w+>/<IdNoticia:\d+>', 'verb'=>'PUT'),  // Update
                                array('api/delete', 'pattern'=>'api/<model:\w+>/<IdNoticia:\d+>', 'verb'=>'DELETE'),
                                array('api/create', 'pattern'=>'api/<model:\w+>', 'verb'=>'POST'), // Create
                                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

			),
		),
            
		// uncomment the following to enable URLs in path-format
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cuentagotas',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
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
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);