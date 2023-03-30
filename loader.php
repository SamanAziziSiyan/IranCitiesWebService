<?php
# cache constants
define('CACHE_ENABLED', 0);
define('CACHE_DIR', __DIR__ . '/cache');

# Authorization Constants
define('JWT_KEY', 'RootIranKey78dfndfj*d7*dHH');
define('JWT_ALG', 'HS256');

include_once 'vendor/autoload.php';
// include_once 'App/Utilities/Response.php';
// include_once 'App/Services/CityService.php';
include_once 'App/iran.php';

spl_autoload_register(function ($class) {
    $class_file = __DIR__ . "/" . $class . ".php";

    if (!(file_exists($class_file) and is_readable($class_file))) {
        // echo '<pre>';
        // var_dump($_SERVER) . '<br>';
        // echo '</pre>';
        die("$class not found");
    }
    include_once $class_file;
});

// // use \App\Services\CityService;
// use \App\Utilities\Response;

// // new ProviService;
// Response::respond([1, 23], 200);
