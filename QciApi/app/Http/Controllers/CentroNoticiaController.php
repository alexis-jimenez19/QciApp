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
    
    public function store(Request $request) 
    {
    }
    
    public function update(Request $request, $_id)
    {
    }

	public function destroy($_id)
    {
    }

    public function validacion(Request $request)
    {
        $reglas = 
        [
            '' => 'required',
         
        ];

        $this->validate($request, $reglas);
    }
}