<?php namespace App\Controllers;
  use App\Models\Usuarios;

class Login extends BaseController
{
  public function index()
  {
    $mensaje = session('mensaje');
    return view('Login/index', ["mensaje"=>$mensaje]);
  }

  //aqui se valida el formulario del login
  public function entrar(){
    $user = $this->request->getPost('tUser');
    $pass = $this->request->getPost('tPass');
    $usuario = new Usuarios();
    $datosUsuarios = $usuario->obtenerUsuario(['user'=>$user]);

    if(count($datosUsuarios)> 0 && password_verify($pass,$datosUsuarios[0]['pass'])){
      $data = [
        "id_user" => $datosUsuarios[0]['id_user'],
        "user"    => $datosUsuarios[0]['user'],
        "pass"    => $datosUsuarios[0]['pass'],
        "type"    => $datosUsuarios[0]['type']
      ];
      $session = session();
      $session->set($data);
      return redirect()->to(base_url('/Inicio'))->with('mensaje','0');
    }else{
      return redirect()->to(base_url('/Login'))->with('mensaje','1');
    }

  }

  public function salir(){
    $session = session();
    $session->destroy();
    return redirect()->to(base_url('/Login'));
  }







  // controlador  Login.php  ----------------------------------------------------
}