<?php
require_once("vendor/autoload.php");//requerimiento para correr la base de datos.
class Usuario extends Illuminate\Database\Eloquent\Model 
{
    protected $table = 'usuarios';
}
//$usuarios = Usuario::all();//obtine todos los objetos 
