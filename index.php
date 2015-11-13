<?php

require_once 'config/main.php';
require_once 'config/db.php';

include_once ROOT.'/controller/showcar.php';

$showCars = new C_Car();
$showCars->get_cars();


include_once ROOT.'/view/layout.php';

$showCars->updateCars();