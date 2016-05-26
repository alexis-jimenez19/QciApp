<?php namespace App;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class Noticia extends Model
{
	
	protected $fillable = ['id','titulo','fecha','descripcion','imagen','vistas','ubicacion','idautor','centro_universitario_id'];
	
	protected $hidden = ['created_at','updated_at'];
	
	protected $table = 'noticias';

	public function centroUniversitario()
	{
		return $this->belongsTo('App\CentroUniversitario');
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