<?php namespace App\Models;
use CodeIgniter\Model;


class Usuarios extends Model
{
  public function obtenerUsuario($data){
    $usuario = $this->db->table('t_usuarios');
    $usuario->where($data);
    return $usuario->get()->getResultArray();
  }


  // modelo  Usuarios.php  ----------------------------------------------------
}