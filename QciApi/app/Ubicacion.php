<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Ubicacion extends Model
{
	
	protected $fillable = ['nombre','foto','idCentroUniversitario','idTipoUbicacion'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'ubicaciones';

	public function centroUniversitario()
	{
		return $this->belongsTo('App\CentroUniversitario');
	}

	public function tipoUbicacion()
	{
		return $this->belongsTo('App\TipoUbicacion');
	}

	public function valoraciones()
	{
		return $this->hasMany('App\ValoracionUbicacion');
	}

	public function comentarios()
	{
		return $this->hasMany('App\ComentarioUbicacion');
	}
}
/*
	public function ()
	{
		return $this->hasMany('App\ ');
		return $this->belongsToMany('App\ ');
		return $this->belongsTo('App\ ');
	}
*/