<?php

// change the following paths if necessary test
$yii=dirname(__FILE__).'PATH TO YOUR YII INSTALLATION';
$config=dirname(__FILE__).'/protected/config/main.php';
$globals=dirname(__FILE__).'/protected/config/globals.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($globals);
require_once($yii);
Yii::createWebApplication($config)->run();