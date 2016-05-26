<?php namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;
class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return $this->crearRespuesta($usuarios,200);
    }
    
    public function show($id)
	{
        $usuario = Usuario::find($id);
        if ($usuario) 
        {
            return $this->crearRespuesta($usuario,200);
        }
        return $this->crearRespuestaError("No se encontro el usuario #$id.",404);
	}
}