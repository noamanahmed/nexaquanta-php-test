<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=yii-mysql;dbname=yii',
	'emulatePrepare' => true,
	'username' => 'yii',
    'password' => 'yii',
    'charset' => 'utf8',
    'enableParamLogging' => false, // Disable logging of parameter values for security
    'enableProfiling' => false,   // Disable query profiling in production
    'schemaCachingDuration' => 3600, // Cache schema for 1 hour in production
    // 'driverOptions' => array(
        // PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true, // Ensures buffered queries
        // PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode='STRICT_ALL_TABLES'", // Use strict mode
    // ),
	
);