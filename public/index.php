<?php

//require __DIR__.'/../vendor/PerfoGEAR/kernel.php';
//
//$app = new kernel();

$start = microtime(true);
class route{

    public static $get = array();

    public static function get($url, $func)
    {
        route::$get[] = [$url, $func];
    }
}

route::get('s', ['s' => function(){
    echo 's2';
}]);

call_user_func(route::$get[0][1]['s']);


$end = microtime(true) - $start;

echo $end;