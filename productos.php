<?php
    require_once("vendor/autoload.php");//requerimiento para correr la base de datos.
    class Producto extends Illuminate\Database\Eloquent\Model 
    {
        protected $table = 'productos';
    }
    $productos = Producto::all();
