<?php namespace App\Http\Controllers;
use App\Noticia;
use App\CentroUniversitario;
use Illuminate\Http\Request;
class CentroNoticiaController extends Controller
{
    public function index($centro_id)
    {
        $centro = CentroUniversitario::find($centro_id);
        if ($centro) 
        {
            $noticias = $centro->noticias;
            return $this->crearRespuesta($noticias,200);
        }
        return $this->crearRespuestaError("No existe centro con id # $centro_id.",404);
    }
    
    public function store(Request $request, $centro_id) 
    {
        $centro = CentroUniversitario::find($centro_id);
        if ($centro) 
        {
            $this->validacion($request);
            $campos = $request->all();
            $campos['vistas']=0;
            $campos['centro_universitario_id'] = $centro_id;
            Noticia::create($campos);
            return $this->crearRespuesta("Se creo correctamente la noticia.",200);
        }
        return $this->crearRespuestaError("No se encuentra un centro con id #$centro_id.",404);
    }
    
    public function update(Request $request, $centro_id,$noticia_id)
    {
        $centro = CentroUniversitario::find($centro_id);
        if ($centro) 
        {
            $noticia = Noticia::find($noticia_id);
            if ($noticia) 
            {
                $this->validacion_para_actualizacion($request);
                $noticia->titulo = $request->get("titulo");
                $noticia->fecha = $request->get("fecha");
                $noticia->descripcion = $request->get("descripcion");
                $noticia->imagen = $request->get("imagen");
                $noticia->vistas = $request->get("vistas");
                $noticia->ubicacion = $request->get("ubicacion");
                $noticia->idautor = $request->get("idautor");
                $noticia->centro_universitario_id = $centro_id;
                $noticia->save();
                return $this->crearRespuesta("Se ha actualizado la noticia id# $noticia_id.",200);
            }
            return $this->crearRespuestaError("No existe ningun noticia con id# $noticia_id.",404);
        }
        return $this->crearRespuestaError("No existe el centro universitario id#$centro_id",404);
    }

	public function destroy($centro_id, $noticia_id)
    {
        $noticia = Noticia::find($noticia_id);
        if ($noticia) 
        {
            $noticia->delete();
            return $this->crearRespuesta("el $noticia->id ha sido eliminado",200);
            /*if(sizeof($noticia->) > 0)
            {
                return $this->crearRespuestaError("La noticia tiene algo asociados",409);
            }¡*/
            
        }
        return $this->crearRespuestaError("No existe el noticia",404);
    }

    public function validacion(Request $request)
    {
        $reglas = 
        [
            'titulo' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            
            'ubicacion' => 'required',
            'idautor' => 'required', //recordar que si es 0 el author es anonimo
        ];

        $this->validate($request, $reglas);
    }
    
    public function validacion_para_actualizacion(Request $request)
    {
        $reglas = 
        [
            'titulo' => 'required',
            'fecha' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'vistas' => 'required|numeric',
            'ubicacion' => 'required',
            'idautor' => 'required', //recordar que si es 0 el author es anonimo
        ];

        $this->validate($request, $reglas);
    }
}