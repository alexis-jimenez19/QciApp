<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class ValoracionUbicacion extends Model
{
	
	protected $fillable = ['idUsuario','idUbicacion','valoracion'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'valoraciones_ubicaciones';

	public function usuario()
	{
		return $this->belongsTo('App\Usuario');
	}

	public function ubicacion()
	{
		return $this->belongsTo('App\Ubicacion');
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