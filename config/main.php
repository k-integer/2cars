<?php 


define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('LIB',ROOT.'/engine/lib');
define('MODEL_ROOT',ROOT.'/engine/models/');

spl_autoload_extensions('.php');
set_include_path(MODEL_ROOT);
spl_autoload_register(
	function($class){
		spl_autoload($class);
	}
);

