<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    public function crearRespuesta($datos,$codigo)
    {
    	return response()->json(['data'=>$datos],$codigo);
    }

    public function crearRespuestaError($mensaje,$codigo)
    {
    	return response()->json(['menssage'=>$mensaje,'code'=>$codigo],$codigo);
    }

    protected function buildFailedValidationResponse(Request $request, array $errors)
    {
    	return $this->crearRespuestaError($errors,422);
    }
}
/*
<?php namespace App\Http\Controllers;
use App\ ;
use Illuminate\Http\Request;
class CentroController extends Controller
{
    public function index()
    {
    }
    
    public function show($id)
	{
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
*/