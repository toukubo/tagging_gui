<?php

function doThing($dir){
	$file = random($dir);
	require('./app/files_controller.php');
	$fileObject = get($file);
	// var_dump($fileObject);
	doView("files",$fileObject);
}


require_once('./app/config.php');
require('./app/routes.php');
require('./app/random.php');
require_once('./app/file.php');
// echo $GLOBALS['dir'];
doThing($GLOBALS['dir']);


?>