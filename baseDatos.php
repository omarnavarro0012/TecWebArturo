<?php
require_once("vendor/autoload.php");//requerimiento para correr la base de datos.
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

/*$capsule->addConnection([
    'driver'    => 'pgsql',
    'host'      => 'ec2-54-227-249-202.compute-1.amazonaws.com',
    'database'  => 'df70iftqor1s94',
    'username'  => 'zncwhjvowwbfmq',
    'password'  => '0a626679230954a32a41540dddde659f6a894365da1e5425766b849ced7d3fd9',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);*/

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'proyecto',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
