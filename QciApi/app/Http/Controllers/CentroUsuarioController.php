<?php namespace App\Http\Controllers;
use App\Usuario;
use App\CentroUniversitario;
use Illuminate\Http\Request;
class CentroUsuarioController extends Controller
{
    public function index($centro_id)
    {
        $centro = CentroUniversitario::find($centro_id);
        if ($centro) 
        {
            $usuarios = $centro->usuarios;

            return $this->crearRespuesta($usuarios,200);
        }
        return $this->crearRespuestaError("No existe centro universitario con id#$centro_id");
    }
 
    public function store(Request $request,$centro_id) 
    {
        
        $centro = CentroUniversitario::find($centro_id);
        if ($centro) 
        {
            $this->validacion($request);
            $campos = $request->all();
            $campos['centro_universitario_id'] = $centro_id;

            Usuario::create($campos);

            return $this->crearRespuesta("Se creo correctamente el usuario.",200);
        }
        return $this->crearRespuestaError("No existe el centro universitario id#$centro_id",404);
        
    }
    
    public function update(Request $request, $centro_id ,$usuario_id)
    {
        $centro = CentroUniversitario::find($centro_id);
        if ($centro) 
        {
            $usuario = Usuario::find($usuario_id);
            if ($usuario) {
                $this->validacion_para_actualizacion($request);
                $usuario->nombreU = $request->get("nombreU");
                $usuario->correoU = $request->get("correoU");
                $usuario->passwordU = $request->get("passwordU");
                $usuario->centro_universitario_id = $centro_id;
                $usuario->save();
                return $this->crearRespuesta("Se ha actualizado el usuario id# $usuario_id.",200);
            }
            return $this->crearRespuestaError("No existe ningun usuario con id# $usuario_id.",404);
        }
        return $this->crearRespuestaError("No existe el centro universitario id#$centro_id",404);
    }

	public function destroy($usuario_id)
    {
        /*
        No he decidido como sera la eliminacion del usuario
        Debido a que no se si sera posible eliminar todas las tablas que
        se relacionen al estudiante la mejor manera de eliminarlo,
        o primero eliminar todo lo relacionado y enseguida borrarlo 
        de la tabla de usuarios
        */
    }

    public function validacion(Request $request)
    {
        $reglas = 
        [
            'nombreU'=> 'required|unique:usuarios,nombreU',
            'correoU'=> 'required|unique:usuarios,correoU',
            'passwordU'=> 'required',
        ];

        $this->validate($request, $reglas);
    }

    public function validacion_para_actualizacion(Request $request)
    {
        $reglas = 
        [
            'nombreU'=> 'required',
            'correoU'=> 'required',
            'passwordU'=> 'required',
        ];

        $this->validate($request, $reglas);
    }
}