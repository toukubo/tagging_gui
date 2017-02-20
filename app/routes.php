<?php


if(!empty($_GET['move'])){
	// echo $_GET['file'];
	require('move.php');
	move($_GET['file'],$_GET['to']);
	$locationString='Location: ?';
	header($locationString);
	exit;
}
// echo $GLOBALS['basedir'];

$GLOBALS['dir'] = !empty($_GET['tag'])?$_GET['tag']:$dir;
$GLOBALS['basedir'] = $GLOBALS['basedir']  . (!empty($_GET['basedir'])?$_GET['basedir']:"");
// echo $GLOBALS['basedir'];

// echo $_GET['tag'];
// echo $GLOBALS['dir'];

function doView($modelname,$data){
	// $m = new Mustache_Engine;

	// $template = $m->loadTemplate('files');
	// var_dump($template);
	// var_dump($template->templates[0]);
	// var_dump($template->templates[1]);
	require('files.php');
	render($data);
	// echo "mark 4";
}

?>