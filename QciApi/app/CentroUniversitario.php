<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class CentroUniversitario extends Model
{
	
	protected $fillable = ['nombre','siglas'];
	
	protected $hidden = ['id','created_at','updated_at'];
	
	protected $table = 'centros_universitarios';
	
	public function usuarios()
	{
		return $this->hasMany('App\Usuario');
	}

	public function noticias()
	{
		return $this->hasMany('App\Noticia');
	}

	public function profesores()
	{
		return $this->hasMany('App\Profesor');
	}

	public function proyectos()
	{
		return $this->hasMany('App\Proyecto');
	}

	public function ubicaciones()
	{
		return $this->hasMany('App\Ubicacion');
	}

	public function mapa()
	{
		return $this->hasOne('App\Mapa');
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