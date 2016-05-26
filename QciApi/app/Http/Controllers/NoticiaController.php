<?php namespace App\Http\Controllers;
use App\Noticia;
use Illuminate\Http\Request;
class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::all();
        return $this->crearRespuesta($noticias,200);
    }
    
    public function show($id)
	{
        $noticia = Noticia::find($id);
        if ($noticia) 
        {
            return $this->crearRespuesta($noticia,200);
        }
        return $this->crearRespuestaError("No existe noticia con id#$id.",404);
	}
}