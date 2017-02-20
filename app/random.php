<?php
function random($dir){
require_once('config.php');
require_once('tagutil.php');
	$config = new Config();
	$dirstring = escapetag($GLOBALS['basedir'] . $dir);

	$dir = !empty($_GET['rank'])?$_GET['rank']:$dir;
    $files = glob( $dirstring . '/*.*');
    // var_dump($files);
    $index = array_rand($files);
    $file = $dir ."/". basename($files[$index]);
    return $file;
}
?>