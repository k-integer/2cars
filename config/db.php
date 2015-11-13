<?php

define('db_host', 'localhost');
define('db_name', 'testcar_db');
define('db_user', 'testcar');
define('db_pass', 'testcar');

require_once LIB.'/ActiveRecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory(MODEL_ROOT);
    $cfg->set_connections(array(
        'development' => 'mysql://'.db_user.':'.db_pass.'@'.db_host.'/'.db_name.';charset=utf8'));
});


