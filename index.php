<?php

define('ALPHA', 'App/');
require_once ALPHA.'functions.php';


$configPath = 'config.json';
$page = @$_GET['page'] ? $_GET['page'] : 'home';

switch ( $page )
{
    case 'cars': 		require_once ALPHA.'Core/cars.php'; 		break;
    case 'allTenants': 	require_once ALPHA.'Core/allTenants.php'; 	break;
    case 'modifyCar': 	require_once ALPHA.'Core/modifyCar.php'; 	break;
    case 'update': 		require_once ALPHA.'Core/update.php'; 		break;
    case 'deleteCar': 	require_once ALPHA.'Core/deleteCar.php'; 	break;
    case 'regularCostumers': require_once ALPHA.'Core/regularCostumers.php';    
}

require_once ALPHA.'Temp/#layout.php';