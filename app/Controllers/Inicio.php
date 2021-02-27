<?php namespace App\Controllers;


class Inicio extends BaseController
{
  public function index()
  {
    $mensaje = session('mensaje');
    return view('Inicio/index', ["mensaje"=>$mensaje]);
  }

  
  // controlador  Inicio.php  ----------------------------------------------------
}