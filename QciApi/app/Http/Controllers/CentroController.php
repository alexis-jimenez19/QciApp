<?php namespace App\Http\Controllers;
use App\CentroUniversitario;
use Illuminate\Http\Request;
class CentroController extends Controller
{
    public function index()
    {
    	$centros = CentroUniversitario::all();
    	return $this->crearRespuesta($centros, 200);
    }
    
    
    public function show($id)
	{
		$centro = CentroUniversitario::find($id);
		if($centro)
		{
			return $this->crearRespuesta($centro,200);
		}
		return $this->crearRespuestaError("No existe el centro universitario. No fue encontrado.",404);
	}
	
    public function store(Request $request) 
    {
        $this->validacion($request);        
        CentroUniversitario::create($request->all());
        return $this->crearRespuesta("El centro universitario ha sido creado",201);
    }
    
    public function update(Request $request, $centro_id)
    {
        $centro = CentroUniversitario::find($centro_id);
        
        if($centro)
        {
            $this->validacion($request);

            $centro->nombre = $request->get('nombre');
            $centro->siglas = $request->get('siglas');
            
            $centro->save();
            return $this->crearRespuesta("El centro universitario #$centro->id - $centro->nombre se ha actualizado",200);
        }

        return $this->crearRespuestaError("El id especificado no corresponde a ningun centro", 404);
    }


	public function destroy($centro_id)
    {
        	$centro = CentroUniversitario::find($centro_id);
            if ($centro) 
            {
                if(sizeof($centro->usuarios) > 0)
                {
                    //return "el administrador tiene eventos";
                    return $this->crearRespuestaError("El centro universitario tiene usuarios asociados",409);
                }
                //return "el administrador puede eliminarse porq no tiene eventos";
                
                $centro->delete();
                return $this->crearRespuesta("el $centro->id ha sido eliminado",200);
            }
            return $this->crearRespuestaError("No existe el centro universitario",404);
           //return "no existe esa persona administradora";
    }

    public function validacion(Request $request)
    {
        $reglas = 
        [
            'nombre' => 'required',
            'siglas' => 'required',
        ];

        $this->validate($request, $reglas);
    }
}